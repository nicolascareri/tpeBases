<?php
/* Smarty version 3.1.30, created on 2018-10-11 19:40:22
  from "C:\xampp\htdocs\tpeBootstrap4\templates\inicio.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bbf8b06131504_77683151',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42415eb3b90304e60530d75db9877f6f48d4d38f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeBootstrap4\\templates\\inicio.tpl',
      1 => 1524621846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbf8b06131504_77683151 (Smarty_Internal_Template $_smarty_tpl) {
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
