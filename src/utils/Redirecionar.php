<?php

namespace APP\utils;

class Redirecionar
{
    public static function redirecionar(
        string | array $mensagem,
        string $url = '../View/Mensagem.php',
        string $type = 'sucesso'
    ) {
        session_start();
        if (is_array($mensagem)) {
            $erro = "";
            foreach ($mensagem as $msg) {
                $erro .= "<li>$msg</li>";
            }
            $_SESSION['msg_aviso'] = $erro;
        } else {
            if ($type == 'sucesso') {
                $_SESSION['msg_sucesso'] = $mensagem;
            } else if ($type == 'erro') {
                $_SESSION['msg_erro'] = $mensagem;
            }
        }
        header("location:$url");
    }
}
