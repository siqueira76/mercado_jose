<?php
include ("conexao.php"); //Inclui Arquivo Externo trazendo o seu conteudo

$cpf = $_POST["cpf"]; //A variavel recebe o valor da camada visual
$sql = "select * from funcionario where cpffunc = '$cpf'"; //Selecionatodos os campos da tabela
//echo $sql;
$resultado = mysql_query($sql) or die ("erro no .$sql"); //O Comando mysql_query dispadra no banco de dados a consulta

$linha = mysql_fetch_array($resultado); //trabalha trazendo oresultado da consulta
//as variaveis abaixo receberão os valores do banco de dados -consulta

$codfunc = $linha["codfunc"];
$nomefunc = $linha["nomefunc"];
$endfunc = $linha["endfunc"];
$telfunc = $linha["telfunc"];
$celfunc = $linha["celfunc"];
$cpffunc = $linha["cpffunc"];
$usufunc = $linha["usufunc"];
$senhafunc = $linha["senhafunc"];

?>

<form action="movfunc.php" method="post">
<input type="hidden" name="codfunc" value="<?php echo $codfunc;?>">
Nome: <input type="text" name="nomefunc" value="<?php echo $nomefunc;?>"><br>
Endereço: <input type="text" name="endfunc" value="<?php echo $endfunc;?>"><br>
Telefone: <input type="text" name="telfunc" value="<?php echo $telfunc;?>"><br>
Celular: <input type="text" name="celfunc" value="<?php echo $celfunc;?>"><br>
CPF: <input type="text" name="cpffunc" value="<?php echo $cpffunc;?>"><br>
Usuario: <input type="text" name="usufunc" value="<?php echo $usufunc;?>"><br>
Senha: <input type="text" name="senhafunc" value="<?php echo $senhafunc;?>"><br>

<input type="submit" value="atualizar" name="botao">
<input type="submit" value="excluir" name="botao">
<a href="sistema_cadastro.php">voltat para o inicio</a><br>
</form>
