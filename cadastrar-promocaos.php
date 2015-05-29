<?php include'header.php'; ?>
<?php

function __autoload($class_name) {
    require'Controller/' . $class_name . '.php';
}
?>

<aside class="asside-right">
    <div class="panel panel-default">
        <div class="panel-heading">Preencha o formulário de promoção</div>
        <div class="panel-body">
            <?php
            if (isset($_POST['cadastrar'])):


                $promocoes = new Promocao();

                $promocao = trim($_POST["promocao"]);
                $data = trim($_POST["data"]);
                $hora = trim($_POST["hora"]);
                
//                if ($promocao == "") {
//                    echo "Erro, o campo promoção precisa ser preenchido! <a href='cadastrar-promocaos'>tentar novamente</a>";
//                    return false;
//                }elseif ($promocao  < 3){                   
//                     echo "Erro, o campo promoção precisa ter no maximo 3 caracteres! <a href='cadastrar-promocaos'>tentar novamente</a>";
//                    return false;   
//                }]
                
                $promocoes->setPromocao($promocao);
                $promocoes->setData($data);
                $promocoes->setHora($hora);
                
                if ($promocoes->insert()) {
                    echo"A Promoção ${promocao} Foi Inserida Com Sucesso";
                } else {
                    echo"A ${promocao} Não Pode Ser Inserida!";
                }
            endif;
            ?>
            <form action="" method="post">
                <div class="row">
                    <div class="col-xs-4">
                        <input type="text" name="promocao" class="form-control" placeholder="Nome da promoção">
                    </div>
                    <div class="col-xs-4">
                        <input type="text" name="data" class="form-control" readonly value="<?php
                        $datas = date("d/m/Y");
                        echo $datas;
                        ?>">
                    </div>
                    <div class="col-xs-4">
                        <input type="text" name="hora" class="form-control" readonly  value="<?php
                               $Horas = date("h:i:s");
                               echo $Horas;
                               ?>">
                    </div>
                </div> <br />

                <button type="reset" class="btn btn-danger"> <i class="fa fa-times"></i> Cancelar</button>
                <button type="submit" name="cadastrar" class="btn btn-success"> <i class="fa fa-user-plus"></i> Incluir</button>

        </div>
    </div>
</form>
</aside>





<?php include'bottom.php'; ?>