<?php
/* Smarty version 3.1.30, created on 2018-10-11 23:58:56
  from "C:\xampp\htdocs\tpeBootstrap3\templates\imagen.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bbfc7a03bdc25_04558792',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22425458ebb7e23744f11daa6ca9418ae380bd85' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeBootstrap3\\templates\\imagen.tpl',
      1 => 1539289811,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbfc7a03bdc25_04558792 (Smarty_Internal_Template $_smarty_tpl) {
?>

<img src="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['imagen_perfil'];?>
" alt="foto perfil de <?php echo $_smarty_tpl->tpl_vars['usuario']->value['nombre'];?>
" class="img-responsive img-circle img-perfil">
<?php }
}
