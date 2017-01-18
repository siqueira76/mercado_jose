<html>
<head>
<title>Cadastro de Funcionario</title>
</head>
<body>
<?php
include("conexao.php");
$nomefunc = $_POST["nomefunc"];
$endfunc = $_POST["endfunc"];
$telfunc = $_POST["telfunc"];
$celfunc = $_POST["celfunc"];
$cpffunc = $_POST["cpffunc"];
$usufunc = $_POST["usufunc"];
$senhafunc = $_POST["senhafunc"];
if ($nomefunc == "") {
	echo "Campo Obrigatório, <br> ";
	echo "<a href=cadfun.html> Voltar para cadastro </a>";
	exit;
}
$sql = "insert into funcionario (nomefunc, endfunc, telfunc, celfunc, cpffunc, usufunc, senhafunc) values
('$nomefunc', '$endfunc', '$telfunc', '$celfunc', '$cpffunc', '$usufunc', '$senhafunc')";
//echo $sql;
mysql_query($sql) or die ("Problema no cadastro de dados" .$sql); 
echo "Dados cadastrados com sucesso";
?>
<br>
</br>
<a href="sistema_cadastro.php">Inicio</a>
<br>
</br>
<a href="cadfunc.html">Continuar Cadastrando<a/>
</body>
</html>