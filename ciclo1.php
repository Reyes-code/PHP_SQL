<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="Estilos.css">
    </head>
    <body><!--se debe poner dos veces el php o meter echo porque dentro de <?php?> se debe meter código de php unicamente-->
    <Table border='1' width='500'align='center'class='darkTable'>
       <?php 
        for($n=1;$n<=500;$n++){
            ?>
            <tr>
                <td>
                    <?php echo "-".$n.'. '; ?>  Santiago Reyes
                </td>
            </tr>
        <?php
        }
        ?>               
                 
        
       </table>
     
    </body>
</html>