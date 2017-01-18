<html>
<head>
<body>
<title>Lista de fornecedor</title>

<form action="lista_Fornecedor_espelho.php" method="post">;
Nome:<input type="text" name="nome">
<input type="submit" value="Pesquisar">
</form>
<?php
include ("conexao.php");

$nome=$_POST["nome"];

echo "<table border='5' bgcolor='#00ccf'>";

if (isset($nome)) {
	$sql="select * from fornecedor where nomeforn like '%$nome%'";
	$rs=mysql_query($sql) or die ("erro ao selecionar" .$sql);
	while ($linha=mysql_fetch_array($rs)){

		$codforn=$linha["codforn"];
		$nomeforn=$linha["nomeforn"];
		$endforn=$linha["endforn"];
		$telforn=$linha["telforn"];
		
		$cnpjforn=$linha["cnpjforn"];
		
		
		echo "
		<tr>
		<td>Codigo:</td><td>$codforn</td><td>Nome:</td><td>$nomeforn</td>
		</tr>
		<tr>
		<td>Endereco:</td><td>$endforn</td><td>Telefone</td><td>$telforn></td>
		</tr>
		<tr>
		<td>CNPJ:</td><td>$cnpjforn</td>
		</tr>
		
		
		";
		
	}
}
?>
</table>
<a href="sistema_cadastro.php">Sistema de Cadastro</a>
</body>
</html>