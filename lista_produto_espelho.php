<html>
<head>
<body>
<title>Lista de Produto</title>

<form action="lista_produto_espelho.php" method="post">;
Nome:<input type="text" name="nome">
<input type="submit" value="Pesquisar">
</form>
<?php
include ("conexao.php");

$nome=$_POST["nome"];

echo "<table border='5' bgcolor='#00ccf'>";

if (isset($nome)) {
	$sql="select * from produto where nomeprod like '%$nome%'";
	$rs=mysql_query($sql) or die ("erro ao selecionar" .$sql);
	while ($linha=mysql_fetch_array($rs)){

		$codprod=$linha["codprod"];
		$nomeprod=$linha["nomeprod"];
		$qtprod=$linha["qtprod"];
		$valorprod=$linha["valorprod"];
		
		$codfornprod=$linha["codfornprod"];
		
		
		echo "
		<tr>
		<td>Codigo:</td><td>$codprod</td><td>Nome:</td><td>$nomeprod</td>
		</tr>
		<tr>
		<td>Quantidade:</td><td>$qtprod</td><td>Valor:</td><td>$valorprod</td>
		</tr>
		<tr>
		<td>Codigo Fornecedor:</td><td>$codfornprod</td>
		</tr>
		
		
		
		";
		
	}
}
?>
</table>
<a href="sistema_cadastro.php">Sistema de Cadastro</a>
</body>
</html>