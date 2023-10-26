<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["name"]) && isset($_POST["email"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $destinatario = $email;
    $assunto = "Alerta de Vazamento de Gás";
    $mensagem = "Olá $name,\n\nPerigo! Detectamos um vazamento de gás na sua residência. Ação necessária imediatamente.";

    $enviado = mail($destinatario, $assunto, $mensagem);

    if ($enviado) {
        echo "E-mail de alerta enviado com sucesso para $destinatario.";
    } else {
        echo "Erro ao enviar o e-mail de alerta.";
    }
}
?>
