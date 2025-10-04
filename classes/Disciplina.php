<?php
require_once 'Tarefa.php';


class Disciplina {
    public string $nome;
    public string $descricao;
    public int $nivelDificuldade;

    /** @var Tarefa[] */
    public array $tarefas = [];

    public function __construct(string $nome, string $descricao, int $nivelDificuldade = 3) {
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->nivelDificuldade = max(1, min($nivelDificuldade, 5));
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getDescricao(): string {
        return $this->descricao;
    }

    public function getNivelDificuldade(): int {
        return $this->nivelDificuldade;
    }

    public function adicionarTarefa(Tarefa $tarefa): void {
        $this->tarefas[] = $tarefa;
    }

    public function listarTarefas(): array {
        return $this->tarefas;
    }

    public function calcularRevisoes(int $nivelAluno): void {
        foreach ($this->tarefas as $tarefa) {
            $tarefa->calcularProximaRevisao($nivelAluno);
        }
    }

    public function getResumo(): string {
        $resumo = "<h3>{$this->nome}</h3>";
        $resumo .= "Descrição: {$this->descricao}<br>";
        $resumo .= "Dificuldade: {$this->nivelDificuldade}<br>";
        $resumo .= "Total de tarefas: " . count($this->tarefas) . "<br><hr>";

        foreach ($this->tarefas as $tarefa) {
            $resumo .= $tarefa->exibirTarefa();
        }

        return $resumo;
    }//Saída de Dados
}
