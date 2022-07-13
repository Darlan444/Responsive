
<?php
include 'conexao.php';

$row = array();

$sqlimg = "SELECT * FROM img";
$result = $mysql_db->query($sqlimg);
while ($data = mysqli_fetch_assoc($result)) {
    echo '
        <div class="img"> 
            <h1 class="h1">'.$data['titulo'].'</h1>
            <img class="imagens" src="./img/' . $data['nome'] . '" alt="Imagem">
        </div>
    ';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX</title>

    <link rel="stylesheet" href="./css/style.css"/>
</head>
<body>
    
</body>
</html>
