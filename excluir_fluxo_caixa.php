<?php 
include("conexao.php");
$id = $_GET['id']; 
$sql = "DELETE from fluxo_caixa WHERE id=$id";


$result = mysqli_query($con,$sql);
    if($result){
        echo "Dados Excluidos com sucesso!<br>";}
    else{
        echo "Erro ao alterar dados: ".mysqli_error($con)."<br>";}
?>
<a href="index.php">Voltar</a>