<html>
<head>
<title>Cadastramento de Produto</title>
</head>
<body>
<?php
include ("conexao.php");
$nomeprod = $_POST["nomeprod"];
$qtprod = $_POST["qtprod"];
$valorprod = $_POST["valorprod"];
$codfornprod = $_POST["codfornprod"];

if ($nomeprod =="") {
	echo "Campo obrigatorio, <br>";
	echo "<a herf=cadprod.html> voltar para cadastro </a>";
	exit;
}

$sql = "insert into produto (nomeprod, qtprod, valorprod, codfornprod) values
('$nomeprod', '$qtprod', '$valorprod', '$codfornprod')";
//echo $sql;
mysql_query($sql) or die ("Problema no cadastro de dados" .$sql);
echo "Dados cadstrados com sucesso";
?>
<br>
</br>
<a href="sistema_cadastro.php">Inicio</a>
<br>
</br>
<a href="cadprod.html">Continuar Cadastrando</a>
</body>
</html>