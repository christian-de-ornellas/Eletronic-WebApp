
<!--HTML5 & PHP - ELETRONIC -
ANALISTA DESENVOLVEDOR  -CHRISTIAN DE ORNELLAS POSSIDONIO--->
<?php   require_once('header.php');   ?>

<?php   function __autoload($class_name){
    
       require_once ('Controller/') .$class_name. '.php';
    } 
    
    $cliente = new Cliente;
  ?>


<aside class="asside-right">
    <div class="panel panel-default">
        <div class="panel-heading">Gerador de cupon</div>
        <div class="panel-body">

<table class="table table-hover">
  
     
    <tr>
        <th><?php  echo $value->id;  ?></th>
        <th>Cod</th>
        <th>Cod</th>
        <th>Cod</th>
        <th>Cod</th>
        <th>Cod</th>
        <th>Cod</th>
        <th>Cod</th>
        <th>Cod</th>
        <th>Cod</th>
        <th>Cod</th>
        <th>Cod</th>
    </tr>
     <?php  foreach ($cliente->findAll() as $key=>$value): ?>
    <tr>
        <td>#</td>
        <td>#</td>
        <td>#</td>
        <td>#</td>
        <td>#</td>
        <td>#</td>
        <td>#</td>
        <td>#</td>
        <td>#</td>
        <td>#</td>
        <td>#</td>
        <td>#</td>
      
             </div>

        </div> <br />
    </tr>
      <?php endforeach; ?>
</table>
  </div>
</div>
