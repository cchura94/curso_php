<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <style>
        .caja{
            border: 5px solid blue;
            width:150px;
            background-color: green;
            color: #fff;
        }
    
    </style>
</head>
<body>

    <h2>Calculadora</h2>

    <?php
    $resultado = "";
        if($_POST){
            $b = $_POST["boton"];
            $n1 = $_POST["numero1"];
            $n2 = $_POST["numero2"];

            if($b == "+"){                
                $resultado = $n1 + $n2;
            }elseif($b == "-"){
                $resultado = $n1 - $n2;
            }elseif($b == "*"){
                $resultado = $n1 * $n2;
            }else{
                $resultado = $n1 / $n2;
            }
            
        }else{
            echo "INGRESE LOS DATOS";
        }

?>    

    <div class="caja">
        <p><?php echo $resultado; ?></p>
    </div>

    <form action="" method="post">
        <input type="number" name="numero1" placeholder="Ingrese numero 1">
        <br>
        <input type="number" name="numero2" placeholder="Ingrese numero 2">
        <br>
        <input type="submit" value="+" name="boton">
        <input type="submit" value="-" name="boton">
        <input type="submit" value="*" name="boton">
        <input type="submit" value="/" name="boton">
    </form>
    
</body>
</html>