<?php
/* Smarty version 3.1.30, created on 2018-10-11 23:06:34
  from "C:\xampp\htdocs\tpeBootstrap3\templates\inicio.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bbfbb5ad3c4d3_19699785',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46567dab7e460265a314e163daf6926f98a9da72' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeBootstrap3\\templates\\inicio.tpl',
      1 => 1539291332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbfbb5ad3c4d3_19699785 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
  <h1>Sugerencia de notebook</h1>
    <?php if (!empty($_smarty_tpl->tpl_vars['notebooks']->value[0]['nombre'])) {?>
      <div class="row">
    		  <div class="col-md-offset-4 col-sm-offset-3 col-sm-6 col-md-4">
      			<a class=" partialContain contenedor-notebook" href="notebook" data-value="<?php echo $_smarty_tpl->tpl_vars['notebooks']->value[0]['id_notebook'];?>
" aria-label="mostar notebook"></br>
    					<img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['notebooks']->value[0]['imagenes'][0]['ruta'];?>
" alt="notebook">
      				<div class="caption">
      					<div class="row">
      					</div>
      			  </div>
            </a>
      		</div>
      </div>
    <?php }?>
</div>
<?php }
}
