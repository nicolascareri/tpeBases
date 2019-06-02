<?php
/* Smarty version 3.1.30, created on 2018-10-11 19:42:18
  from "C:\xampp\htdocs\tpeBootstrap4\templates\Admin\notebooks.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bbf8b7ac2fae1_90131066',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '305cde88ce62eda649c95fd2054b0cf315548979' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeBootstrap4\\templates\\Admin\\notebooks.tpl',
      1 => 1524621491,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../header.tpl' => 1,
    'file:../footer.tpl' => 1,
  ),
),false)) {
function content_5bbf8b7ac2fae1_90131066 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <h1><?php echo $_smarty_tpl->tpl_vars['encabezado']->value;?>
</h1>
  <div class="row">
    <div class="col-md-8 col-md-offset-2 col-xs-12">
      <div class="thumbnail cuerpoNotebooks">
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Caracteristicas</th>
                <th>Imagenes</th>
                <th>Precio</th>
                <th>Marca</th>
              </tr>
            </thead>
            <tbody>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notebooks']->value, 'notebook');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['notebook']->value) {
?>
                <tr>
                  <td><?php echo $_smarty_tpl->tpl_vars['notebook']->value['nombre'];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['notebook']->value['caracteristicas'];?>
</td>
                  <td>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notebook']->value['imagenes'], 'imagen');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->value) {
?>
                      <img src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['ruta'];?>
" class="img-responsive" alt="<?php echo $_smarty_tpl->tpl_vars['notebook']->value['nombre'];?>
">
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    <a href="modificarImagenes/<?php echo $_smarty_tpl->tpl_vars['notebook']->value['id_notebook'];?>
" class="fa fa-pencil"></a>
                  </td>
                  <td>$ <?php echo $_smarty_tpl->tpl_vars['notebook']->value['precio'];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['notebook']->value['marca']['nombre'];?>
</td>
                  <td><a href="modificarNotebook/<?php echo $_smarty_tpl->tpl_vars['notebook']->value['id_notebook'];?>
" class="fa fa-pencil"></a></td>
                  <td><a href="eliminarNotebook/<?php echo $_smarty_tpl->tpl_vars['notebook']->value['id_notebook'];?>
" class="fa fa-trash-o"></a></td>
                  <td><a href="especificacion/<?php echo $_smarty_tpl->tpl_vars['notebook']->value['id_notebook'];?>
">Especificaciones</a></td>
                </tr>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </tbody>
          </table>
        </div>
        <a href="crearNotebook" type="button" class="btn btn-primary btn-sm">Crear nueva notebook</a>
        <a href="admin" type="button" class="btn btn-success btn-sm">Volver</a>
      </div>
    </div>
  </div>
<?php $_smarty_tpl->_subTemplateRender("file:../footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
