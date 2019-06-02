<?php
/* Smarty version 3.1.30, created on 2018-04-24 21:23:04
  from "C:\xampp\htdocs\tpe\templates\notebooks.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adf84184ddc74_39092630',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffdfc2bae84f981c8ccf928f50aa6b5607c1a861' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe\\templates\\notebooks.tpl',
      1 => 1524596407,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5adf84184ddc74_39092630 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
	<div class="row">
  	<div class="col-sm-4 col-md-3">
  	</div>
	</div>
  <div class="row">
  	<div class="col-md-12">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notebooks']->value, 'notebook');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['notebook']->value) {
?>
  		<div class="col-sm-6 col-md-4">
  			<a class="thumbnail partialContain contenedor-notebook" href="notebook/" data-value="<?php echo $_smarty_tpl->tpl_vars['notebook']->value['id_notebook'];?>
">
  				    <h4 class="text-center"><span class="label label-info"><?php echo $_smarty_tpl->tpl_vars['notebook']->value['marca']['nombre'];?>
</span></h4>
  					<img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['notebook']->value['imagenes'][0]['ruta'];?>
" alt="notebook">
  				<div class="caption">
  					<div class="row">
  						<div class="col-md-8 col-xs-6">
  							<h3><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['notebook']->value['nombre'], 'UTF-8');?>
</h3>
  						</div>
  						<div class="col-md-4 col-xs-6 price">
  							<h3><label>$<?php echo $_smarty_tpl->tpl_vars['notebook']->value['precio'];?>
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
