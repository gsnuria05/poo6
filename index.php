<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio POO Individual 6</title>
</head>
<body>

<form method="POST" action="">
    <table>
        <tr>
            <td>
                <label>Número de factura:</label>
                <input type="text" name="numero_factura">                
            </td>            
        </tr>
        <tr>
            <td>
                <label>Fecha de factura:</label>
                <input type="date" name="fecha_factura">
            </td>
        </tr>
        <tr>
            <td>
                <label>Importe del servicio:</label>
                <input type="number" name="precio">
            </td>
        </tr>
    </table>

    <button type="submit">CALCULAR</button>
</form>

<?php
//Llamar a la función
include('Factura.php');

//Crear un objeto ; Instanciar
$factura1=new Factura();

//Aginar parámetros a atributos mediante un set
$factura1->setFecha($_POST['fecha_factura']);
$date=date_create($factura1->getFecha());
$factura1->setNumeroFactura($_POST['numero_factura']);
$factura1->setPrecioSinImpuestos($_POST['precio']);
$factura1->setPrecioConImpuestos($_POST['precio']*0.21-$_POST['precio']*0.15+$_POST['precio']);

//Imprimir get
echo 'El número de factura es: '.$factura1->getNumeroFactura().'<br>';
echo 'La fecha de facturación es : '.date_format($date,'d-m-y').'<br>';
echo'El importe sin impuestos es: '.$factura1->getPrecioSinImpuestos().'€<br>';
echo 'El importe a pagar con impuestos es: '.$factura1->getPrecioConImpuestos().'€<br>';





?>

</body>
</html>