<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>http (get, post)</title>
</head>
<body>
    <h1>Petición Metodo (GET)</h1>
    <form action="./pagina2.php" method="get">
        <label for="">Ingrese su nombre:</label>
        <input type="text" name="nombre" required>
        <br>
        <label for="">Ingrese su Fecha Nacimiento:</label>
        <input type="date" name="fecha" required>
        <br>       

        <input type="submit">
        <input type="reset">
    </form>

    <hr>

    <h1>Petición Metodo (POST)</h1>
    <form action="./pagina3.php" method="post">
        <label for="">Ingrese su nombre:</label>
        <input type="text" name="nombre" required>
        <br>
        <label for="">Ingrese su Fecha Nacimiento:</label>
        <input type="date" name="fecha" required>
        <br>       

        <input type="submit">
        <input type="reset">
    </form>
    
</body>
</html>