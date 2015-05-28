<?php include'header.php'; ?>

<aside class="asside-right">
<div class="panel panel-default">
  <div class="panel-heading">Preencha o formulário de promoção</div>
  <div class="panel-body">
 
<div class="row">
  <div class="col-xs-4">
    <input type="text" name"" class="form-control" placeholder="Nome da promoção">
  </div>
  <div class="col-xs-4">
    <input type="text" name"" class="form-control" readonly value="<?php $data= date("d/m/Y"); echo $data;?>">
  </div>
  <div class="col-xs-4">
    <input type="text" name"" class="form-control" readonly  value="<?php $Hora = date("h:i:s"); echo $Hora;?>">
  </div>
</div> <br />

<button type="button" class="btn btn-danger"> <i class="fa fa-times"></i> Cancelar</button>
<button type="button" class="btn btn-success"> <i class="fa fa-user-plus"></i> Incluir</button>

  </div>
</div>
</aside>





<?php include'bottom.php'; ?>