<?php
/* Smarty version 3.1.30, created on 2018-10-11 01:08:58
  from "C:\xampp\htdocs\tpeBootstrap\templates\imagen.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bbe868a56e170_96364648',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e20e17dbcdca718a5b54941c8044183157dff781' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeBootstrap\\templates\\imagen.tpl',
      1 => 1524153791,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbe868a56e170_96364648 (Smarty_Internal_Template $_smarty_tpl) {
?>
<img src="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['imagen_perfil'];?>
" alt="foto perfil de <?php echo $_smarty_tpl->tpl_vars['usuario']->value['nombre'];?>
" class="img-responsive img-circle img-perfil">
<?php }
}
