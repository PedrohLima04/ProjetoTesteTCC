<body>
<?php

//Pessoa
include_once 'classes/Pessoa.php';

//Aluno
include_once 'classes/Aluno.php';
$aluno1 = new Aluno("Lucas Silva", "lucas@email.com", "11999999999", "A123", 4);

//Tarefas
include_once 'classes/Tarefa.php';
$tarefa1 = new Tarefa("Estudar Álgebra", "Revisar equações de segundo grau", 5);
$tarefa2 = new Tarefa("Leitura de História", "Capítulo sobre Revolução Francesa", 3);

//Disciplina
include_once 'classes/Disciplina.php';
$disciplina1 = new Disciplina("Matemática", "Conteúdos de ensino médio", 4);
$disciplina1->adicionarTarefa($tarefa1);
$disciplina1->adicionarTarefa($tarefa2);

//Gerenciador
include_once 'classes/GerenciadorDeEstudo.php';
$gerenciador = new GerenciadorDeEstudo();
$gerenciador->adicionarAluno($aluno1);
$gerenciador->adicionarDisciplina($disciplina1);

//revisão
$gerenciador->aplicarRevisoes();

//resumo
echo $gerenciador->gerarResumo();

?>
</body>