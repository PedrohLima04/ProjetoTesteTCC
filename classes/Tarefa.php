<?php

class Tarefa {
    public string $titulo;
    public string $descricao;
    public DateTime $dataCriacao;
    public int $nivelDificuldade;
    public ?DateTime $ultimaRevisao = null;
    public ?DateTime $proximaRevisao = null;

    public function __construct(string $titulo, string $descricao, int $nivelDificuldade = 3) {
        $this->titulo = $titulo;
        $this->descricao = $descricao;
        $this->dataCriacao = new DateTime();
        $this->nivelDificuldade = max(1, min($nivelDificuldade, 5)); 
    }

    public function getTitulo(): string {
        return $this->titulo;
    }

    public function getDescricao(): string {
        return $this->descricao;
    }

    public function getDataCriacao(): DateTime {
        return $this->dataCriacao;
    }

    public function getNivelDificuldade(): int {
        return $this->nivelDificuldade;
    }

    public function getUltimaRevisao(): ?DateTime {
        return $this->ultimaRevisao;
    }

    public function getProximaRevisao(): ?DateTime {
        return $this->proximaRevisao;
    }

    public function registrarRevisao(DateTime $data): void {
        $this->ultimaRevisao = $data;
    }

    public function calcularProximaRevisao(int $nivelAluno): void {
        $baseDias = 6;
        $intervalo = ($baseDias - $this->nivelDificuldade) + ($baseDias - $nivelAluno);
        $intervalo = max(1, $intervalo); 

        $dataBase = $this->ultimaRevisao ?? $this->dataCriacao;
        $this->proximaRevisao = (clone $dataBase)->modify("+{$intervalo} days");
    }//Data da proxima Revisão

    public function exibirTarefa(): string {
        $dataCriacao = $this->dataCriacao->format('d/m/Y');
        $ultima = $this->ultimaRevisao ? $this->ultimaRevisao->format('d/m/Y') : 'Não revisada';
        $proxima = $this->proximaRevisao ? $this->proximaRevisao->format('d/m/Y') : 'Não calculada';

        return "<strong>{$this->titulo}</strong><br>
                Descrição: {$this->descricao}<br>
                Criada em: {$dataCriacao}<br>
                Dificuldade: {$this->nivelDificuldade}<br>
                Última revisão: {$ultima}<br>
                Próxima revisão: {$proxima}<br><hr>";
    }//Saída de Dados
}
