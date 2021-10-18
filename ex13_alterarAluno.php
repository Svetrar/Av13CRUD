<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>Alterar Aluno</h1>
<br>

<br>
<form action="ex13_inserirAlunoArquivoAppend.php" method=POST>
    Matricula: <input type=text name="matricula"> <br>
    nome: <input type=text name="nome" value='<?php echo "jose da silva"; ?>'> <br>
    email: <input type=text name="email"> <br>
    data nascimento: <input type=text name="dtNasc"> <br>
    cpf: <input type=text name="cpf"> <br>
    telefone:<input type=text name="telefone"> <br>
    endereço: <input type=text name="endereco"> <br>
    cidade: <input type=text name="cidade"> <br>
    estado: <input type=text name="estado"> <br>
    cep: <input type=text name="cep"> <br>
    <br><br>
    <input type="submit" value="Inserir">
</form>
<br>
</body>
</html>