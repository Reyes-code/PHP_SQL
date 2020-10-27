
<?php
if(isset($_POST['calc'])){
    $numero=$_POST['num'];
    $factorial=0;
    $sumatoria=0;
    }else{
        $numero=0;
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
        <table align='center'border='1' class='darkTable'>
            <thead>
                <tr><th colspan='2'>Productoria y Sumatoria</th></tr>
            </thead>
            <tbody>
                <tr><td>Número</th><th><input type="text" name="num" id="" value ='<?php echo $numero; ?>'></td></tr>
                <tr><td colspan="2"><input type="submit" value="Calcular"name='calc'></td></tr>
            </tbody>
        
        </table>   </form>
<br>
<br>

        <table align='center'border='1' width="300" class='darkTable'>
           
            <tbody>
            <tr>
            <td>
            <?php 
            $factorial=1;
          
            echo "<b>$numero!</b>=";
            for($i=$numero; $i>=1; $i--){
            $factorial*=$i;
            echo "$i";
            echo ($i==1)? " = ":"x";
            }
            echo "<b>$factorial</b>";
            ?>
            </td>
            </tr>
            <tr>
            <td>
            <?php 
            $sumatoria=1;
        
            echo "<b>Σ $numero</b>=";
            for($i=$numero; $i>=1; $i--){
            $sumatoria+=$i;
            echo "$i";
            echo ($i==1)? " "."="." ":"+";
            }
            echo "<b>$sumatoria</b>";
            ?>
            </td>
            </tr>


                   
              
            
            </tbody>
        
        </table>
        
    </body>
</html>