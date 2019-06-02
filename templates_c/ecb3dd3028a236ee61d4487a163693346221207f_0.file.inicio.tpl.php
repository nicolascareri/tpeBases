<?php
/* Smarty version 3.1.30, created on 2018-04-25 04:04:34
  from "C:\xampp\htdocs\tpe\templates\inicio.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adfe232487db1_84924205',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ecb3dd3028a236ee61d4487a163693346221207f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe\\templates\\inicio.tpl',
      1 => 1524621846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5adfe232487db1_84924205 (Smarty_Internal_Template $_smarty_tpl) {
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
