<?php
    if(isset($_POST['suma'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $resultado = $num1 + $num2;
    }
    elseif(isset($_POST['resta'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $resultado = $num1 - $num2;
    }
    elseif(isset($_POST['multi'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $resultado = $num1 * $num2;
    }
    elseif(isset($_POST['div'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $resultado = $num1/$num2;
    }
    elseif(isset($_POST['exp'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $resultado = $num1**$num2;
    }
    elseif(isset($_POST['resid'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $resultado = $num1 % $num2;
    }        
    else{
        $num1=0;$num2=0;$resultado=0;
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
       <form action="" method = 'post' name='datos'>

        <table width ='500' border = '1' align= 'center' class='darkTable'>
            <thead> <tr>   <th colspan ='2'><h1>Calculadora Básica</h1></th></tr></thead>
            <tbody> <tr>   <td>Número 1</td><td><input type="text" name="num1" id="" value ='<?php echo $num1; ?>'></td>   </tr></tbody>
            <tbody> <tr>   <td>Número 2</td><td><input type="tex" name="num2" id=""value='<?php echo $num2; ?>'></td>   </tr></tbody>
            <tbody> <tr>   <td colspan='2' align ='center' ><input type="submit" value="+" name ='suma'> <input type="submit" value="-" name='resta'> <input type="submit" value="x" name='multi'> <input type="submit" value="/" name='div'> <input type="submit" value="^" name='exp'> <input type="submit"value='%'name='resid'></td>   </tr></tbody>
            <tfooter> <tr>   <td>Resultado</td><td><input type="text" name="resultado" id="" value ='<?php echo $resultado; ?>'></td>   </tr></tfooter>
        </table>

        </form>
    </body>
</html>