{include file="header.tpl" }
<div class="container">
  <h1>Data Warehouse</h1>
    {foreach from=$pos item=po}
        <p> {$po['estanteria']} {$po['posicion']}  {$po['fila']} </p>
    {/foreach}
</div>
{include file="footer.tpl"}