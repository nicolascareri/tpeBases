{include file="header.tpl" }
<div class="container">
  <h1>Data Warehouse</h1>
    {foreach from=$restantes item=res}
        <p> {$res['cuit_cuil']} {$res['apellido']}  {$res['nombre']}{$res['fecha_alta']} </p>
    {/foreach}
</div>
{include file="footer.tpl"}