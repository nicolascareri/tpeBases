<?php
/* Smarty version 3.1.30, created on 2018-10-11 23:43:57
  from "C:\xampp\htdocs\tpeBootstrap3\templates\notebooks.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bbfc41d3a6919_70972164',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be7aa256dec5df8ba352b4f87a6d25eeb226b571' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeBootstrap3\\templates\\notebooks.tpl',
      1 => 1539291468,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbfc41d3a6919_70972164 (Smarty_Internal_Template $_smarty_tpl) {
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
  			<a class="thumbnail partialContain contenedor-notebook" href="notebook" data-value="<?php echo $_smarty_tpl->tpl_vars['notebook']->value['id_notebook'];?>
" aria-label="mostar notebook id">
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
