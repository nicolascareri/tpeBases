<?php
/* Smarty version 3.1.30, created on 2018-04-19 19:04:27
  from "C:\xampp\htdocs\tpe\templates\Admin\celulares.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad8cc1b033b50_12952105',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6b6ed1c4fdc59900cf86ee119867328eefce0d3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe\\templates\\Admin\\celulares.tpl',
      1 => 1524153450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../header.tpl' => 1,
    'file:../footer.tpl' => 1,
  ),
),false)) {
function content_5ad8cc1b033b50_12952105 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1><?php echo $_smarty_tpl->tpl_vars['encabezado']->value;?>
</h1>
<div class="row">
  <div class="col-md-8 col-md-offset-2 col-xs-12">
    <div class="thumbnail cuerpoCelulares">
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['celulares']->value, 'celular');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['celular']->value) {
?>
            <tr>
              <td><?php echo $_smarty_tpl->tpl_vars['celular']->value['nombre'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['celular']->value['caracteristicas'];?>
</td>
              <td>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['celular']->value['imagenes'], 'imagen');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->value) {
?>
                <img src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['ruta'];?>
" class="img-responsive" alt="<?php echo $_smarty_tpl->tpl_vars['celular']->value['nombre'];?>
">
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

              <a href="modificarImagenes/<?php echo $_smarty_tpl->tpl_vars['celular']->value['id_celular'];?>
" class="fa fa-pencil"></a>
              </td>
              <td>$ <?php echo $_smarty_tpl->tpl_vars['celular']->value['precio'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['celular']->value['marca']['nombre'];?>
</td>
              <td><a href="modificarCelular/<?php echo $_smarty_tpl->tpl_vars['celular']->value['id_celular'];?>
" class="fa fa-pencil"></a></td>
              <td><a href="eliminarCelular/<?php echo $_smarty_tpl->tpl_vars['celular']->value['id_celular'];?>
" class="fa fa-trash-o"></a></td>
              <td><a href="especificacion/<?php echo $_smarty_tpl->tpl_vars['celular']->value['id_celular'];?>
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
      <a href="crearCelular" type="button" class="btn btn-primary btn-sm">Crear nuevo celular</a>
      <a href="admin" type="button" class="btn btn-success btn-sm">Volver</a>
    </div>
  </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:../footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
