<?php

include("conexao.php");

$usuario =$_POST["usuario"];
$senha =$_POST["senha"];
$cpf =$_POST["cpf"];

$sql="select * from cliente where usucli='$usuario' and senhacli ='$senha' and cpfcli = '$cpf'";
$rs = mysql_query ($sql) or die ($sql);

$linha = mysql_fetch_array($rs);
$codcli = $linha["codcli"];

if($codcli ==""){
	include("verifica_funcionario.php");
}else{
	setcookie("codcli", $codcli);
	include("verifica_pedido.php");
	header("location:lista_produto2.php");
}
?>
