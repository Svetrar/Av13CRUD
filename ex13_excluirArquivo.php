<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $matricula = $_POST["matricula"];
    $dtNasc = $_POST["dtNasc"];
    $email = $_POST["email"];
    $cpf = $_POST["cpf"];
    $fone = $_POST["telefone"];
    $endereco = $_POST["endereco"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $cep = $_POST["cep"];
	$colunaDados = array();

    $arquivoAlunoIn = fopen("alunosNovos.txt", "r") or die("Erro na abertura do arquivo");
    while (!feof($arquivoAlunoIn)) {
        $linhas[] = fgets($arquivoAlunoIn);
    }
    fclose($arquivoAlunoIn);

    $arquivoAlunoOut = fopen("alunosNovos.txt", "w") or die("Erro na abertura do arquivo");

    foreach ($linhas as $linha) {
        $colunaDados = explode(";", $linha);
        if ($colunaDados[1] == $matricula) 
		{
            $txt = "";
        } 
        fwrite($arquivoAlunoOut, $txt);
    }
    fclose($arquivoAlunoOut);
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
    Matricula: <input type=text name="matricula">
    <br><br>
    <input type="submit" value="Excluir">
</form>
<br>
</body>
</html>