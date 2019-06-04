<?php
/* Smarty version 3.1.30, created on 2019-06-04 21:09:14
  from "C:\xampp\htdocs\tpeBases\templates\restantes.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5cf6c1daaa4802_85020075',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9921a584c59da9e13b6c0861890423b4c62b6a7b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeBases\\templates\\restantes.tpl',
      1 => 1559675352,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5cf6c1daaa4802_85020075 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
  <h1>Data Warehouse</h1>
    <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Numero de Estanteria</th>
                  <th scope="col">Numero de Posicion</th>
                  <th scope="col">Numero de Fila</th>
                </tr>
              </thead>
              <tbody id="tablaTour">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pos']->value, 'po');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['po']->value) {
?>

                <tr class="centrarfila">
                  <td><?php echo $_smarty_tpl->tpl_vars['po']->value['estanteria'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['po']->value['posicion'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['po']->value['fila'];?>
</td>
                </tr>

                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

              </tbody>
            </table>

          </div>
        </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
