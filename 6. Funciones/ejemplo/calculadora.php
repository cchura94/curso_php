<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h2>Calculadora</h2>

    <?php 
        include_once("./funciones.php");
        $n1 = $n2 = 0;
        $boton = "";
        if($_POST){
            $boton = $_POST['boton'];
           $n1 = $_POST['num1'];
           $n2 = $_POST['num2'];
            
        }else{
            echo "GET";
        }
    ?>
    <div style="border:1px solid #00f; width:25px">
        <?php echo operacion($n1, $n2, '+') ?>
        <?php echo operacion($n1, $n2, '-') ?>
        <?php echo operacion($n1, $n2, '*') ?>
        <?php echo operacion($n1, $n2, '/') ?>
    </div>

    <form action="" method="post">
        <label for="num">NÚMERO 1:</label>
        <input type="number" id="num" name="num1" required>
        <br>
        <label for="num2">NÚMERO 2:</label>
        <input type="number" id="num2" name="num2" required>
        <br>
        <input type="submit" value="+" name="boton"> 
        <input type="submit" value="-" name="boton"> 
        <input type="submit" value="*" name="boton"> 
        <input type="submit" value="/" name="boton">     
    
    </form>
</body>
</html>