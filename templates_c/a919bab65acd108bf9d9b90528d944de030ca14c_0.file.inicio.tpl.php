<?php
/* Smarty version 3.1.30, created on 2019-06-03 21:09:07
  from "C:\xampp\htdocs\tpeBases\templates\inicio.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5cf57053c80484_31833976',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a919bab65acd108bf9d9b90528d944de030ca14c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeBases\\templates\\inicio.tpl',
      1 => 1559588945,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5cf57053c80484_31833976 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable1=ob_get_clean();
echo $_prefixVariable1;?>

<div class="container">
  <h1 class="">Data Warehouse</h1>
</div>
<div class="container-fluid">
<form action="/tpebases/fechas" method="post">
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Fecha</label>
    <div class="col-sm-10">
      <input name="fecha" type="text" class="form-control" id="inputPassword" placeholder="yyyy-mm-dd">
        <button type="submit" class="btn btn-primary mb-2">Obtener posiciones</button>
    </div>
  </div>
</form>
<form action="/tpebases/cliente" method="post">
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Cliente</label>
    <div class="col-sm-10">
      <input name="id_cliente" type="text" class="form-control" id="inputPassword" placeholder="id">
        <button type="submit" class="btn btn-primary mb-2">Obtener posiciones</button>
    </div>
  </div>
</form> 
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
