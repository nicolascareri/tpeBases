<?php
/* Smarty version 3.1.30, created on 2018-04-25 07:38:05
  from "C:\xampp\htdocs\tpe\templates\Admin\usuario.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae0143dec7d03_60969033',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1bf260d02b44eed01bbdeb644dd5ab2bcc5d4b1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe\\templates\\Admin\\usuario.tpl',
      1 => 1524621529,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../header.tpl' => 1,
    'file:../footer.tpl' => 1,
  ),
),false)) {
function content_5ae0143dec7d03_60969033 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <h1><?php echo $_smarty_tpl->tpl_vars['encabezado']->value;?>
</h1>
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="thumbnail">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>Nombre de usuario</th>
                <th>Admin?</th>
              </tr>
            </thead>
            <tbody>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuarios']->value, 'usuario');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->value) {
?>
              <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['nombre'];?>
</td>
                <?php if ($_smarty_tpl->tpl_vars['usuario']->value['permiso_admin'] == 0) {?>
                <td>NO <a class="fa fa-lock" href="cambiarPermisoAdmin/<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id_usuario'];?>
" aria-hidden="true"></a></td>
                <?php } else { ?>
                <td>SI <a class="fa fa-unlock" href="cambiarPermisoAdmin/<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id_usuario'];?>
" aria-hidden="true"></i></td>
                <?php }?>
                <td><a href="eliminarUsuario/<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id_usuario'];?>
" class="fa fa-trash-o"></a></td>
              </tr>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </tbody>
          </table>
        </div>
        <a href="admin" type="button" class="btn btn-success btn-sm">Volver</a>
      </div>
        <?php if (!empty($_smarty_tpl->tpl_vars['estado']->value)) {?>
          <div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['alert']->value;?>
" role="alert"><?php echo $_smarty_tpl->tpl_vars['estado']->value;?>
</div>
        <?php }?>
    </div>
  </div>
<?php $_smarty_tpl->_subTemplateRender("file:../footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
