<?php
/* Smarty version 3.1.30, created on 2018-04-25 04:20:58
  from "C:\xampp\htdocs\tpe\templates\Admin\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adfe60ad8f219_82525888',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf5b6b649ce2efb6f40d7c11e024bffe95d20026' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe\\templates\\Admin\\index.tpl',
      1 => 1524621385,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../header.tpl' => 1,
    'file:../footer.tpl' => 1,
  ),
),false)) {
function content_5adfe60ad8f219_82525888 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <h1><?php echo $_smarty_tpl->tpl_vars['encabezado']->value;?>
</h1>
  <div class="row">
    <div class="container-fluid">
        <div class="col-md-6 col-md-offset-3">
          <div class="thumbnail">
            <ul class="nav nav-pills nav-stacked">
              <li role="presentation"><a href="" class="fa fa-home"> IR AL SITIO</a></li>
              <li role="presentation"><a href="adminMarcas" class="fa fa-apple"> MARCAS</a></li>
              <li role="presentation"><a href="adminNotebooks" class="fa fa-mobile"> NOTEBOOKS</a></li>
              <li role="presentation"><a href="adminUsuarios" class="fa fa-user"> USUARIOS</a></li>
              <li role="presentation"><a href="logout" class="fa fa-sign-out"> CERRAR SESION</a></li>
            </ul>
          </div>
        </div>
    </div>
  </div>
<?php $_smarty_tpl->_subTemplateRender("file:../footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
