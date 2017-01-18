<?php
include ("conexao.php"); //incluir arquivo externo trazendo o seu conteudo

$cnpj = $_POST["cnpj"]; //a variavel recebe o valor da camada visual
$sql = "select * from fornecedor where cnpjforn = '$cnpj'"; //seleciona todos os campos da tabela
//echo $sql;
$resultado = mysql_query($sql) or die ("erro no .$sql"); // o comando mysql_query dispara no banco de dados a consulta

$linha = mysql_fetch_array($resultado); //Trabalha trazendo os resultados da consulta
//As variaveis abaixo receberão os valores do banco de dados - consulta

$codforn = $linha["codforn"];
$nomeforn = $linha["nomeforn"];
$endforn = $linha["endforn"];
$telforn = $linha["telforn"];
$cnpjforn = $linha["cnpjforn"];

?>

<form action="movforn.php" method="post">
<input type="hidden" name="codforn" value="<?php echo $codforn;?>">
Nome: <input type="text" name="nomeforn" value="<?php echo $nomeforn;?>"><br>
Endereço: <input type="text" name="endforn" value="<?php echo $endforn;?>"><br>
Telefone: <input type="text" name="telforn" value="<?php echo $telforn; ?>"><br>
CNPJ: <input type="text" name="cnpjforn" value="<?php echo $cnpjforn; ?>"><br>


<input type="submit" value="atualizar" name="botao">
<input type="submit" value="excluir" name="botao">
<a href="sistema_cadastro.php">Voltar para o inicio</a></br>
</form>