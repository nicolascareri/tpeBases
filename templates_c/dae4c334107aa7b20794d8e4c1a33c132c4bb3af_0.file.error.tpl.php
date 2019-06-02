<?php
/* Smarty version 3.1.30, created on 2018-10-11 23:43:54
  from "C:\xampp\htdocs\tpeBootstrap3\templates\error.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bbfc41a71ada3_02194489',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dae4c334107aa7b20794d8e4c1a33c132c4bb3af' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeBootstrap3\\templates\\error.tpl',
      1 => 1539289827,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbfc41a71ada3_02194489 (Smarty_Internal_Template $_smarty_tpl) {
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
