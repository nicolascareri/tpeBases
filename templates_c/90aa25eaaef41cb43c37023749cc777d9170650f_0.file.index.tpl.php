<?php
/* Smarty version 3.1.30, created on 2018-10-11 23:59:03
  from "C:\xampp\htdocs\tpeBootstrap3\templates\Admin\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bbfc7a7a36814_06960011',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90aa25eaaef41cb43c37023749cc777d9170650f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeBootstrap3\\templates\\Admin\\index.tpl',
      1 => 1539291809,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../header.tpl' => 1,
    'file:../footer.tpl' => 1,
  ),
),false)) {
function content_5bbfc7a7a36814_06960011 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:../header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <h1><?php echo $_smarty_tpl->tpl_vars['encabezado']->value;?>
</h1>
  <div class="row">
    <div class="container-fluid">
        <div class="col-md-6 col-md-offset-3">
          <div class="thumbnail">
            <ul class="nav nav-pills nav-stacked">
              <li role="presentation"><a href="" aria-label="inicio" class="fa fa-home"> IR AL SITIO</a></li>
              <li role="presentation"><a href="adminMarcas" aria-label="admin marcas" class="fa fa-apple"> MARCAS</a></li>
              <li role="presentation"><a href="adminNotebooks" aria-label="admin notebook" class="fa fa-mobile"> NOTEBOOKS</a></li>
              <li role="presentation"><a href="adminUsuarios" aria-label="admin usuarios" class="fa fa-user"> USUARIOS</a></li>
              <li role="presentation"><a href="logout" aria-label="admin salir" class="fa fa-sign-out"> CERRAR SESION</a></li>
            </ul>
          </div>
        </div>
    </div>
  </div>
<?php $_smarty_tpl->_subTemplateRender("file:../footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
