<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Minha Loja.com</title>
    </head>
    <body>
        <?php
            include_once("valida-sentinela-adm.php");
        ?>

        <table>
            <tr>
                <td width='1000'>
                    <h1><center>Minha Loja.com</center></h1>
                </td>
                <td>
                    <h2>Olá, Administrador</h2>
                    <a href="../logout.php">Sair</a>
                </td>
            </tr>
        </table>
        
        
        <table>
            <tr height='30'>
                <th width='350'><h3><a href='index-area-restrita-adm.php'>Home</a></h3></td>
                <th width='350'><h3>Clientes</h3></td>
                <th width='350'><h3><a href='form-cadastro-produto.php'>Produtos</a></h3></td>
                <th width='350'><h3>Vendas</h3></td>
            </tr>
        </table>
        <h1>Cadastro de Produtos</h1>
        <form name='cadastro-produtos' enctype="multipart/form-data" 
            action='cadastrar-produto.php' method='post'>
            <label>Descrição:</label>
            <input type='text' name='txtdesc'>
            <br>
            <label>Valor:</label>
            <input type='text' name='txtvalor'>
            <br>
            <label>Qtde em estoque:</label>
            <input type='text' name='txtqtde'>
            <br>
            <label>Foto:</label>
            <input type="file" id="foto" name="foto" accept="image/*">
            <br>
            <input type='submit' value='Cadastrar'>
        </form>
</html>  