<html>
<head>
<title>movcli.php</title>
</head>

<body>
<?php
require("conexao.php");

$codcli = $_POST["codcli"];
$nomecli = $_POST["nomecli"];
$endcli = $_POST["endcli"];
$telcli = $_POST["telcli"];
$celcli = $_POST["celcli"];
$cpfcli = $_POST["cpfcli"];
$usucli = $_POST["usucli"];
$senhacli = $_POST["senhacli"];

$atualizar=$_POST["botao"]; //"Atualizar"
$excluir=$_POST["botao"]; //"Excluir"

if ($atualizar=="atualizar"){
$sql="update cliente set nomecli='$nomecli', endcli='$endcli', telcli='$telcli', celcli='$celcli', cpfcli='$cpfcli', usucli='$usucli', senhacli='$senhacli' where codcli=$codcli";
//echo $sql
mysql_query($sql) or die ("erro ao atualizar os dados" .$sql);

echo"<script>alert('Dados atualizados com sucesso!!!');</script>";
}

if ($excluir=="excluir"){

$sql="delete from cliente where codcli=$codcli";
mysql_query($sql) or die ("Erro ao excluir dados" .mysql_erro());
echo"<script>alert(('Dados excluidos com sucesso!!!');</script>";

}
?>

<a href="sistema_cadastro.php">Sistema de Cadastro</a>

</body>

</html>