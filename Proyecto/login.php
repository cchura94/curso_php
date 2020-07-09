<?php
include('./includes/cabecera.php');
?>

<div class="container mt-5">
    <div class="row ">
        <div class="col-md-12 text-center">
            <h1>Inicio de Sesion</h1>
        </div>       

    </div>
    <div class="row mt-5">
        <div class="col-md-3">
        
        </div>
        <div class="col-md-6">
        <?php
            $error='';
            if(isset($_GET['error'])){
                $error = $_GET['error'];
            }
        ?>
        <div class="alert alert-danger">
            <p><?= $error ?></p>
        </div>
        <form action="./control.php" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Ingrese su Correo</label>
                <input type="email" name="correo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                <small id="emailHelp" class="form-text text-muted">Debe introducir un correo.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Contraseña</label>
                <input type="password" name="clave" class="form-control" id="exampleInputPassword1" required>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Recorad contraseña</label>
            </div>
            <button type="submit" class="btn btn-primary">INGRESAR</button>
            </form>
        
        </div>
        <div class="col-md-3">
        
        </div>
    </div>
</div>