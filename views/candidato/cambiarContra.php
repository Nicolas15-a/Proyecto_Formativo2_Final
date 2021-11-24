<?php require "views/shared/header.php"; ?>


<div class="container">
    <form action="index.php?control=candidato&accion=updateContrasenia" method="post">
        <div class="mb-3">
            <label for="identificacion" class="form-label">Identificacion:</label>
            <input type="number" class="form-control" id="identificacion" name="identificacion">
        </div>
        <div class="mb-3">
            <label for="contrasenia" class="form-label">Confirme su contraseña:</label>
            <input type="password" class="form-control" id="contrasenia" name="contrasenia">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>

<?php require "views/shared/footer.php"; ?>