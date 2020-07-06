<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>

    <h2>Calculadora</h2>

    

    <form action="./proceso.php" method="post">
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