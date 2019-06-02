<?php
/* Smarty version 3.1.30, created on 2018-04-25 07:37:24
  from "C:\xampp\htdocs\tpe\templates\error.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae0141401a060_89070734',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea0fda4652401a760063340ce9254b268cb96274' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe\\templates\\error.tpl',
      1 => 1524621724,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae0141401a060_89070734 (Smarty_Internal_Template $_smarty_tpl) {
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
