<?php
/* Smarty version 3.1.30, created on 2018-10-11 19:46:39
  from "C:\xampp\htdocs\tpeBootstrap4\templates\error.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bbf8c7f0f8b27_12912206',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d97a52600f0fbe687bccc141c9c9e80b4b9df59' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeBootstrap4\\templates\\error.tpl',
      1 => 1524621724,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbf8c7f0f8b27_12912206 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
  <div class="col-md-offset-4 col-sm-6 col-md-4">
    <div class="alert alert-danger" role="alert">
      <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

    </div>
  </div>
</div>
<?php }
}
