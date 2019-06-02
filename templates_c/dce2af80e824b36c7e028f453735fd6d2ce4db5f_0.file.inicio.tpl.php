<?php
/* Smarty version 3.1.30, created on 2018-10-01 19:55:32
  from "C:\xampp\htdocs\tpeBootstrap\templates\inicio.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bb25f94d92b11_55883740',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dce2af80e824b36c7e028f453735fd6d2ce4db5f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeBootstrap\\templates\\inicio.tpl',
      1 => 1524621846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb25f94d92b11_55883740 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
  <h1>Sugerencia de notebook</h1>
    <?php if (!empty($_smarty_tpl->tpl_vars['notebooks']->value[0]['nombre'])) {?>
      <div class="row">
    		  <div class="col-md-offset-4 col-sm-offset-3 col-sm-6 col-md-4">
      			<a class=" partialContain contenedor-notebook" href="notebook/" data-value="<?php echo $_smarty_tpl->tpl_vars['notebooks']->value[0]['id_notebook'];?>
"></br>
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
