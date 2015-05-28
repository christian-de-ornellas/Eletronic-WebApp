<?php include'header.php'; ?>

<aside class="asside-right">
<div class="panel panel-default">
  <div class="panel-heading">Gerador de cupon</div>
  <div class="panel-body">
 
<div class="row">
  <div class="col-xs-4">
  <select name=""  class="form-control">
  <option value="">Selecione um cliente</option>
   <option value="">João Vitor</option>
   <option value="">Fabio Luiz</option>
   <option value="">Denis Soares</option>
  </select>
  </div>

  <div class="col-xs-4">
  <select name=""  class="form-control">
  <option value="">Selecione uma promoção</option>
   <option value="">001-Dias das mães</option>
   <option value="">002-Dias dos pais</option>
   <option value="">003-Dias dos namorados</option>
  </select>
  </div>

  <div class="col-xs-4">
    <input type="text" name"" class="form-control" placeholder="Nota fiscal (nº)">
  </div> <br /><br /><br />

  <div class="col-xs-3">
    <input type="text" name"" class="form-control" placeholder="Data de compra">
  </div>

  <div class="col-xs-3">
    <input type="text" name"" class="form-control" placeholder="Valor da compra">
  </div>

  <div class="col-xs-2">
    <input type="text" name"" class="form-control" readonly value="<?php $data= date("d/m/Y"); echo $data;?>">
  </div>

  <div class="col-xs-2">
    <input type="text" name"" class="form-control" readonly  value="<?php $Hora = date("h:i:s"); echo $Hora;?>">
  </div> <br /><br />

  <div class="checkbox">
      <label>
        <input type="checkbox" name="" value="sim"><p>Eu aceito receber em meu e-mail informações e promoções.</p>
      </label>
    </div>
</div> <br />

<button type="button" class="btn btn-danger"> <i class="fa fa-times"></i> Cancelar</button>
<button type="button" class="btn btn-success"> <i class="fa fa-user-plus"></i> Gerar um cupon</button>

  </div>
</div>
</aside>


<?php include'bottom.php'; ?>