<?php

    require_once '../config/conexao.php';

    if (isset($_POST['submit'])) {

        $titulo = ($_POST['title']);
        $nome = ($_POST['nomeArq']);
        $conteudo = ($_POST['content']);

        $sql = "INSERT INTO img(nome, titulo, conteudo) VALUES('$nome','$titulo','$conteudo')";
        $new_sql = mysqli_query($mysql_db, $sql);

    header('Location: ../index.php');
    

    
    }
    // Redireciona se feito o anuúncio
    if (mysqli_affected_rows($mysql_db) != 0) {
        echo 'Anúncio realizado com Sucesso!';
        header('location: ../index.php');
    } else {
        echo "Não foi possivel cadastrar";
    }
?>
