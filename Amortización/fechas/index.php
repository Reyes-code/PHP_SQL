<?php 

 $time2= date('d-M-Y', time());
 if(isset($_POST['calc'])){
    $num1 = $_POST['num1'];
    $diff=(strtotime($time2)- strtotime($num1))/(60*60*24) ;
    $finald =intval($diff);
    $finaly= intval($finald/365);
     $añosax= (((strtotime($num1)/(60*60*24))+(($finaly+1)*366)))-(strtotime($time2)/(60*60*24));
     $falta=intval($añosax);          
 }else{
     $finald=0;
     $finaly=0;
     $añosax=0;


 }
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="Estilos.css">
    </head>
    <body>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br><br>
    <form action="" method = 'post' name='datos'>

<table width ='500' border = '1' align= 'center' class='darkTable'>
    <thead> <tr>   <th colspan ='2'><h1>Calcular Edad</h1></th></tr></thead>
    <tbody> <tr>   <td>Fecha de Nacimiento</td><td><input type="date" name="num1" id="" value ='<?php echo $num1; ?>'></td>   </tr></tbody>
    <tbody> <tr>   <td>fecha actual</td><td> <?php echo $time2; ?> </td>   </tr></tbody>
    <tbody> <tr>   <td colspan='2' align ='center' ><input type="submit"value='Calcular Fechas'name='calc'></td>   </tr></tbody>
    <tfooter> <tr>   <td>Resultado en días</td><td><input type="text" name="resultado" id="" value ='<?php echo $finald ?>'></td>   </tr></tfooter>
    <tfooter> <tr>   <td>Resultado en años</td><td><input type="text" name="resultado" id="" value ='<?php echo $finaly; ?>'></td>   </tr></tfooter>
    <tfooter> <tr>   <td>Días para cumpleaños</td><td><input type="text" name="resultado" id="" value ='<?php echo $añosax; ?>'></td>   </tr></tfooter>
        <script src="" async defer></script>
    </body>
</html>