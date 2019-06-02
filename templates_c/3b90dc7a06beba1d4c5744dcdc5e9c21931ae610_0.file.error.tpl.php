<?php
/* Smarty version 3.1.30, created on 2018-10-02 02:13:33
  from "C:\xampp\htdocs\tpeBootstrap\templates\error.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bb2b82d3a99d6_73439068',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b90dc7a06beba1d4c5744dcdc5e9c21931ae610' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeBootstrap\\templates\\error.tpl',
      1 => 1524621724,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb2b82d3a99d6_73439068 (Smarty_Internal_Template $_smarty_tpl) {
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
