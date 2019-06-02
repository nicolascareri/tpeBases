<?php
/* Smarty version 3.1.30, created on 2018-10-11 19:14:25
  from "C:\xampp\htdocs\tpeBootstrap\templates\Admin\formImagenes.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bbf84f1665be2_64383916',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1765246adcd20bff031f91135a2cd45ce24008fc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeBootstrap\\templates\\Admin\\formImagenes.tpl',
      1 => 1524621310,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../header.tpl' => 1,
    'file:../footer.tpl' => 1,
  ),
),false)) {
function content_5bbf84f1665be2_64383916 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <h1><?php echo $_smarty_tpl->tpl_vars['encabezado']->value;?>
</h1>
  <div class="row">
    <div class="col-md-8 col-md-offset-2 col-xs-12">
      <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
        <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
      <?php }?>
      <div class="thumbnail">
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Imagen</th>
                <th>Cambiar</th>
              </tr>
            </thead>
            <tbody>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['imagenes']->value, 'imagen');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->value) {
?>
                <tr>
                  <td class="imgcel"><img src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['ruta'];?>
" class="img-responsive" alt="imagenNotebook <?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_imagen'];?>
"></td>
                  <td>
                    <form action="cambiarImagen/<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_imagen'];?>
" method="post" class="submitImagenNotebook" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="imagen">Imagen notebook</label>
                            <input type="file" id="imagen" name="imagen">
                        </div>
                        <button type="submit" class="btn btn-primary">Cambiar Imagen</button>
                    </form>
                  <a href="eliminarImagen/<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_imagen'];?>
" class="btn btn-danger">Eliminar Imagen</a>
                  </td>
                </tr>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </tbody>
          </table>
        </div>
        <form action="subirImagenes/<?php echo $_smarty_tpl->tpl_vars['id_notebook']->value;?>
" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="imagenes">Imagenes Notebook (Puede tener como maximo 3)</label>
            <input type="file" id="imagenes" name="imagenes[]" multiple>
          </div>
          <button type="submit" class="btn btn-primary">Subir Imagenes</button>
          <a href="adminNotebooks" type="button" class="btn btn-success btn-sm">Volver</a>
        </form>
      </div>
    </div>
  </div>
<?php $_smarty_tpl->_subTemplateRender("file:../footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
