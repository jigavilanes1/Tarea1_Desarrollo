<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login</title>

</head>
<body>
<div class="overlay">
<form method="post" action="Logica/verificar.php" >
   <div class="con">
   <header class="head-form">
      <h2>Log In</h2>
      <p>Ingrese con su usuario y contraseña</p>
   </header>
   <br>
   <div class="field-set">
         <span class="input-item">
           <i class="fa fa-user-circle"></i>
         </span>
         <input class="form-input"  id="user" name = "user" type="text" placeholder="Ingrese su usuario" required>
      <br>
      <span class="input-item">
        <i class="fa fa-key"></i>
       </span>
      <input class="form-input" type="password" placeholder="Ingrese su contraseña" id="pass"  name = "pass" >
      <br>
      <button class="log-in" name="btningresar" value="Ingresar"> Ingresar </button>
   </div>
   <div class="other">
      <button class="btn submits frgt-pass">Olvido su contraseña</button>
      <button class="btn submits sign-up"><a href="html/registrarse.php">Registrarse 
      <i class="fa fa-user-plus" aria-hidden="true"></i>
      </button>
   </div>
  </div>
</form>
</div>
</body>
</html>
