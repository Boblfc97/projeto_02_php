<head>
    <link rel="stylesheet" href="estilo.css">
</head>
<?php
    include "verificar_logado.php";
?>
<h1>
    Gerenciamento de Inventários
</h1>

<?php
    include "conexao.php";
    //1º Passo - Comando SQL
    $sql = "SELECT * FROM tb_inventarios";

    //2º Passo - Preparar a conexão
    $consultar = $pdo->prepare($sql);

    //3º Passo - Tentar executar e mostrar resultados
    try{
        $consultar->execute();
        $resultados = $consultar->fetchAll(PDO::FETCH_ASSOC);
        echo "<div id='materiais'>";
        foreach($resultados as $item){
            $codigo = $item['codigo'];
            $descricao =$item['descricao'];
            $setor = $item['setor'];
            $categoria = $item['categoria'];

            echo "
            <div id='materias'>
                <div class='cartoes'>
                <h3>Nº $codigo</h3>
                <p>$descricao</p>
                <p>Setor: $setor</p>
                <p>Categoria: $categoria</p>
                <button>✏️ Editar</button>
                <button>🗑️ Deletar</button>
                </div>
            </div>
            ";
        }
        echo "</div>";
    }catch(PDOException $erro){
        echo "Falha ao Consultar resultados".$erro->getMessage();
    }
?>