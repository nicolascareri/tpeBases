<?php
/* Smarty version 3.1.30, created on 2018-04-19 19:05:14
  from "C:\xampp\htdocs\tpe\templates\Admin\formCelular.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad8cc4a63bde6_04351826',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ff0a02033684ff503757aa5738424ded96e1b12' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe\\templates\\Admin\\formCelular.tpl',
      1 => 1524153500,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../header.tpl' => 1,
    'file:../footer.tpl' => 1,
  ),
),false)) {
function content_5ad8cc4a63bde6_04351826 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1><?php echo $_smarty_tpl->tpl_vars['encabezado']->value;?>
</h1>
<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
      <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
    <?php }?>
    <div class="thumbnail">
      <form action="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input type="text" class="form-control" id="nombre" name="nombre"  value="<?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
" placeholder="Nombre del celular">
        </div>
        <div class="form-group">
          <label for="caracteristicas">Caracteristicas</label>
          <textarea id="caracteristicas" name="caracteristicas" rows="8" cols="50"><?php echo $_smarty_tpl->tpl_vars['caracteristicas']->value;?>
</textarea>
        </div>
        <div class="form-group">
          <label for="precio">Precio $</label>
          <input type="number" class="form-control" id="precio" name="precio"  value="<?php echo $_smarty_tpl->tpl_vars['precio']->value;?>
" placeholder="$99.99">
        </div>
        <div class="form-group">
          <label for="precio">Marca</label>
          <select class="form-control" name="marca">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'marca');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['marca']->value) {
?>
            <?php if ($_smarty_tpl->tpl_vars['marca']->value['id_marca'] == $_smarty_tpl->tpl_vars['id_marca_celular']->value) {?>
              <option value=<?php echo $_smarty_tpl->tpl_vars['marca']->value['id_marca'];?>
 selected><?php echo $_smarty_tpl->tpl_vars['marca']->value['nombre'];?>
</option>
            <?php } else { ?>
              <option value=<?php echo $_smarty_tpl->tpl_vars['marca']->value['id_marca'];?>
 ><?php echo $_smarty_tpl->tpl_vars['marca']->value['nombre'];?>
</option>
            <?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

          </select>
        </div>
        <div class="form-group">
          <label for="imagenes">Imagenes Celular (Max. 3)</label>
          <input type="file" id="imagenes" name="imagenes[]" multiple>
        </div>
        <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['accion']->value;?>
</button>
        <a href="adminCelulares" type="button" class="btn btn-success btn-sm">Volver</a>
      </form>
    </div>
  </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:../footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
