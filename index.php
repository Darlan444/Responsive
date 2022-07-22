<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/foguete.svg" type="image/x-icon">
    <title>SPACE</title>

    <link rel="stylesheet" href="./css/style.css" />
</head>

<body>

    <div class="left">

        <h1 class="tituloaside">JAMES WEBB</h1>
        <img class="imgwebb" src="./img/webb.png" alt="JAMES WEBB">
        <p class="textaside">O Telescópio Espacial James Webb
            é um grande telescópio espacial que usa a tecnologia infravermelho
            com um espelho primário de 6,5 metros de diâmetro.</p>
        <p class="textaside">O James Webb é o sucessor do Hubble, ele
            é capaz de mostrar como se formaram as primeiras galáxias
            após o Big Bang.</p>
        <footer class="nota">Foi lançado em 25 de dezembro de 2021 pelo foguete Ariane V.</footer>


    </div>

    <div class="right">
        <h1 class="tituloaside">HUBBLE</h1>
        <img class="imghubble" src="./img/hubble.png" alt="HUBBLE">
        <p class="textaside">O Telescópio Espacial Hubble é um telescópio refrator com um espelho primário de 2,4 m de diâmetro.</p>
        <p class="textaside">O Hubble tem como objetico observar a estrutura de estrelas e galáxias e estudar suas formação e evolução. Ele orbita a cerca de 547 quilômetros acima da Terra.</p>
        <footer class="nota">Foi lançado em 24 de abril de 1990 pelo ônibus espacial Discovery.</footer>
    </div>


    <?php
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
    ?>

</body>

</html>
