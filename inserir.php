<?php
    include "conexao.php";

$desc = $_GET['descricao_digitada'];
$setor = $_GET['setor_selecionada'];
$cat = $_GET['categoria'];

//1º Passo - Comando SQL
$sql = "INSERT INTO tb_inventarios
        (descricao, setor, categoria) VALUES
        ('$desc', '$setor', '$cat')";

//2º Passo - Preparar a conexão
$inserir = $pdo->prepare($sql);

//3º Passo - tentar executar
try{
    $inserir->execute();
    echo "
        <script>
            alert('Cadastrado com Sucesso!');
        </script>
    ";
}catch(PDOException $erro){
    echo "Falha ao inserir!".$erro->getMessage();
}
?>