<?php
/* Smarty version 3.1.30, created on 2018-04-24 00:22:48
  from "C:\xampp\htdocs\tpe\templates\celulares.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ade5cb8b19561_95810145',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '575b886f4bc68c5fd75ad3320d9ad7037bb512f6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe\\templates\\celulares.tpl',
      1 => 1524522164,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ade5cb8b19561_95810145 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
	<div class="row">
  	<div class="col-sm-4 col-md-3">
    	<!-- <a href="celulares/ordenados/marca" data-value="" class="partialContain thumbnail fa fa-sort"> Mostrar todos ordenados por marca</a> -->
  	</div>
	</div>
  <div class="row">
  	<div class="col-md-12">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['celulares']->value, 'celular');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['celular']->value) {
?>
  		<div class="col-sm-6 col-md-4">
  			<a class="thumbnail partialContain contenedor-celular" href="celular/" data-value="<?php echo $_smarty_tpl->tpl_vars['celular']->value['id_celular'];?>
">
  				    <h4 class="text-center"><span class="label label-info"><?php echo $_smarty_tpl->tpl_vars['celular']->value['marca']['nombre'];?>
</span></h4>
  					<img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['celular']->value['imagenes'][0]['ruta'];?>
" alt="celular">
  				<div class="caption">
  					<div class="row">
  						<div class="col-md-8 col-xs-6">
  							<h3><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['celular']->value['nombre'], 'UTF-8');?>
</h3>
  						</div>
  						<div class="col-md-4 col-xs-6 price">
  							<h3><label>$<?php echo $_smarty_tpl->tpl_vars['celular']->value['precio'];?>
</label></h3>
  						</div>
  					</div>
  			  </div>
        </a>
  		</div>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>
  </div>
</div>
<?php }
}
