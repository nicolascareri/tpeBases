{{include file="header.tpl" }}
<div class="container">
  <h1>Data Warehouse</h1>
    {foreach from=$pallet item=pall}
      <div class="row">
    		  <div class="col-md-offset-4 col-sm-offset-3 col-sm-6 col-md-4">
						<p> {$pall['descripcion']} </p>
      		</div>
      </div>
	   {/foreach}
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
{include file="footer.tpl"}