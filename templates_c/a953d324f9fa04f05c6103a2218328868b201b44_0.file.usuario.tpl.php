<?php
/* Smarty version 3.1.30, created on 2018-04-25 04:20:57
  from "C:\xampp\htdocs\tpe\templates\usuario.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adfe6094f4a99_76305783',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a953d324f9fa04f05c6103a2218328868b201b44' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe\\templates\\usuario.tpl',
      1 => 1524622115,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:imagen.tpl' => 1,
  ),
),false)) {
function content_5adfe6094f4a99_76305783 (Smarty_Internal_Template $_smarty_tpl) {
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
