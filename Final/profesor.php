<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8">
  <title>.: Login Profesores :. </title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="container-form">
    <div class="header">
      <div class="logo-title"><img src="images/blanco1.png"></div>
      <div class="logo-title"><img src="images/Blanco.png"></div>
      <div class="menu"><li class="module-login active">Login</li></a>
      </div>
    </div>
    <form id="formLogin" method="POST" class="form">
      <div class="welcome-form"><h1>Bienvenido Profesor(a)</h1></div>
      <div class="user line-input">
        <label class="lnr lnr-user"></label>
        <input type="text" placeholder="Nombre Usuario" id="usuario" name="usuario">
      </div>
      <div class="password line-input">
        <label class="lnr lnr-lock"></label>
        <input type="password" placeholder="Contraseña" id="clave" name="clave">
      </div>
      <button type="submit">Entrar<label class="lnr lnr-chevron-right"></label></button>
    </form>
  </div>  
  <script src="jquery.js"></script>
  <script src="script.js"></script>

  <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>    
  <script src="codigo.js"></script>    
</body>
</html>