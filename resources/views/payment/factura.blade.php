<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factura Electrónica de Venta</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.2;
            margin: 0;
            padding: 10px;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
        }
        .header {
            text-align: center;
            margin-bottom: 10px;
        }
        .logo {
            max-width: 100px;
            height: auto;
        }
        h1, h2 {
            margin: 5px 0;
        }
        h4 {
            text-align: center;
        }
        p {
            margin: 2px 0;
        }
        .row {
            text-align: center;
            margin-bottom: 10px;
        }
        .factura-info {
            border: 1px solid #ccc;
            padding: 5px;
        }
        table {
            margin-top: 30px;
            text-align: center;
            width: 100%;
            border-collapse: collapse;
        }
        td, th {
            border-bottom: 1px solid #ccc;
            padding: 8px;
        }
        tfoot {
            text-align: left;
        }
        .subtotal {
            width: 100%;
            margin-top: 20px;
            text-align: right;
            border-bottom: 1px solid #ccc;
            padding: 10px 0;
        }
        .subtotal p {
            margin: 0;
        }
        .detalle-pago { 
            padding: 10px 0;
        }
        .cufe-container {
            margin-top: 10px;
            text-align: left;
        }
        .cufe {
            word-break: break-word;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="{{ public_path('images/logo.png') }}" alt="Softech Logo" class="logo">
            <h1 style="color: #0e8ce4;">Softech</h1>
            <h2>Factura Electrónica de Venta</h2>
            <p><strong>No. Doc:</strong> {{ $documento->numero_documento }}</p>
            <p><strong>Nº Resolución:</strong> {{ $documento->numero_resolucion }} <strong>Prefijo:</strong> {{ $documento->codigo_transaccion }}</p>
            <p><strong>Consecutivo:</strong> {{ $consecutivo }} hasta {{ $maxConsecutivo }}</p>
            <p><strong>Fecha:</strong> {{ $documento->fecha_documento }}</p>
        </div>

        <div class="row">
            <p><strong>NIT:</strong> {{ $documento->nit_empresa }}</p>
            <p><strong>Dirección:</strong> {{ $empresa->direccion_empresa }} - Valle del Cauca - Cali - CO</p>
        </div>

        <div class="factura-info">
            <p><strong>Razón social/Nombre:</strong> {{ $cliente->nombre_cliente }} {{ $cliente->apellido_cliente }}</p>
            <p><strong>NIT/Documento:</strong> {{ $cliente->numero_identificacion_cliente }}</p>
            <p><strong>Dirección:</strong> {{ $cliente->direccion_entrega_cliente }}</p>
            <p><strong>Fecha Emisión:</strong> {{ $documento->fecha_documento }}</p>
        </div>

        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Cant.</th>
                    <th>Cod. - Producto.</th>
                    <th>V. Uni.</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($carrito as $id => $producto)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $producto['stock'] }}</td>
                        <td>{{ $id }} - {{ $producto['descripcion_producto'] }}</td>
                        <td>{{ $producto['valor_unitario'] }}</td>
                        <td>{{ $producto['valor_unitario'] * $producto['stock'] }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5">Total Items: {{ $cantidad }}</td>
                </tr>
            </tfoot>
        </table>

        <div class="subtotal">
            <p><strong>SUBTOTAL:</strong> {{ $neto }}</p>
            <p><strong>IV - IVA - 19.00%:</strong> {{ $documento->iva_documento }}</p>
        </div>

        <div class="subtotal">
            <p><strong>TOTAL A PAGAR:</strong> {{ $documento->monto }}</p>
        </div>

        <div class="detalle-pago">
            <p><strong>FORMA DE PAGO:</strong> Medios Electrónicos</p>
        </div>

        <div class="cufe-container">
            <strong>CUFE:</strong> 
            <span class="cufe"> {{ $documento->codigo_cufe }}</span>
        </div>

        <h4>Representación impresa de Factura Electrónica de Venta</h4>

        <div class="footer">
            <p>Fabricante del software: ADSO 8</p>
            <p>Documento sin valor fiscal en ambiente de pruebas</p>
            <p>Proveedor Tecnológico: Softech</p>
            <p>NIT: {{ $documento->nit_empresa }}</p>
        </div>
    </div>
</body>
</html>
