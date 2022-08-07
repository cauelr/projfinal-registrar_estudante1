<?php

namespace APP\controller;

use APP\model\DAO\EstudanteDAO;
use APP\model\Estudante;
use APP\utils\Redirecionar;
use PDOException;


switch($_GET['operation']){
    case 'insert': 
        return insertEstudante();
        break;
    case 'list':
        return listEstudante();
        break;
    case 'remove':
        return removeEstudante();
        break;
    case 'find':
        return findEstudante();
        break;
    case 'edit':
        return editEstudante();
        break;
}

function insertEstudante()
{
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $idade = $_POST["idade"];
    $tel = $_POST["tel"];
    $curso = $_POST["curso"];
    $email = $_POST["email"];

    $estudante = new Estudante(
        nome: $nome, 
        cpf: $cpf, 
        tel: $tel, 
        idade: $idade, 
        curso: $curso, 
        email: $email
    );

    $dao = new EstudanteDAO;
    $resultado = $dao -> insert($estudante);

    $erro = array();
}

function listEstudante()
{

    session_start();
    $dao = new EstudanteDAO();
    $estudante = $dao->findAll();
    $_SESSION['lista_estudantes'] = $estudante;
    header('location:..View/lista_estudantes.php');
}

function removeEstudante()
{
    $codigo = (float) $_GET['codigo'];
    $erro = array();

    $dao = new EstudanteDAO();
    $resultado = $dao -> delete($codigo);
}

function findEstudante()
{
    $codigo = $_GET['codigo'];
    $dao = new EstudanteDAO();
    $resultado = $dao->findOne($codigo);
    session_start();
    $_SESSION['estutande_info'] = $resultado;
    header("location:../View/form_add_estudante");
}

function editEstudante()
{
    $codigo = $_POST['codigo'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $cpf = $_POST['cpf'];
    $curso = $_POST['curso'];
    $idade = $_POST['idade'];


    $estudante = new Estudante(

        nome: $nome,
        cpf: $cpf,
        idade: $idade,
        curso: $curso,
        tel: $tel,
        email: $email,
        id: $codigo
    );
    $dao = new EstudanteDAO();
    $resultado = $dao -> update($estudante);
}
