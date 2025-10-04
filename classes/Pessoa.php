<?php
class Pessoa {
    public string $nome;
    public string $email;
    public string $telefone;

    public function __construct(string $nome, string $email, string $telefone = '') {
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
    }

    //Get das Classes
    public function getNome(): string {
        return $this->nome;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function getTelefone(): string {
        return $this->telefone;
    }

    //Set das Classes
    public function setNome(string $nome): void {
        $this->nome = $nome;
    }

    public function setEmail(string $email): void {
        $this->email = $email;
    }

    public function setTelefone(string $telefone): void {
        $this->telefone = $telefone;
    }

    public function exibirDados(): string {
        return "Nome: {$this->nome}<br>Email: {$this->email}<br>Telefone: {$this->telefone}";
    }
}
