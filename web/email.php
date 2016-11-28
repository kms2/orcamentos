<?php
$destinatario = "pjsn@cin.ufpe.br";
$name =  $_POST["name"];
$email =  $_POST["email"];
$rating =  $_POST["rating"];
$comment = $_POST["comment"];
$mensagem = $name."\n".$email."\n".$rating."\n".$comment."\n";
mail($destinatario, 'Contato', $mensagem);
?>