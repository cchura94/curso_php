<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Productos</title>

    <style>
        .caja{
            width: 22%;
            height: 250px;
            background-color: #5fa487;
            padding: 10px;
            border: 2px dashed green;
            float: left;
            margin: 2px;
        }
    </style>
</head>
<body>

<table border="1">
    <tr>
        <td>ID</td>
        <td>NOMBRE</td>
        <td>APELLIDO</td>
        <td>CI</td>
    </tr>
    <?php 
    
    $i = 0;
    while($i <= 20){
        $i++;
    ?>
    <tr>
        <td> <?= $i ?> </td>
        <td>Juan</td>
        <td>Perez seras</td>
        <td>92342</td>
    </tr>
    <?php } ?>
</table>

<hr>
<h2>Mis Productos</h2>


<?php 
    for($i = 1; $i <= 100; $i++){
?>
    <div class="caja">
        <h3>Producto <?php echo $i; ?></h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
    </div>
<?php
    }
?>

</body>
</html>