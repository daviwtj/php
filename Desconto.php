<DOCTYPE html>
  <html lang="pt-br">
<head>
  <meta charset = "UTF-8">
    <title>Calculadora Porcentagem</title>
</head>
<body>  
    <h1>Desconto 27%</h1>
    <form method="post">
        Valor1: <input name="valor1" /><br />
        <input type="submit" />
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $var1 = $_REQUEST["valor1"];
        $var2 = 0.73;
        $desconto = ($var1/ $var2);
        echo "Valor total do desconto: " . $desconto . "<br />";
    }
    ?>
</body>
</html>
