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
            width: min(100% - 2rem, 600px);
            margin-inline: auto;
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
            margin-block: 30px;
            text-align: center;
            table-layout: auto;
            width: 100%;
        }
        td, th{
            border-bottom: 1px solid #ccc;
            padding-block: 0.3em;
        }
        tfoot {
            text-align: left;
        }
        .subtotal{
            display: grid;
            justify-content: right;
            border-bottom: 1px solid #ccc;
            padding-block: 10px;
        }
        .subtotal > p {
            display: grid;
            grid-template-columns: 150px 40px;
        }
        .detalle-pago { 
            padding-block: 10px;
        }
        .cufe-container {
            display: flex;
            flex-wrap: wrap;
            align-items: baseline;
        }
        .cufe {
            word-break: break-all;
            overflow-wrap: break-word;
            max-width: 100%;
            flex: 1;
            margin-left: 5px;
        }
        .footer {
            text-align: center;
        }
    </style>
</head>
<body class="container">
    <div class="header">
        <img src="{{ url('images/logo.svg') }}" alt="Softech Logo" class="logo">
        <h1 style="color: #0e8ce4;">Softech</h1>
        <h2>Factura Electrónica de Venta</h2>
        <p><strong>No. Doc:</strong> Numero</p>
        <p><strong>Nº Resolución:</strong> Numero <strong>Prefijo:</strong> COM</p>
        <p><strong>Consecutivo:</strong> 1 hasta 1000000</p>
        <p><strong>Fecha:</strong> YYYY-MM-DD</p>
    </div>

    <div class="row">
        <p><strong>NIT:</strong> NIT</p>
        <p><strong>Dirección:</strong> Direccion - Valle del Cauca - - Cali - CO</p>
    </div>

    <div class="factura-info">
        <p><strong>Razón social/Nombre:</strong> a</p>
        <p><strong>NIT/Documento:</strong> a</p>
        <p><strong>Dirección:</strong> a</p>
        <p><strong>Fecha Emisión:</strong> a</p>
    </div>

    <table>
        <thead>
            <th>#</th>
            <th>Cant.</th>
            <th>Cod. - Producto - Med.</th>
            <th>V. Uni.</th>
            <th>Valor</th>
        </thead>
        <tbody>
            <tr>
                <td>a</td>
                <td>a</td>
                <td>a</td>
                <td>a</td>
                <td>a</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="5">Total Items: 1</td>
            </tr>
        </tfoot>
    </table>

    <div class="subtotal">
        <p><strong>SUBTOTAL:</strong> a</p>
        <p><strong>IV - IVA - 19.00%:</strong> a</p>
    </div>

    <div class="subtotal">
        <p><strong>TOTAL A PAGAR:</strong> a</p>
    </div>

    <div class="detalle-pago">
        <p><strong>FORMA DE PAGO:</strong> a</p>
        <p><strong>MEDIO DE PAGO:</strong> a</p>
    </div>

    <div class="cufe-container">
        <strong>CUFE:</strong> 
        <span class="cufe">15ef9046f5a0a38be0b35b055d1efbccdb7a99fb110da507ebe5e83365ada86cef910c0b7b208fa9c5e1230a0841435f</span>
    </div>

    <h4>Representación impresa de Factura Electrónica de Venta</h4>
    
    <div class="footer">
        <p>Fabricante del software: ADSO 8</p>
        <p>Documento sin valor fiscal en ambiente de pruebas</p>
        <p>Proveedor Tecnológico: Softech</p>
        <p>NIT: a</p>
    </div>
</body>
</html>