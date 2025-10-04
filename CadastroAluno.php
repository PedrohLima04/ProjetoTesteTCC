<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Criar Perfil de Aluno</title>
</head>
<body>
    <div>

    <div>
    <h2>Cadastro de Aluno</h2>
    </div>

    <div>
    <form action="processa_aluno.php" method="POST">
        <label for="nome">Nome:</label><br>
        <input type="text" name="nome" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label for="telefone">Telefone:</label><br>
        <input type="text" name="telefone"><br><br>

        <label for="matricula">Matrícula:</label><br>
        <input type="text" name="matricula" required><br><br>

        <label for="nivel">Nível de Dificuldade (1 a 5):</label><br>
        <input type="number" name="nivel" min="1" max="5" value="3"><br><br>

        <input type="submit" value="Cadastrar Aluno">
    </form>
    </div>

    </div>
</body>
</html>
