<?php

namespace APP\model\DAO;

use APP\model\Conexao;
use PDO;

class EstudanteDAO implements DAO
{
    // INSERIR DADOS
    public function insert($object)
    {
        $conexao = Conexao::getConexao();

        $stmt = $conexao -> prepare('INSERT INTO estudante VALUES (null,?,?,?,?,?,?)');
        $stmt -> bindParam(1, $object -> nome);
        $stmt -> bindParam(2, $object -> cpf);
        $stmt -> bindParam(3, $object -> idade);
        $stmt -> bindParam(4, $object -> curso);
        $stmt -> bindParam(5, $object -> tel);
        $stmt -> bindParam(6, $object -> email);

        return $stmt -> execute();
    }
    // BUSCAR ESTUDANTE POR ID 
    public function findOne($id)
    {
        $conexao = Conexao::getConexao();
        $stmt = $conexao -> query('select * from estudante where id_estudante = $id');

        return $stmt -> fetchAll(PDO::FETCH_ASSOC);
    }
    // BUSCAR LISTA TODOS OS ESTUDANTES
    public function findAll()
    {
        $conexao = Conexao::getConexao();
        $stmt = $conexao -> query("select * from estudante;");

        return $stmt -> fetchAll(PDO::FETCH_ASSOC);
    }
    // EDITAR DADOS DO ESTUDANTE
    public function update($object)
    {
        $conexao = Conexao::getConexao();
        $stmt = $conexao -> prepare('UPDATE estudante SET nome=?,cpf=?,idade=?,curso=?,tel=?,email=? WHERE id_estudante;');

        $stmt -> bindParam(1, $object -> nome);
        $stmt -> bindParam(2, $object -> cpf);
        $stmt -> bindParam(3, $object -> idade);
        $stmt -> bindParam(4, $object -> curso);
        $stmt -> bindParam(5, $object -> tel);
        $stmt -> bindParam(6, $object -> email);

        return $stmt -> execute();
    }
    // DELETAR ESTUDANTE PELO ID
    public function delete($id)
    {
        $conexao = Conexao::getConexao();

        $stmt = $conexao -> prepare('delete from estudate where id_estudante=?');
        $stmt -> bindParam(1, $id);

        return $stmt -> execute();
    }
}