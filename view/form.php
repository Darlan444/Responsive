<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>

    <link rel="shortcut icon" href="../img/foguete.svg" type="image/x-icon">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="bodyForm">

    <form class="form" method="POST" action="../model/publicar.php">

        <h1 class="h1-Form">PUBLICAR</h1>

        <div class="form-div">

            <input class="inputNomeArq" type="text" name="nomeArq" id="nomeArq" required>
            <label class="labelNomeArq" for="nomeArq">Nome do Arquivo</label>

        </div>

        <div class="form-div">

            <input class="inputTitle" type="text" name="title" id="title" required>
            <label class="labelTitle" for="title">Título</label>

        </div>

        <div class="form-div">

            <textarea class="inputContent" type="text" name="content" id="content" maxlength="800"></textarea>
            <label class="labelContent" for="content">Conteúdo</label>

        </div>

        <button class="btnPublicar" type="submit" name="submit" id="submit">PUBLICAR</button>
        <a class="redirectForm" href="../index.php">Veja os já Publicados</a>

    </form>
</body>

</html>