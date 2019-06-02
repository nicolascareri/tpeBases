
<div class="container contenedor-usuario">
    <div class="thumbnail col-md-1-3 col-md-6 datos-perfil">
      {include file="imagen.tpl"}
      <h2 class="nombre-perfil">{$usuario.nombre}</h2>
          {if $usuario.permiso_admin == 1}
            <a href="admin" class="btn btn-default btn-admin" aria-label="panel admin">Ir al panel de administrador</a>
          {/if}
      <form class="submitFotoPerfil" method="" enctype="multipart/form-data">
            <div class="col-md-6">
              <button type="submit" class="btn btn-default">Cambiar imagen de perfil</button>
            </div>
            <div class="col-md-6">
              <input type="file" name="imageProfile" id="imageProfile" required>
            </div>
      </form>
    </div>
</div>
