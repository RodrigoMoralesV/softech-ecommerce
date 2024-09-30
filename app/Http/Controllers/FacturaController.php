<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\FacturaMail;
use App\Models\Documento;
use App\Models\Empresa;
use App\Models\Resolucion;
use App\Models\Transaccion;
use App\Models\User;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use PDF;

class FacturaController extends Controller
{
    public function crearFactura()
    {
        // Acceder a la transacción por su clave primaria "com"
        $codTra = Transaccion::find('com')->codigo_transaccion;

        $numFac = Str::random(8);
        while (Documento::where('numero_documento', $numFac)->exists()) {
            $numFac = Str::random(8);
        }

        // Obtener el número de resolución y el NIT de la empresa
        $numRes = Resolucion::value('numero_resolucion');
        $numCon = Resolucion::Value('consecutivo_venta');
        $nit = Empresa::value('nit_empresa');

        // Información del usuario autenticado
        $datUsu = Auth::user();
        $idCli = $datUsu->id_cliente;
        $numIde = $datUsu->numero_identificacion_cliente;
        
        $fecFac = Carbon::now()->toDateTimeString();
        $ivaDoc = session('iva');
        $valTot = session('total');

        $totNet = session('total_neto');
        $fec = Carbon::now()->toDateString();
        $hor = Carbon::now()->toTimeString();

        // Generación del CUFE
        $cufe = $this->generarCUFE($numFac, $fec, $hor, $totNet, $valTot, $nit, $numIde);

        // Inserción en la base de datos
        $documento = new Documento;
        $documento->codigo_transaccion = $codTra;
        $documento->numero_documento = $numFac;
        $documento->numero_resolucion = $numRes;
        $documento->cliente_id = $idCli;
        $documento->nit_empresa = $nit;
        $documento->fecha_documento = $fecFac;
        $documento->codigo_cufe = $cufe;
        $documento->porcentaje_iva_documento = 0.19;
        $documento->iva_documento = $ivaDoc;
        $documento->porcentaje_descuento_documento = 0.0;
        $documento->valor_descuento_documento = 0;
        // Se especifica el tipo de hash del CUFE
        $documento->identificador_cufe = 'sha384';
        $documento->monto = $valTot;
        $documento->estado = 1;
        $documento->save();

        // Obtener los datos del cliente
        $carrito = session()->get('cart');
        $cliente = User::find($idCli); 
        $empresa = Empresa::first();
        
        $cantidad = 0;
        foreach ($carrito as $producto) {
            $cantidad += $producto['stock'];
        }

        $consecutivo = Documento::count();
        $consecutivo += 1;

        // Generar el PDF con los datos de la factura
        $pdf = PDF::loadView('payment.factura', [
            'documento' => $documento, 
            'cliente' => $cliente, 
            'carrito' => $carrito, 
            'empresa' => $empresa,
            'cantidad' => $cantidad,
            'neto' => $totNet,
            'consecutivo' => $consecutivo,
            'maxConsecutivo' => $numCon,
        ]);
        
        // Ver el PDF directamente
        // return $pdf->stream('factura_' . $numFac . '.pdf');

        $messageData = [
            'numFac' => $numFac,
            'nombreCliente' => $cliente->nombre,
        ];

        Mail::to($cliente->email)->send(new FacturaMail($messageData, $pdf, $numFac));

        session()->forget('cart');

        return redirect('index');
    }

    public function generarCUFE($numFac, $fecFac, $horFac, $valFac, $valTot, $nitEmp, $numIde)
    {
        $ClTec = '693ff6f2a553c3646a063436fd4dd9ded0311471';

        return hash('sha384', $numFac . $fecFac . $horFac . $valFac . 01 . '0.19' . 04 . '0.0' . 03 . '0.0' . $valTot . $nitEmp . $numIde . $ClTec . 2);
    }
}
