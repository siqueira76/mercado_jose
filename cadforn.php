<html>
<head>
<title>Cadastro de Fornecedor</title>
</head>
<body>
<?php
include ("conexao.php");
$nomeforn = $_POST["nomeforn"];
$endforn = $_POST["endforn"];
$telforn = $_POST["telforn"];
$cnpjforn = $_POST["cnpjforn"];

if ($nomeforn == "") {
	echo "Campo obrigatorio, <br> ";
	echo "<a href=cadforn.html> voltar para cadastro </a>";
	exit;
}
$sql = "insert into fornecedor (nomeforn, endforn, telforn, cnpjforn) 
values ('$nomeforn', '$endforn', '$telforn', '$cnpjforn')";
//echo $sql;
mysql_query($sql) or die ("Problema no cadastro de dados" .$sql);
echo "Dados cadastrados com sucesso";
?>
<br>
</br>
<a href="sistema_cadastro.php">Inicio</a>
<br>
</br>
<a href="cadforn.html">Continuar Cadastrando</a>
</body>
</html>