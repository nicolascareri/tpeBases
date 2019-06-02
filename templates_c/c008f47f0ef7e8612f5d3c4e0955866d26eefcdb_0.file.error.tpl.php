<?php
/* Smarty version 3.1.30, created on 2019-04-17 18:19:39
  from "C:\xampp\htdocs\tpeBootstrap3\templates\Login\error.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5cb7521bafd175_06352403',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c008f47f0ef7e8612f5d3c4e0955866d26eefcdb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeBootstrap3\\templates\\Login\\error.tpl',
      1 => 1539289841,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb7521bafd175_06352403 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
<?php }
}
