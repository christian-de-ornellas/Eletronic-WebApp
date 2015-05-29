<?php include'header.php'; ?>
<?php  
function __autoload($class_name){
    require'Controller/' .$class_name. '.php';   
}
?>

<aside class="asside-right">
<div class="panel panel-default">
  <div class="panel-heading">Preencha o formulário de promoção</div>
  <div class="panel-body">
      <?php 
        if (isset($_POST['cadastrar'])):
            
      
      $promocoes= new Promocao();
      
     $promocao = trim($_POST["promocao"]);
      $data= trim($_POST["data"]);
      $hora = trim($_POST["hora"]);
      
      $promocoes->setPromocao($promocao);
      $promocoes->setData($data);
      $promocoes->setHora($hora);
      
      if($promocoes->insert()){
          
          echo"Inserido com sucesso";
      }
        endif;
      ?>
      <form method="post">
<div class="row">
  <div class="col-xs-4">
    <input type="text" name="promocao" class="form-control" placeholder="Nome da promoção">
  </div>
  <div class="col-xs-4">
      <input type="text" name="data" class="form-control" readonly value="<?php $data= date("d/m/Y"); echo $data;?>">
  </div>
  <div class="col-xs-4">
      <input type="text" name="hora" class="form-control" readonly  value="<?php $Hora = date("h:i:s"); echo $Hora;?>">
  </div>
</div> <br />

<button type="button" class="btn btn-danger"> <i class="fa fa-times"></i> Cancelar</button>
<button type="button" name="cadastrar" class="btn btn-success"> <i class="fa fa-user-plus"></i> Incluir</button>

  </div>
</div>
    </form>
</aside>





<?php include'bottom.php'; ?>