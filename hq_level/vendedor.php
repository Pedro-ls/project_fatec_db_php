<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Vendedor</title>
</head>

<body>
    <form action="../lib/actions/vendedor/insert.php" method="POST">
        <input type="text" name="nome">
        <input type="text" name="endereco">
        <input type="text" name="cidade">
        <input type="text" name="estado">
        <input type="text" name="telefone">
        <input type="number" name="porc_comissao">

        <button type="submit">Cadastrar Vendedor</button>
    </form>
</body>

</html>