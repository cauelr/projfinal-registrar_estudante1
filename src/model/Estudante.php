<?php

namespace APP\model;

class Estudante
{
    private int $id;
    private string $nome;
    private string $cpf;
    private string $tel;
    private int $idade;
    private string $curso;
    private string $email;

    public function __construct(string $nome, string $cpf, string $tel, int $idade, string $curso, string $email, int $id = 0)
    {
        $this -> nome = $nome;
        $this -> cpf = $cpf;
        $this -> tel = $tel;
        $this -> idade = $idade;
        $this -> curso = $curso;
        $this -> email = $email;
        $this -> id = $id;
    }
}