
<!--HTML5 & PHP - ELETRONIC -
ANALISTA DESENVOLVEDOR  -CHRISTIAN DE ORNELLAS POSSIDONIO--->
<link rel="stylesheet" type="text/css" href="css/custom.css">


<?php

function __autoload($class_name) {
    require_once 'Controller/' . $class_name . '.php';
}
?>



<div id="ImprimirConteudo">
    <pre>
	<table class="table-cupon">
            <tr>
                <td><img src="img/logotipo.png" width="200"></td>  
                
            </tr>
            
            <tr>
            <td>CPNJ: 00.264.478/0001-29 <br />
                Av. 22 de maio, 6224<br />
                Nova Cidade - Itaboraí - RJ
                </td>  
            </tr>
            
            <tr>
                <td class="td-cupon"> Promoção : Dia dos namorados
                </td>  
            </tr>
            
            
            
</table>
</div>

<input type="button" name="imprimir" value="Imprimir" onclick="window.print();">

<!--<table class="table table-hover">
    
    <tr>
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
        <th>Cod</th>
    </tr>
    
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
        
        
    </tr>
    
</table>-->






       