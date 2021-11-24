<?php require "views/shared/header.php"; ?>


<div class="container">
  <div class="row">
    <form href="" method="post" id="perfil">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 toppad">


        <div class="panel panel-success">
          <h2 class="text-center">PERFIL</h2>

          <div class="panel-body">
            <div class="row">

              <div class="col-md-3 col-lg-3 ">
                <div id="cargarImagen">
                  <img class="img-responsive" src="" alt="Logo">

                </div>

                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <input class='filestyle' data-buttonText="Logo" type="file" name="imagefile" id="imagefile">
                    </div>
                  </div>

                </div>
              </div>
              <div class=" col-md-9 col-lg-9 ">
                <table class="table table-condensed">
                  <tbody>
                    <?php foreach ($data['registros'] as $candidato) { ?>
                      <tr>
                        <td class='col-md-3'>Identificacion:</td>
                        <td><input type="number" class="form-control input-sm" name="identificacion" value="<?= $candidato['numeroIdentificacion'] ?>" required></td>
                      </tr>
                      <tr>
                        <td>Nombre:</td>
                        <td><input type="text" class="form-control input-sm" name="nombre" value="<?= $candidato['nombre'] ?>" required></td>
                      </tr>
                      <tr>
                        <td>Direccion:</td>
                        <td><input type="text" class="form-control input-sm" name="direccion" value="<?= $candidato['direccion'] ?>" required></td>
                      </tr>
                      <tr>
                        <td>Telefono:</td>
                        <td><input type="text" class="form-control input-sm" name="telefono" value="<?= $candidato['telefono'] ?>" required></td>
                      </tr>
                      <tr>
                        <td>Hijos:</td>
                        <td><input type="number" class="form-control input-sm" name="hijos" value="<?= $candidato['cantidadHijos'] ?>" required></td>
                      </tr>
                      <tr>
                        <td>Genero:</td>
                        <td><input type="text" class="form-control input-sm" name="genero" value="<?= $candidato['genero'] ?>" required></td>
                      </tr>
                      <tr>
                        <td>Estado Civil:</td>
                        <td><input type="text" class="form-control input-sm" name="estadoCivil" value="<?= $candidato['estadoCivil'] ?>" required></td>
                      </tr>
                      <tr>
                        <td>Mascotas:</td>
                        <td><input type="number" class="form-control input-sm" name="mascotas" value="<?= $candidato['cantidadMascotas'] ?>" required></td>
                      </tr>
                      <tr>
                        <td>Escolaridad</td>
                        <td><input type="text" class="form-control input-sm" name="escolaridad" value="<?= $candidato['nivelEscolaridad'] ?>" required></td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="panel-footer text-center">
            <button type="submit" class="btn btn-success"><a href="index.php?control=candidato&accion=update&numeroIdentificacion=<?= $candidato['numeroIdentificacion'] ?>">Actualizar Perfil</a></button>
            <button type="button" class="btn btn-danger"><a href="index.php?control=login&accion=delete&numeroIdentificacion=<?= $candidato['numeroIdentificacion'] ?>">Eliminar cuenta</a></button>
          </div>

        </div>
      </div>
    </form>
  </div>




  <?php require "views/shared/footer.php"; ?>