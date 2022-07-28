<?php


function select()
{
    include './config/conexao.php';
    $row = array();

    $sqlimg = "SELECT * FROM img";
    $result = $mysql_db->query($sqlimg);

    while ($data = mysqli_fetch_assoc($result)) {
        echo '
        <div class="img"> 
            <h1 class="titulo">' . $data['titulo'] . '</h1>
            <img class="imagens" src="./img/' . $data['nome'] . '" alt="Imagem">
            <p class="conteudo">' . $data['conteudo'] . '</p>
        </div>
    ';
    }
}

?>
