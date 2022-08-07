<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar os dados do Estudante</title>
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
                <a href="lista_estudantes.php">Listar Estudantes</a>
            </li>
        </ul>
    </nav>
    <form action="../controller/Estudante.php?operation=edit" method="POST">
        <input type="hidden" name="code" value="<?= $estudante['id_estudante'] ?>">
        <fieldset>
            <legend>Edite os Dados</legend>
                <article>
                    <label for="nome">Nome: </label>
                    <input type="text">
                </article>

                <br>
                <article>
                    <label for="cpf">CPF: </label>
                    <input type="text">
                </article>

                <br>
                <article>
                 <label for="idade">Idade: </label>
                 <input type="number">
                </article>

                <br>
                <article>
                 <label for="tel">Telefone: </label>
                 <input type="text">
                </article>

                <br>
                <article>
                    <label for="email">E-mail: </label>
                    <input type="text">
                </article>

                <br>
                <button>Editar Dados</button>
        </fieldset>
</body>
</html>