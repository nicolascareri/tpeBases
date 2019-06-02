<?php
/* Smarty version 3.1.30, created on 2018-04-23 07:06:07
  from "C:\xampp\htdocs\tpe\templates\buscador.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5add69bf760cf8_59284833',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'befb2ff870c542830d8b7c86a74b1944ff9f755f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe\\templates\\buscador.tpl',
      1 => 1524153674,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5add69bf760cf8_59284833 (Smarty_Internal_Template $_smarty_tpl) {
if (!empty($_smarty_tpl->tpl_vars['celulares']->value)) {?>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['celulares']->value, 'celular');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['celular']->value) {
?>
          <li><a class="partialContain contenedor-celular" href="celular/" data-value="<?php echo $_smarty_tpl->tpl_vars['celular']->value['id_celular'];?>
"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['celular']->value['marca']['nombre'], 'UTF-8');?>
 <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['celular']->value['nombre'], 'UTF-8');?>

           </a></li>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php } else { ?>
  <li><a>NO HAY RESULTADOS</a></li>
<?php }
}
}
