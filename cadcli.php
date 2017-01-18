<html>
<head>
<title>Cadastro de Cliente</title>
</head>
<body>
<?php
include("conexao.php");
$nomecli = $_POST["nomecli"];
$endcli = $_POST["endcli"];
$telcli = $_POST["telcli"];
$celcli = $_POST["celcli"];
$cpfcli = $_POST["cpfcli"];
$usucli = $_POST["usucli"];
$senhacli = $_POST["senhacli"];
if ($nomecli== "") {
	echo "Campo Obrigatorio, <br> ";
	echo "<a href=cadcli.html> voltar para cadastro </a>";
	exit;
}
$sql = "insert into cliente (nomecli, endcli, telcli, celcli, cpfcli, usucli, senhacli) 
values ('$nomecli', '$endcli', '$telcli', '$celcli', '$cpfcli', '$usucli', '$senhacli')";
//echo $sql;
mysql_query($sql) or die ("Problema no cadastro de dados" .$sql);
echo "Dados cadastrados com sucesso";
?>
<br>
</br>
<a href="sistema_cadastro.php">Inicio</a>
<br>
</br>
<a href="cadcli.html">Continuar cadstrando</a>

</body>
</html>