<?php
/* Smarty version 3.1.30, created on 2018-10-11 01:08:58
  from "C:\xampp\htdocs\tpeBootstrap\templates\usuario.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bbe868a46aec3_41279278',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b084ec97b27a2477b58bd7761272d75d29c1440' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeBootstrap\\templates\\usuario.tpl',
      1 => 1524622115,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:imagen.tpl' => 1,
  ),
),false)) {
function content_5bbe868a46aec3_41279278 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container contenedor-usuario">
    <div class="thumbnail col-md-1-3 col-md-6 datos-perfil">
      <?php $_smarty_tpl->_subTemplateRender("file:imagen.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <h2 class="nombre-perfil"><?php echo $_smarty_tpl->tpl_vars['usuario']->value['nombre'];?>
</h2>
          <?php if ($_smarty_tpl->tpl_vars['usuario']->value['permiso_admin'] == 1) {?>
            <a href="admin" class="btn btn-default btn-admin">Ir al panel de administrador</a>
          <?php }?>
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
<?php }
}
