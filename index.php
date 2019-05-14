<!DOCTYPE html>

<html>

<head>

	<title></title>

</head>

<body>
	<?php

		$cn = mysqli_connect("localhost","root","","LP4");

		if ($cn == null) {

			echo "Não foi possível conectar ao BD";

		} else{

			$tabela = mysqli_query($cn, "select * from alunos");
			$linha = mysqli_fetch_assoc($tabela);

			while ($linha != null) {

				echo $linha["matricula"]." ".$linha["nome"]."<br/>";
				$linha = mysqli_fetch_assoc($tabela);
			}

			mysqli_close($cn);
		}
	?>
</body>

</html>