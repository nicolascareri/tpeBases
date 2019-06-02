<?php
/* Smarty version 3.1.30, created on 2019-06-02 20:28:48
  from "C:\xampp\htdocs\tpeBases\templates\imagen.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5cf415602d9574_99981680',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f7543c5e1a03bc47e7ebf420037b5585f1acabc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeBases\\templates\\imagen.tpl',
      1 => 1559498863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf415602d9574_99981680 (Smarty_Internal_Template $_smarty_tpl) {
?>

<img src="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['imagen_perfil'];?>
" alt="foto perfil de <?php echo $_smarty_tpl->tpl_vars['usuario']->value['nombre'];?>
" class="img-responsive img-circle img-perfil">
<?php }
}
