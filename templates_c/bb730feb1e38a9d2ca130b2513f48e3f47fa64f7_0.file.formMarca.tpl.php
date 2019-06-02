<?php
/* Smarty version 3.1.30, created on 2018-08-16 00:57:24
  from "C:\xampp\htdocs\tpe\templates\Admin\formMarca.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b74afd4ca1732_73444748',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb730feb1e38a9d2ca130b2513f48e3f47fa64f7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe\\templates\\Admin\\formMarca.tpl',
      1 => 1524621339,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../header.tpl' => 1,
    'file:../footer.tpl' => 1,
  ),
),false)) {
function content_5b74afd4ca1732_73444748 (Smarty_Internal_Template $_smarty_tpl) {
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
" method="post">
          <div class="form-group">
            <label for="titulo">Nombre</label>
            <input type="text" class="form-control" id="titulo" name="nombre"  value="<?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
" placeholder="Nombre de la marca">
          </div>
          <div class="form-group">
            <label for="url">Url del logo</label>
            <input type="text" class="form-control" id="url" name="url"  value="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" placeholder="www.imagenes.com/imagen">
          </div>
          <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['accion']->value;?>
</button>
          <a href="adminMarcas" type="button" class="btn btn-success btn-sm">Volver</a>
        </form>
      </div>
    </div>
  </div>
<?php $_smarty_tpl->_subTemplateRender("file:../footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
