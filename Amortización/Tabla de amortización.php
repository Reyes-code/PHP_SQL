<?php 
if(isset($_POST['calcular'])){
$tasa     = $_POST['tasa'];
$periodos = $_POST['periodos'];
$capital  = $_POST['capital'];
$i=$tasa/100;
$n=$periodos;
$k=$capital;
$cuota = $k*(($i)/(1-(1+$i)**(-$n)));
}else{
$tasa = 0;
$periodos = 0;
$capital = 0;
$cuota = 0;
}
?>
<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="Estilos.css">
    </head>
    <body>
        <form action="" method='post' name='datos'>
        <table align='center'width='400' border='1'class='darkTable'>
        <thead><tr><th colspan='2' align='center'> Datos del crédito </th></tr></thead>
        <tbody>
        <tr><td width ="50%">Tasa</td><td width ='50%' align='left'><input type="text"name='tasa' value='<?php echo $tasa;?>' size='5' maxlenght='5'>%</td></tr>
        <tr><td>Periodos</td><td align='left'><input type="text"name='periodos' value='<?php echo $periodos;?>' size='5' maxlenght='3'>meses</td></tr>
        <tr><td>Capital</td><td align='left'>$<input type="text"name='capital' value='<?php echo $capital;?>'></td></tr>
        <tr><td colspan= '2' align='center' width='300'><input type="submit" name= 'calcular'value='Calcular'></td></tr>
        </tbody>
        </table>
        </form>
        <br><br>
        <table align='center'width='400' border='1'class='darkTable'>
            <tr><td> Cuota= <?php echo number_format($cuota,0,'.','.')?></td></tr>
        </table>   
        <br>
        <br>    
        <table align='center' border='1' class='darkTable'>
        <thead><tr><th align='center'>Periodo</th><th align='center'>Saldo inicial</th><th align='center'>Cuota</th><th align='center'>Interés</th><th align='center'>Abono a capital</th><th align='center'>Saldo Final</th></tr></thead>
        <tbody>
            <?php
              $tcuota=0;
              $tcapital=0;
              $tinteres=0;
            $saldoini = $capital;
          
                for($filas=1; $filas <=$periodos;$filas++){
                    $abonoint=$saldoini*$i;
                    $abonocap =$cuota-$abonoint;
                    $saldofin= $saldoini -$abonocap;
                    $tcuota=$cuota+$tcuota;
                    $tinteres=$tinteres+$abonoint;
                    $tcapital=$tcapital+$abonocap;
                

            ?>
            <tr>
                <td><?php echo number_format( $filas,0,'.',',');?></td>
                <td><?php echo number_format( $saldoini,0,".",",");?></td>
                <td><?php echo number_format( $cuota,0,'.',',');?></td>
                <td><?php echo number_format( $abonoint,0,'.',',');?></td>
                <td><?php echo number_format( $abonocap,0,'.',',');?></td>
                <td><?php echo number_format( $saldofin,0,'.',',') ;?></td>
                </tr>
            <?php
                $saldoini=$saldofin;
                }
             ?> 
        </tbody>       
                <tfoot>
                <tr>
                
                <td colspan="2" >Total</td>
                <td><?php echo number_format( $tcuota,0,'.',',');?></td>
                <td><?php echo number_format( $tinteres,0,".",",");?></td>
                <td><?php echo number_format( $tcapital,0,'.',',');?></td>
                <td>-</td>
                </tr>  

                                
        
        
        </tfoot>
        </table>
    </body>
</html>