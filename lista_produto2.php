<?php

include ("conexao.php");

?>

<html>

<head>
<title>Lista de Produtos</title>

<script language = "javascript">

	<!--<td bgcolor = '$cor'><img src = '$fotoprod' width = '25' height='23' alt='$fotoprod' on MuseOver='aumenta(this)' onMouseOut='diminui(this)'></td>
	function aumenta(obj){
		obj.height=obj.heiht*5;
		obj.width=obj.width*5;
	}
	
	function diminui(obj){
		obj.height=obj.heitht/5;
		obj.width=obj.width/5;
	}

	-->
</script>

	
</head>
<body>

<h2><font color="#0000ff"><center>Lista de Produtos</center></font></h2>

<table align = "center">

	<tr>
		<td><font size="2"><b>Nome:</b></td>
		<td><font size="2"><b>Quantidade:</b></td>
		<td><font size="2"><b>Valor:</b></td>
		<td><font size="2"><b>Codigo do Fornecedor:</b></td>
	</tr>
	
<?php

	$sql="select * from produto";
	$rs=mysql_query($sql) or die ($sql);
	$contador=0;
	
	while ($linha=mysql_fetch_array($rs)){
		$contador++;
		if($contador%2 == 0){
			$cor="#009977";
		}else{
			$cor="#ffcc99";
		}
		$codprod=$linha["codprod"];
		$nomeprod=$linha["nomeprod"];
		$qtprod=$linha["qtprod"];
		$valorprod=$linha["valorprod"];
		
		//$fotoprod=$linha["fotoprod"];
		
		echo "
			<tr bgcolor='$cor'>
			<td><a href='produto_selecionado.php?codprod=$codprod'>$nomeprod</a></td>
				
				<td>$qtprod</td>
				<td>$valorprod</td>
				<td>$codprod</td>
				
			</tr>
		";
	}

?>

</table>


</body>

</html>