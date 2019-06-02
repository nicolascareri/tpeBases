<?php
/* Smarty version 3.1.30, created on 2019-06-03 00:42:12
  from "C:\xampp\htdocs\tpeBases\templates\restantes.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5cf450c42800f4_13458683',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9921a584c59da9e13b6c0861890423b4c62b6a7b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeBases\\templates\\restantes.tpl',
      1 => 1559515133,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5cf450c42800f4_13458683 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
  <h1>Data Warehouse</h1>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['restantes']->value, 'res');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['res']->value) {
?>
        <p> <?php echo $_smarty_tpl->tpl_vars['res']->value['cuit_cuil'];?>
 <?php echo $_smarty_tpl->tpl_vars['res']->value['apellido'];?>
  <?php echo $_smarty_tpl->tpl_vars['res']->value['nombre'];
echo $_smarty_tpl->tpl_vars['res']->value['fecha_alta'];?>
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
