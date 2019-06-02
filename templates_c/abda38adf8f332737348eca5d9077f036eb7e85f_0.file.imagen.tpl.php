<?php
/* Smarty version 3.1.30, created on 2018-04-19 18:59:50
  from "C:\xampp\htdocs\tpe\templates\imagen.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad8cb061409d2_80845539',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'abda38adf8f332737348eca5d9077f036eb7e85f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe\\templates\\imagen.tpl',
      1 => 1524153791,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad8cb061409d2_80845539 (Smarty_Internal_Template $_smarty_tpl) {
?>
<img src="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['imagen_perfil'];?>
" alt="foto perfil de <?php echo $_smarty_tpl->tpl_vars['usuario']->value['nombre'];?>
" class="img-responsive img-circle img-perfil">
<?php }
}
