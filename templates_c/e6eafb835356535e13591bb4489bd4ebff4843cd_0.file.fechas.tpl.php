<?php
/* Smarty version 3.1.30, created on 2019-06-03 00:17:01
  from "C:\xampp\htdocs\tpeBases\templates\fechas.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5cf44add54d5d3_30890910',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6eafb835356535e13591bb4489bd4ebff4843cd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeBases\\templates\\fechas.tpl',
      1 => 1559513814,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5cf44add54d5d3_30890910 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
  <h1>Data Warehouse</h1>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pos']->value, 'po');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['po']->value) {
?>
        <p> <?php echo $_smarty_tpl->tpl_vars['po']->value['estanteria'];?>
 <?php echo $_smarty_tpl->tpl_vars['po']->value['posicion'];?>
  <?php echo $_smarty_tpl->tpl_vars['po']->value['fila'];?>
 </p>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
