<html>
<head>
<title>movforn.php</title>
</head>

<body>
<?php
require("conexao.php");

$codforn = $_POST["codforn"];
$nomeforn = $_POST["nomeforn"];
$endforn = $_POST["endforn"];
$telforn = $_POST["telforn"];
$cnpjforn = $_POST["cnpjforn"];


$atualizar=$_POST["botao"]; //"Atualizar"
$excluir=$_POST["botao"]; //"Excluir"

if ($atualizar=="atualizar"){
$sql="update fornecedor set nomeforn='$nomeforn', endforn='$endforn', telforn='$telforn', cnpjforn='$cnpjforn' where codforn=$codforn";
//echo $sql
mysql_query($sql) or die ("erro ao atualizar os dados" .$sql);

echo"<script>alert('Dados atualizados com sucesso!!!');</script>";
}

if ($excluir=="excluir"){

$sql="delete from fornecedor where codforn=$codforn";
mysql_query($sql) or die ("Erro ao excluir dados" .mysql_erro());
echo"<script>alert(('Dados excluidos com sucesso!!!');</script>";

}
?>

<a href="sistema_cadastro.php">Sistema de Cadastro</a>

</body>

</html>