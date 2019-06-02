
<header>
  <meta name="barra navegacion" content="enlaces de navegacion">
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="" aria-label="inicio"><span class="fa fa-home fa-1x"></span></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class=""><a href="notebooks" aria-label="noteboks" class="partial"> Notebooks</a></li>
          <!-- <span class="fa fa-laptop fa-1x"></span> -->
          <li class="dropdown-marcas">
            <a href="" aria-label="inicio" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Marcas<span class="caret"></span></a>
            <ul class="dropdown-menu">
              {foreach from=$marcas item=marca}
                <li><a class="notebooks partial"  title="desplegable" href="notebooks/{$marca.id_marca}" aria-label="notebook marca">{$marca.nombre}</a></li>
              {/foreach}
            </ul>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="https://www.facebook.com/" class="fa fa-facebook hidden-xs" target="_blank" rel="noreferrer" aria-label="facebook"></a></li>
          <li><a href="https://www.instagram.com/?hl=es" class="fa fa-instagram hidden-xs" target="_blank" rel="noreferrer" aria-label="instagram"></a></li>
          <li><a href="https://www.youtube.com/" class="fa fa-youtube hidden-xs" target="_blank" rel="noreferrer" aria-label="youtube"></a></li>
            {if $hayConexion}
              <li><a href="perfilUsuario" class="fa fa-user-circle-o partial" aria-label="perfil usuario"></a></li>
              <li><a href="logout" class="fa fa-sign-out" aria-label="terminar sesion"></a></li>
            {else}
          <li class="dropdown">
            <a href="#" aria-label="menu" class="fa fa-user-circle dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <div class="container-fluid">
                <form action="verificarUsuario" class="formlogin">
                  <div class="form-group">
                    <label for="usuario">Nombre de usuario</label>
                    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="root" required>
                  </div>
                  <div class="form-group">
                    <label for="pwd">Contraseña</label>
                    <input type="password" class="form-control" id="pwd" name ="password" placeholder="******" required>
                  </div>
                  <button type="submit" class="btn btn-info">Ingresar</button>
                  <p>¿No eres usuario?</p>
                  <a href="crearUsuario" class="partial" aria-label="crear usuario">Creá tu cuenta</a>
                </form>
                <div class="error-logueo"></div>
              </div>
            </ul>
          </li>
          {/if}
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
</header>
