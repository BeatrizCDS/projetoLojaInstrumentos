<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Minha Loja.com</title>
    </head>
    <body>
        <?php
            include_once("valida-sentinela-cliente.php");
        ?>

        <table>
            <tr>
                <td width='1000'>
                    <h1><center>Minha Loja.com</center></h1>
                </td>
                <td>
                    <h2>Olá, Cliente</h2>
                    <a href="../logout.php">Sair</a>
                </td>
            </tr>
        </table>
        
        <table>
            <tr height='30'>
                <th width='350'><h3><a href='index.php'>Home</a></h3></td>
                <th width='350'><h3>Produtos</h3></td>
                <th width='350'><h3>Carrinho</h3></td>
                <th width='350'><h3>Contato</h3></td>
            </tr>
        </table>
        <h1>Você está na Área Restrita do Cliente, na página principal...</h1>
</html>  