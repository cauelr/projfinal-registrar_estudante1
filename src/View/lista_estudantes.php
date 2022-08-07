<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <ul>
            <li>
                <a href="../../index.html">Home</a>
            </li>
            <li>
                <a href="form_add_estudante.php">Registrar Estudante</a>
            </li>
            <li>
                <a href="#">Listar Estudantes</a>
            </li>
        </ul>
    </nav>

    <h1>Lista de Estudantes</h1>
    <table>
        <thead>
            <th>#</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Idade</th>
            <th>Curso</th>
            <th>Tel</th>
            <th>E-mail</th>
        </thead>
        <tbody>

        <?php 
            session_start();
            foreach($_SESSION['lista_estudantes'] as $estudante):
        ?>

        <tr>
            <td>
                <?= $estudante['id_estudante'] ?>
            </td>
            <td>
                <?= $estudante['nome'] ?>
            </td>
            <td>
                <?= $estudante['cpf'] ?>
            </td>
            <td>
                <?= $estudante['idade'] ?>
            </td>
            <td>
                <?= $estudante['curso'] ?>
            </td>
            <td>
                <?= $estudante['tel'] ?>
            </td>
            <td>
                <?= $estudante['email'] ?>
            </td>

            <td>
                <a href="../controller/Estudante.php?operation=find&code=<?= $estudante["id_estudante"] ?>">Editar</a>
                <a href="../controller/Estudante.php?operation=remove&code<?= $estudante["id_estudante"] ?>">Remover</a>
            </td>
        </tr>

        <?php 
            endforeach;
        ?>

        </tbody>
    </table>
</body>
</html>