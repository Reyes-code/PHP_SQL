<?php
$num1=30078;
$num2=76511;
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Calculadora Básica</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="Estilos.css" />
    </head>
    <body>
<table width='400' align ='center' border='1' class='redTable'>
    <tr align ='center'><td colspan='2'> <h1>Sumar </h1></td></tr>
    <tr><td>Número 1</td><td><?php echo number_format($num1,5,'.','.'); ?></td></tr>
    <tr class='rojo'><td>Número 2</td><td><?php echo number_format($num2,5,'.',',');?></td></tr>    
    <tr><td>Resultado</td><td><?php echo number_format($num1+$num2,5,'.',','); ?></td></tr>    
</table>    
        
    
    </body>
</html>
