<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../Css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../js/script.js"></script>
    <title>Registro</title>

</head>
<body>
<div class="overlay">
<form>
   <div class="con">
   <header class="head-form">
      <h2>Registrarse</h2>
      <p>Ingrese un usuario y contraseña nuevo</p>
   </header>
   <br>
   <div class="field-set">
         <span class="input-item">
           <i class="fa fa-user-circle"></i>
         </span>
         <input class="form-input" id="user" name = "user" type="text" placeholder="Ingrese su nuevo usuario" required>
      <br>
      <span class="input-item">
        <i class="fa fa-key"></i>
       </span>
      <input class="form-input" type="password" placeholder="Ingrese su nueva contraseña" id="pass"  name = "pass" required>
      <br>
      <span class="input-item">
        <i class="fa fa-key"></i>
       </span>
      <input class="form-input" type="password" placeholder="Ingrese de nuevo su nueva contraseña" id="pass"  name = "pass" required>
      <br>
      <button class="btn submits sign-up" align="center" onclick="Usuario();"> Guardar </button>
   </div>
  </div>
</form>
</div>
</body>
</html>