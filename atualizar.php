<?php
include "conexao.php";
include "verificar_logado.php";

$cod = $_GET['codigo'];
$desc = $_GET['descricao_digitada'];
$setor = $_GET['setor_selecionada'];
$cat = $_GET['categoria'];

//1º Passo - Comando SQL
$sql = "UPDATE tb_inventarios SET
        descricao='$desc', setor='$setor',
        categoria='$cat' WHERE codigo='$cod'
        ";

//2º Passo - Preparar a conexão + SQL
$atualizar = $pdo->prepare($sql);

//3º Passo - Tentar Executar
try{
    $atualizar->execute();
    echo "<script>alert('Atualizado!');</script>";
}catch(PDOException $erro){
    echo "Falha ao Atualizar!".$erro->getMessage();
}

?>