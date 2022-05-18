<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include("./../lib/components/navigation.php"); ?>
    <main>
        <table>
            <th>
                <td colspan="6">Vendedores</td>
            </th>
            <tbody>
                <div>
                    <?php
                        foreach(){
                    ?>
                    <tr>
                        <td><?php echo $row["nome"] ?></td>
                        <td><?php echo $row["endereco"] ?></td>
                        <td><?php echo $row["cidade"] ?></td>
                        <td><?php echo $row["estado"] ?></td>
                        <td><?php echo $row["telefone"] ?></td>
                        <td><?php echo $row["porc_comissao"] ?></td>
                    </tr>
                    <?php } ?>
                </div>
            </tbody>
        </table>
    </main>
</body>

</html>