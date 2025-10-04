<?php
require_once 'Aluno.php';
require_once 'Disciplina.php';

class GerenciadorDeEstudo {
    /** @var Aluno[] */
    public array $alunos = [];

    /** @var Disciplina[] */
    public array $disciplinas = [];

    public function adicionarAluno(Aluno $aluno): void {
        $this->alunos[] = $aluno;
    }

    public function adicionarDisciplina(Disciplina $disciplina): void {
        $this->disciplinas[] = $disciplina;
    }

    public function listarAlunos(): array {
        return $this->alunos;
    }

    public function listarDisciplinas(): array {
        return $this->disciplinas;
    }

    public function aplicarRevisoes(): void {
        foreach ($this->alunos as $aluno) {
            foreach ($this->disciplinas as $disciplina) {
                $disciplina->calcularRevisoes($aluno->getNivelDificuldade());
            }
        }
    }

    public function gerarResumo(): string {
        $resumo = "<h2>Resumo do Gerenciador de Estudos</h2>";

        foreach ($this->alunos as $aluno) {
            $resumo .= "<div style='margin-bottom:20px;'>";
            $resumo .= $aluno->exibirResumo();
            $resumo .= "</div>";
        }

        foreach ($this->disciplinas as $disciplina) {
            $resumo .= "<div style='margin-bottom:20px;'>";
            $resumo .= $disciplina->getResumo();
            $resumo .= "</div>";
        }

        return $resumo;
    }
}
