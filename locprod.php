<?php
include ("conexao.php"); //incluir arquivo externo trazendo o seu conteudo

$codigo = $_POST["codigo"]; //a variavel recebe o valor da camada visual
$sql = "select * from produto where codprod = '$codigo'"; //seleciona todos os campos da tabela
//echo $sql;
$resultado = mysql_query($sql) or die ("erro no sql"); // o comando mysql_query dispara no banco de dados a consulta

$linha = mysql_fetch_array($resultado); //Trabalha trazendo os resultados da consulta
//As variaveis abaixo receberão os valores do banco de dados - consulta

$codigo = $linha["codprod"];
$nomeprod = $linha["nomeprod"];
$qtprod = $linha["qtprod"];
$valorprod = $linha["valorprod"];
$codfornprod = $linha["codfornprod"];

?>

<form action="movprod.php" method="post">
<input type="hidden" name="codprod" value="<?php echo $codigo;?>">
Nome: <input type="text" name="nomeprod" value="<?php echo $nomeprod;?>"><br>
Quantidade: <input type="text" name="qtprod" value="<?php echo $qtprod;?>"><br>
Valor: <input type="text" name="valorprod" value="<?php echo $valorprod; ?>"><br>
Codigo do Fornecedor: <input type="text" name="codfornprod" value="<?php echo $codfornprod; ?>"><br>


<input type="submit" value="atualizar" name="botao">
<input type="submit" value="excluir" name="botao">
<a href="sistema_cadastro.php">Voltar para o inicio</a></br>
</form>