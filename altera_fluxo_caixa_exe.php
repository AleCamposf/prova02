<?php 
        include('conexao.php');
        $id = $_GET['id'];
        $sql = "SELECT * FROM fluxo_caixa where id=$id";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Altera Fluxo Caixa ex</title>
</head>
<body>

    <h1>Alteração de Cadastro dos Fluxo de Bancos</h1>

    <form action="altera_fluxo_caixa_exe.php" method="post">
        <input name="id" type="hidden" 
        value="<?php echo $row['id']?>"> <!--php -->

        <div>

            <label for="data">Data: </label>
            <input type="date" name="data" id="data" 
            value="<?php echo $row['data']?>"> <!--php -->

        </div>
        <div>
            <label for="tipo">Tipo: </label>
            <!-- Opção check -->
            <label for="tipo">-Entrada-</label>
            <input type="radio" name="tipo" value="entrada" id="tipo" <?php if($row['tipo'] == 'entrada'){echo "checked";}?>>
            <label for="tipo">-Saida-</label>
            <input type="radio" name="tipo" value="saida" id="tipo" <?php if($row['tipo'] == 'saida'){echo "checked";}?>>
        </div>

        <div>
            <label for="valor">Valor: </label>
            <input type="number" name="valor" id="valor" 
            value="<?php echo $row['valor']?>">
        </div>

        <div>
            <label for="hist">Histórico: </label>
            <input type="text" name="hist" id="hist" 
            value="<?php echo $row['historico']?>">
        </div>

        <!-- Opção check -->
        <div>
            <label for="cheque">Cheque: </label>
            <select name="cheque">
                <option value="sim" <?php if($row['cheque'] == 'sim'){echo "selected";}?>>Sim</option>
                <option value="nao" <?php if($row['cheque'] == 'nao'){echo "selected";}?>>Não</option>
            </select>
  
        </div>
        
        <input type="submit" value="Salvar"> 
    </form>
    <a href="index.php">back</a>
</body>
</html>