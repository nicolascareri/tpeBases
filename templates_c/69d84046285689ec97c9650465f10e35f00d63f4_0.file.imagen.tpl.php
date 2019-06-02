<?php
/* Smarty version 3.1.30, created on 2018-10-11 19:42:05
  from "C:\xampp\htdocs\tpeBootstrap4\templates\imagen.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bbf8b6dc8a622_74269951',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69d84046285689ec97c9650465f10e35f00d63f4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeBootstrap4\\templates\\imagen.tpl',
      1 => 1524153791,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbf8b6dc8a622_74269951 (Smarty_Internal_Template $_smarty_tpl) {
?>
<img src="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['imagen_perfil'];?>
" alt="foto perfil de <?php echo $_smarty_tpl->tpl_vars['usuario']->value['nombre'];?>
" class="img-responsive img-circle img-perfil">
<?php }
}
