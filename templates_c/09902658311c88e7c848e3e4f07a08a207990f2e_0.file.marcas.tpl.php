<?php
/* Smarty version 3.1.30, created on 2018-10-11 19:42:14
  from "C:\xampp\htdocs\tpeBootstrap4\templates\Admin\marcas.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bbf8b7662c730_19579148',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09902658311c88e7c848e3e4f07a08a207990f2e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeBootstrap4\\templates\\Admin\\marcas.tpl',
      1 => 1524621417,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../header.tpl' => 1,
    'file:../footer.tpl' => 1,
  ),
),false)) {
function content_5bbf8b7662c730_19579148 (Smarty_Internal_Template $_smarty_tpl) {
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
                <th>Nombre</th>
                <th>Img</th>
              </tr>
            </thead>
            <tbody>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'marca');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['marca']->value) {
?>
              <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['marca']->value['nombre'];?>
</td>
                <td><img src="<?php echo $_smarty_tpl->tpl_vars['marca']->value['url_img'];?>
" class="img-responsive" alt="<?php echo $_smarty_tpl->tpl_vars['marca']->value['nombre'];?>
"></td>
                <td><a href="modificarMarca/<?php echo $_smarty_tpl->tpl_vars['marca']->value['id_marca'];?>
" class="fa fa-pencil"></a></td>
                <td><a href="eliminarMarca/<?php echo $_smarty_tpl->tpl_vars['marca']->value['id_marca'];?>
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
        <a class="btn btn-primary btn-sm" href="crearMarca">Crear nueva marca</a>
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
