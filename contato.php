<?php
$title = "Contato 📞";
include "header.php";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Contato - Mortelos </title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/css/_layout.scss">
    <link rel="stylesheet" href="Assets/css/_menu.scss">
    <link rel="stylesheet" href="Assets/css/_titles.scss">
    <link rel="stylesheet" href="Assets/css/_utils.scss">
    <link rel="stylesheet" href="Assets/css/style.scss">
</head>

<body>
    <br>
    <div class="container">
        <header>
            <div class="text-center">
                <img src="Assets/images/download.jpg" class="img-fluid logo">
                <div class="text-center">Mortelos</div>
            </div>
        </header>
        <main>
            <div>
                <h1>Contato</h1>
                <p>Fale com a nossa empresa</p>
                <div>
                    <form action="" method="get">
                        <div>
                            <label for="form_nome">Digite seu nome</label>
                            <input type="text" id="form_nome" name="nome">
                        </div>
                        <div>
                            <label for="form_email">Digite seu e-mail</label>
                            <input type="text" id="form_email" name="email">
                        </div>
                        <div>
                            <label for="form_mensagem">Digite sua mensagem</label>
                            <textarea id="form_mensagem" placeholder="Digite a mensagem completa" name="mensagem"></textarea>
                        </div>
                        <button type="submit">Enviar</button>
                        <input type="submit" value="Enviar">
                    </form>
                </div>
            </div>
        </main>
    </div>

    <script>src="Assets/js/scripts.js"</script>
</body>

</html>
<?php
include "footer.php";
?>