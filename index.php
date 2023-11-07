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
            <div>
                <label for="name"></label>
                <input type="text" name="name" id="name">
            </div>
            <div>
                <label for="email"></label>
                <input type="email" name="email" id="email">
            </div>
            <div>
                <label for="pass"></label>
                <input type="password" name="pass" id="pass">
            </div>
        </form>
    </div>
</body>
</html>