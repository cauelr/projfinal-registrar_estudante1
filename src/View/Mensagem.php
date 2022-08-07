<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensagem do sistema</title>
</head>
<body>

    <?php
    session_start();
    if(empty($_SESSION))
        header("location:../index.html");
    ?>
    <main>

    <?php
        if(!empty($_SESSION['msg_sucesso'])):
    ?>

    <article>
        <div>
            <ul>
                <?= $_SESSION['msg_aviso'] ?>
            </ul>
            <a href="#" onclick="window.history.back()">Voltar</a>
        </div>
    </article>

    <?php
        endif;
        unset($_SESSION['msg_aviso']);
    ?>
    <?php
        if(!empty($_SESSION['msg_erro'])):
    ?>

    <article>
        <div>
            <p>
                <?= $_SESSION['msg_erro'] ?>
            </p>
            <a href="#" onclick="window.history.back()">Voltar</a>
        </div>
    </article>

    <?php
        endif;
        unset($_SESSION['msg_erro']);
    ?>
    </main>
</body>
</html>