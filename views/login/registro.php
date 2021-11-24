<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/login.css">
    <title>Document</title>
</head>
<body>
<div class="login-page">
  <div class="form">
    <form method="post" action="index.php?control=login&accion=registarCandidato">
      <h1>Registarse</h1>
      <input name="identificacion" type="number" placeholder="Identificacion" require/>
      <input name="nombre" type="text" placeholder="Nombre" require/>
      <input name="direccion" type="text" placeholder="Direccion" require/>
      <input name="telefono" type="text" placeholder="Telefono" require/>
      <input name="hijos" type="text" placeholder="Cantidad de Hijos" require/>
      <input name="genero" type="text" placeholder="Genero" require/>
      <input name="estadoCivil" type="text" placeholder="Estado Civil" require/>
      <input name="mascotas" type="text" placeholder="Cantidad de Mascotas" require/>
      <input name="escolaridad" type="text" placeholder="Nivel de Escolaridad" require/>>
      <input name="contrasenia" type="password" placeholder="password"/>
      <button>Registrarse</button>
      <p class="message">Ya estas registrado? <a href="index.php">Ingresar</a></p>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>