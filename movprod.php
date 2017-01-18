<html>
<head>
<title>movprod.php</title>
</head>

<body>
<?php
require("conexao.php");

$codprod = $_POST["codprod"];
$nomeprod = $_POST["nomeprod"];
$qtprod = $_POST["qtprod"];
$valorprod = $_POST["valorprod"];
$codfornprod = $_POST["codfornprod"];


$atualizar=$_POST["botao"]; //"Atualizar"
$excluir=$_POST["botao"]; //"Excluir"

if ($atualizar=="atualizar"){
$sql="update produto set nomeprod='$nomeprod', qtprod='$qtprod', valorprod='$valorprod', codfornprod='$codfornprod' where codprod=$codprod";
//echo $sql
mysql_query($sql) or die ("erro ao atualizar os dados" .$sql);

echo"<script>alert('Dados atualizados com sucesso!!!');</script>";
}

if ($excluir=="excluir"){

$sql="delete from produto where codprod=$codprod";
mysql_query($sql) or die ("Erro ao excluir dados" .mysql_erro());
echo"<script>alert(('Dados excluidos com sucesso!!!');</script>";

}
?>

<a href="sistema_cadastro.php">Sistema de Cadastro</a>

</body>

</html>