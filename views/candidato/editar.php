<?php require "views/shared/header.php"; ?>
    <div class="container">
            
            <h1 class="text-center">Editar</h1>
                <form action="index.php?control=candidato&accion=update" method="post">
                    
                    <div class="mb-3">
                        <label for="identificacion" class="form-label">Identificacion</label>
                        <input type="number" class="form-control" id="identificacion" name="identificacion" value="<?= $data['registros']['numeroIdentificacion'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $data['registros']['nombre'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="direccion" class="form-label">Direccion</label>
                        <input type="text" class="form-control" id="direccion" name="direccion" value="<?= $data['registros']['direccion'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Telefono</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" value="<?= $data['registros']['telefono'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="hijos" class="form-label">Hijos</label>
                        <input type="text" class="form-control" id="hijos" name="hijos" value="<?= $data['registros']['cantidadHijos'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="genero" class="form-label">Genero</label>
                        <input type="text" class="form-control" id="genero" name="genero" value="<?= $data['registros']['genero'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="estadoCivil" class="form-label">Estado Civil</label>
                        <input type="text" class="form-control" id="estadoCivil" name="estadoCivil" value="<?= $data['registros']['estadoCivil'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="mascotas" class="form-label">Mascotas</label>
                        <input type="text" class="form-control" id="mascotas" name="mascotas" value="<?= $data['registros']['cantidadMascotas'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="escolaridad" class="form-label">Escolaridad</label>
                        <input type="text" class="form-control" id="escolaridad" name="escolaridad" value="<?= $data['registros']['nivelEscolaridad'];?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </form>
        </div>
<?php require "views/shared/footer.php"; ?>