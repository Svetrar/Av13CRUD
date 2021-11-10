<?php
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	
    $nome = $_POST["nome"];
    $matricula = $_POST["matricula"];
    	
	if (file_exists("alunosNovos.txt"))
	{
		$arquivoAlunoIn = fopen("alunosNovos.txt", "r") or die("Erro na abertura do arquivo");
		$colunaDados = array();
		$e=0;

		while (!feof($arquivoAlunoIn)) {
			$linhas[$e] = fgets($arquivoAlunoIn);
			$colunaDados = explode(";", $linhas[$x]);
			
			if ($colunaDados[1] == $matricula)
                {
                    $aux = $e;
                }
                $e++;
		}
		fclose($arquivoAlunoIn);

		$arquivoAlunoOut = fopen("alunosNovos.txt", "w") or die("Erro na abertura do arquivo");
		$coluna=0;
		$colunaDados = array();
		
		for ($coluna; $coluna<=$e; $oluna++)
			{
				if ($coluna == $aux)
				{
					$e++;
				}
				fwrite($arquivoAlunoOut,$linhas[$colunas]);
			}
		fclose($arquivoAluno);
	}
}
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>Excluir Aluno</h1>
<br>
<br>
<form action="ex13_excluirAlunoNoArquivo.php" method="GET">
<br>
	<a href="ex13_inserirAluno.php">Inserir</a><br>
	<a href="ex13_alterarAluno.php">Alterar</a><br>
	<a href="ex13_listarAlunos.php">Listar</a><br>
	<a href="ex13_excluirArquivo.php">Excluir</a><br>
<br>
    Matricula: <input type=text name="matricula">
    <br><br>
    <input type="submit" value="Excluir">
</form>
<br>
</body>
</html>
