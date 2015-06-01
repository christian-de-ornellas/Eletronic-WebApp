<?php
/**
 * Description of Cupons
 *
 * CLASS PHP - ELETRONIC -
   ANALISTA DESENVOLVEDOR  -CHRISTIAN DE ORNELLAS POSSIDONIO 
 */
require_once 'G:\ChristianWebDeveloper\server\htdocs\maza-box\Controller\Crud.php';

class Cupons extends Crud {
    
protected  $table= 'cupons';
private $cliente_id; 		 
private $promocao_id; 		  	 
private $notafiscal; 		  	 
private $dt_compra; 	  	  	  	 
private $valor_compra; 	  	  	  	 
private $data_cupons; 	  	  	  	 
private $hora_cupons; 	  	  	  	 	  	  	  	 
private $obs_cupon; 	  	  	  	 
private $aceitar_email; 

function getCliente_id() {
    return $this->cliente_id;
}

function getPromocao_id() {
    return $this->promocao_id;
}

function getNotafiscal() {
    return $this->notafiscal;
}

function getDt_compra() {
    return $this->dt_compra;
}

function getValor_compra() {
    return $this->valor_compra;
}

function getData_cupons() {
    return $this->data_cupons;
}

function getHora_cupons() {
    return $this->hora_cupons;
}

function getObs_cupon() {
    return $this->obs_cupon;
}

function getAceitar_email() {
    return $this->aceitar_email;
}

function setCliente_id($cliente_id) {
    $this->cliente_id = $cliente_id;
}

function setPromocao_id($promocao_id) {
    $this->promocao_id = $promocao_id;
}

function setNotafiscal($notafiscal) {
    $this->notafiscal = $notafiscal;
}

function setDt_compra($dt_compra) {
    $this->dt_compra = $dt_compra;
}

function setValor_compra($valor_compra) {
    $this->valor_compra = $valor_compra;
}

function setData_cupons($data_cupons) {
    $this->data_cupons = $data_cupons;
}

function setHora_cupons($hora_cupons) {
    $this->hora_cupons = $hora_cupons;
}

function setObs_cupon($obs_cupon) {
    $this->obs_cupon = $obs_cupon;
}

function setAceitar_email($aceitar_email) {
    $this->aceitar_email = $aceitar_email;
}


public function insert(){

    
    $sql="INSERT INTO $this->table (cliente_id, promocao_id, notafiscal, dt_compra, valor_compra, data_cupons, hora_cupons, obs_cupon, aceitar_email)"
    . "VALUES(:cliente_id, :promocao_id, :notafiscal, :dt_compra, :valor_compra, :data_cupons, :hora_cupons, :obs_cupon, :aceitar_email)";
    $stmt = DB::prepare($sql);
    $stmt->bindParam(':cliente_id', $this->cliente_id);
    $stmt->bindParam(':promocao_id', $this->promocao_id);
    $stmt->bindParam(':notafiscal', $this->notafiscal);
    $stmt->bindParam(':dt_compra', $this->dt_compra);
    $stmt->bindParam(':valor_compra', $this->valor_compra);
    $stmt->bindParam(':data_cupons', $this->data_cupons);
    $stmt->bindParam(':hora_cupons', $this->hora_cupons);
    $stmt->bindParam(':obs_cupon', $this->obs_cupon);
    $stmt->bindParam(':aceitar_email', $this->aceitar_email);
    return $stmt->execute();
}

    public function update($id) {
        
    }
//FROM cupons
//INNER JOIN 
//clientes ON   cupons.cliente_id = clientes.id
//INNER JOIN 
//promocoes ON   cupons.promocao_id = promocoes.id

    public function relcupom(){
        
        $sql="SELECT * FROM $this->table INNER JOIN clientes ON $this->table.cliente_id = clientes.id INNER JOIN promocoes ON $this->table ON cupons.promocao_id = promocoes.id";
        $stmt = DB::prepare($sql);
        $stmt->execute;
        return $stmt->relcupom(); 
    }

}
