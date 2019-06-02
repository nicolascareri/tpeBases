<?php
/* Smarty version 3.1.30, created on 2018-10-13 22:12:22
  from "C:\xampp\htdocs\tpeBootstrap3\templates\Admin\marcas.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bc251a68cd5e9_96133734',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '484abececd5a826aa923188181fddb7249909cc5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeBootstrap3\\templates\\Admin\\marcas.tpl',
      1 => 1539291855,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../header.tpl' => 1,
    'file:../footer.tpl' => 1,
  ),
),false)) {
function content_5bc251a68cd5e9_96133734 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:../header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
" aria-label="editar marca" class="fa fa-pencil"></a></td>
                <td><a href="eliminarMarca/<?php echo $_smarty_tpl->tpl_vars['marca']->value['id_marca'];?>
" aria-label="eliminar marca" class="fa fa-trash-o"></a></td>
              </tr>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </tbody>
          </table>
        </div>
        <a class="btn btn-primary btn-sm" href="crearMarca" aria-label="crear marca">Crear nueva marca</a>
        <a href="admin" type="button" aria-label="panel admin" class="btn btn-success btn-sm">Volver</a>
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
