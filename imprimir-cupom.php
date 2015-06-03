
<!--Script serve para poder abrir a tela de impressão assim que carregar a página -->

<script type="text/javascript">  function chromePrint(){
print();
}
function chromePrintDelay(){
setTimeout("print()", 500);
}
var browserName=navigator.appName;
if (browserName=="Microsoft Internet Explorer")
{
window.print();
}
else
  {
  if (browserName=="Netscape") //google chrome app.Name
  {
  chromePrintDelay();
  }
  else {
   window.onload = window.print; // helps with Opera
   }
   }  </script>
<!--HTML5 & PHP - ELETRONIC -
ANALISTA DESENVOLVEDOR  -CHRISTIAN DE ORNELLAS POSSIDONIO--->
<link rel="stylesheet" type="text/css" href="css/custom.css">
<link rel="alternate" type="text/css" midia="print" href="css/imprimir.css">
<?php
function __autoload($class_name) {
    require_once 'Controller/' . $class_name . '.php';
}
?>

<?php $gerador = new Cupons;?>

<center>
<table class="table-cupon"> 
    <tr>
        <td><center><img src="img/marcar-maza.png" width="200"></center></td>                 
    </tr
    <?php foreach ($gerador->ImprimirCupom() as $key => $value): ?>
    <tr>
        <td class="txtcnpj"><p>
        CNPJ: 00.264.478/0001-29 
        Av. 22 de maio, 6224
        Nova Cidade - Itaboraí - RJ </p></td></tr>
    <tr>
        <td class="bordas"><p>
        <b>Nome: <?php echo $value->nome_cliente; ?> <?php echo $value->sobrenome_cliente; ?><br>
            E-mail: <?php echo $value->email_cliente; ?> <br>
            Rg:  <?php echo $value->rg_cliente; ?></p></b>
    </td>
    
    </tr>           
    <tr>
        <td class="bordas">
        Premio : Um veículo FIAT PALIO FIRE 1.0 - com a cor Branco 02 portas 2014/2015 0km.<br />
        Promoção válida até 01/04/2015.  <br />
        O Sorteio será realizado no dia 02/04/2015 às 16h. <br />
        <b> Número do cupom: <?php echo $value->id ?> </b>
        </td>
    </tr>    
    <?php endforeach;   ?>
</table><br />


<!--<div id="invisivel">
    <input type="button" name="imprimir" value="Imprimir" onclick="window.print();">
</div>
</center> -->
