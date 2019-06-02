<?php
/* Smarty version 3.1.30, created on 2019-06-03 00:32:14
  from "C:\xampp\htdocs\tpeBases\templates\inicio.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5cf44e6ed1d181_47698574',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a919bab65acd108bf9d9b90528d944de030ca14c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeBases\\templates\\inicio.tpl',
      1 => 1559514553,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5cf44e6ed1d181_47698574 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable1=ob_get_clean();
echo $_prefixVariable1;?>

<div class="container">
  <h1>Data Warehouse</h1>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pallet']->value, 'pall');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pall']->value) {
?>
      <div class="row">
    		  <div class="col-md-offset-4 col-sm-offset-3 col-sm-6 col-md-4">
						<p> <?php echo $_smarty_tpl->tpl_vars['pall']->value['descripcion'];?>
 </p>
      		</div>
      </div>
	   <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</div>
<form action="/tpebases/fechas" method="post">
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Fecha</label>
    <div class="col-sm-10">
      <input name="fecha" type="text" class="form-control" id="inputPassword" placeholder="yyyy-mm-dd">
        <button type="submit" class="btn btn-primary mb-2">mandale mecha</button>
    </div>
  </div>
</form>
<form action="/tpebases/dias" method="post">
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Dias</label>
    <div class="col-sm-10">
      <input name="dias" type="text" class="form-control" id="inputPassword" placeholder="d">
        <button type="submit" class="btn btn-primary mb-2">atr perro cumbia cajetiala piola gato</button>
    </div>
  </div>
</form> 
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
