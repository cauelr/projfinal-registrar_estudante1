<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Estudante</title>
</head>

<body>
    <nav>
        <ul>
            <li>
                <a href="../../index.html">Home</a>
            </li>
            <li>
                <a href="#">Registrar Estudante</a>
            </li>
            <li>
                <a href="lista_estudantes.php">Listar Estudantes</a>
            </li>
        </ul>
    </nav>

    <form action="../controller/Estudante.php?operation=insert" method="POST">
        <fieldset>
            <legend>Registre-se</legend>
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
                <label for="curso">Curso: </label>
                <input type="text">
            </article>

            <br>
            <article>
                <label for="email">E-mail: </label>
                <input type="text">
            </article>
            
            <br>
            <button type="submit">Cadastrar Aluno</button>
        </fieldset>
    </form>
</body>

</html>