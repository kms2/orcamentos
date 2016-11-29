<?php
$destinatario = "pjsn@cin.ufpe.br";
$name =  $_POST["name"];
$email =  $_POST["email"];
$rating =  $_POST["rating"];
$comment = $_POST["comment"];
$mensagem = $name."\n".$email."\n".$rating."\n".$comment."\n";
mail($destinatario, 'Contato', $mensagem);
?>
 <!DOCTYPE html>
  <html>
  <head>
    <title>Thanks!</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <style>
    body {
      background-color: #EFEFEF;
      color: #2E2F30;
      text-align: center;
      font-family: arial, sans-serif;
      margin: 0;
    }
  
    div.dialog {
      width: 95%;
      max-width: 33em;
      margin: 4em auto 0;
    }
  
    div.dialog > div {
      border: 1px solid #CCC;
      border-right-color: #999;
      border-left-color: #999;
      border-bottom-color: #BBB;
      border-top: green solid 4px;
      border-top-left-radius: 9px;
      border-top-right-radius: 9px;
      background-color: white;
      padding: 7px 12% 0;
      box-shadow: 0 3px 8px rgba(50, 50, 50, 0.17);
    }
  
    h1 {
      font-size: 100%;
      color: green;
      line-height: 1.5em;
    }
  
    div.dialog > p {
      margin: 0 0 1em;
      padding: 1em;
      background-color: #F7F7F7;
      border: 1px solid #CCC;
      border-right-color: #999;
      border-left-color: #999;
      border-bottom-color: #999;
      border-bottom-left-radius: 4px;
      border-bottom-right-radius: 4px;
      border-top-color: #DADADA;
      color: #666;
      box-shadow: 0 3px 8px rgba(50, 50, 50, 0.17);
    }
    </style>
  </head>
  
  <body>
    <div class="dialog">
      <div>
        <h1>Thanks for the feedback!.</h1>
        <p>Your feedback is very important to improve the dataset.</p>
      </div>
	  <p><a href="javascript:window.history.go(-1)">Back</a></p>
    </div>
  </body>
  </html>