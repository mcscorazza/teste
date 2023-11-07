<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>..::TESTE::..</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="box">
        <?php
            for($i = 0;$i<10;$i++) {
                echo "<h4>Contagem: ".$i."</h4><br>";
            };
        ?>
        <form action="POST">
            <div class="div-input">
                <label for="name">Nome:</label>
                <input type="text" name="name" id="name">
            </div>
            <div class="div-input">
                <label for="email">E-mail:</label>
                <input type="email" name="email" id="email">
            </div>
            <div class="div-input">
                <label for="pass">Senha:</label>
                <input type="password" name="pass" id="pass">
            </div>
        </form>
    </div>
</body>
</html>