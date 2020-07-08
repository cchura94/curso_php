<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REQUIRE - INCLUDE</title>
</head>
<body>

    <?php 
        include("./funciones.php");
        
        echo suma(4,6);
        echo suma(14,6);
        echo suma(42,6);
        echo suma(4,64);
        saludo();
    ?>
    
</body>
</html>