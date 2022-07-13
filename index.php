<link rel="stylesheet" href="./css/style.css"/>
<?php
include 'conexao.php';

$row = array();

$sqlimg = "SELECT * FROM img";
$result = $mysql_db->query($sqlimg);
while ($data = mysqli_fetch_assoc($result)) {
    echo '
        <div class="portfolio-item "> 
            <img class="imagens" src="./img/' . $data['nome'] . '" alt="Imagem">
        </div>
    ';
}
?>
