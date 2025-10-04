<?php
require_once 'Pessoa.php';
require_once 'Tarefa.php';

class Aluno extends Pessoa {
    public string $matricula;
    public int $nivelDificuldade;

    /** @var Tarefa[] */
    public array $tarefas = [];

    public function __construct(string $nome, string $email, string $telefone, string $matricula, int $nivelDificuldade = 3) {
        parent::__construct($nome, $email, $telefone);
        $this->matricula = $matricula;
        $this->nivelDificuldade = $nivelDificuldade;
    }

    public function getMatricula(): string {
        return $this->matricula;
    }

    public function setMatricula(string $matricula): void {
        $this->matricula = $matricula;
    }

    public function getNivelDificuldade(): int {
        return $this->nivelDificuldade;
    }

    public function setNivelDificuldade(int $nivel): void {
        if ($nivel >= 1 && $nivel <= 5) {
            $this->nivelDificuldade = $nivel;
        }
    }

    public function adicionarTarefa(Tarefa $tarefa): void {
        $this->tarefas[] = $tarefa;
    }

    public function listarTarefas(): array {
        return $this->tarefas;
    }

    public function exibirResumo(): string {
        $resumo = $this->exibirDados();
        $resumo .= "<br>Matrícula: {$this->matricula}";
        $resumo .= "<br>Nível de dificuldade: {$this->nivelDificuldade}";
        $resumo .= "<br>Total de tarefas: " . count($this->tarefas);
        return $resumo;
    }
}

