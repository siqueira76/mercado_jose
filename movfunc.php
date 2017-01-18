<html>
<head>
<title>movfunc.php</title>
</head>

<body>
<?php
require("conexao.php");

$codfunc = $_POST["codfunc"];
$nomefunc = $_POST["nomefunc"];
$endfunc = $_POST["endfunc"];
$telfunc = $_POST["telfunc"];
$celfunc = $_POST["celfunc"];
$cpffunc = $_POST["cpffunc"];
$usufunc = $_POST["usufunc"];
$senhafunc = $_POST["senhafunc"];

$atualizar=$_POST["botao"]; //"Atualizar"
$excluir=$_POST["botao"]; //"Excluir"

if ($atualizar=="atualizar"){
$sql="update funcionario set nomefunc='$nomefunc', endfunc='$endfunc', telfunc='$telfunc', celfunc='$celfunc', cpffunc='$cpffunc', usufunc='$usufunc', senhafunc='$senhafunc' where codfunc=$codfunc";
//echo $sql
mysql_query($sql) or die ("erro ao atualizar os dados" .$sql);

echo"<script>alert('Dados atualizados com sucesso!!!');</script>";
}

if ($excluir=="excluir"){

$sql="delete from funcionario where codfunc=$codfunc";
mysql_query($sql) or die ("Erro ao excluir dados" .mysql_erro());
echo"<script>alert(('Dados excluidos com sucesso!!!');</script>";

}
?>

<a href="sistema_cadastro.php">Sistema de Cadastro</a>

</body>

</html>