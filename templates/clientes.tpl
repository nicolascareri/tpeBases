{include file="header.tpl" }
<div class="container">
  <h1>Data Warehouse</h1>
  <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Id de Alquiler</th>
                  <th scope="col">Numero de Posicion</th>
                  <th scope="col">Numero de Estanteria</th>
                  <th scope="col">Numero de Fila</th>
                </tr>
              </thead>
              <tbody id="tablaTour">
                {foreach from=$posiciones item=pos}

                <tr class="centrarfila">
                  <td>{$pos['id_alquiler']}</td><td>{$pos['nro_posicion']}</td><td>{$pos['nro_estanteria']}</td><td>{$pos['nro_fila']}</td>
                </tr>

                {/foreach}
              </tbody>
            </table>

          </div>
        </div>
</div>
{include file="footer.tpl"}