<link rel="stylesheet" type="text/css "href="vistas/assets/css/style.css">
<link rel="stylesheet" type="text/css "href="vistas/assets/css/css/all.min.css">
<div class="contenedor">
  <div class="img">
    <img src="vistas/assets/img/bg.svg" alt="">
  </div>
  <div class="contenido-login">
    <form autocomplete="off" method="POST"  role="form">
      <img src="vistas/assets/img/logo.png" alt="">
      <h2>Login</h2>
      <?php
        if(isset($errMsg)){
          echo '<div style="color:#FF0000;text-align:center;font-size:20px;">'.$errMsg.'</div>';  
        }
      ?>
      <div class="input-div nit">
       <div class="i">
        <i class="fas fa-user"></i>
        </div>
        <div class="div">
          <input type="text"  name="ingUsuario" value="<?php if(isset($_POST['usuario'])) echo $_POST['usuario'] ?>" autocomplete="off" placeholder="USUARIO">
        </div>
      </div>
      <div class="input-div pass">
        <div class="i">
          <i class="fas fa-lock"></i>
        </div>
        <div class="div">
          <input type="Password" required="true" name="ingPassword" value="<?php if(isset($_POST['clave'])) echo MD5($_POST['clave']) ?>" placeholder="CONTRASEÑA" >
        </div>
      </div>
      <div class="row" id="load" hidden="hidden">
        <div class="col-xs-4 col-xs-offset-4 col-md-2 col-md-offset-5">
          <img src="vistas/assets/img/load.gif" width="100%" alt="">
        </div>
        <div class="col-xs-12 center text-accent">
          <span>Validando información...</span>
        </div>
      </div>
      <button class="btn" name='login' type="submit"> Iniciar sesion
      </button> 
	    <?php
        $login = new ControladorUsuarios();
        $login -> ctrIngresoUsuario();
      ?>
    </form>
    <div id="msg_error" class="alert alert-danger" role="alert" style="display: none"></div>
  </div>
</div>
