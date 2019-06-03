{{include file="header.tpl" }}
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
{include file="footer.tpl"}