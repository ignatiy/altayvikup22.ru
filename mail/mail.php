<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['name'])) {$name = $_POST['name'];}
    if (isset($_POST['tel'])) {$tel = $_POST['tel'];}
    if (isset($_POST['marka'])) {$marka = $_POST['marka'];}
    if (isset($_POST['model'])) {$model = $_POST['model'];}
   // if (isset($_POST['discount'])) {$discount = $_POST['discount'];}
    if (isset($_POST['age'])) {$age = $_POST['age'];}

 
    $to = "altaiavtovikup@gmail.com"; 
//    $to = "ignatii19942310.ru@gmail.com";
    $sendfrom   = "site@altayvikup22.ru";
    $headers  = "From: " . strip_tags($sendfrom) . "\r\n";
    $headers .= "Reply-To: ". strip_tags($sendfrom) . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
    $subject = "Заяка с сайта altayvikup22.ru";
    $message = "Заяка с сайта altayvikup22.ru
    <br>
    <br><b>Имя: </b></br> $name
    <br><b>Телефон: </b></br> $tel
    <br><b>Марка: </b></br> $marka
    <br><b>Модель: </b></br> $model
    <br><b>Год: </b></br></br> $age";
    $send = mail ($to, $subject, $message, $headers);
    if ($send == 'true')
    {
    echo '

    <html lang="ru">
      <head>
        <meta charset="utf-8">
        <title>Заяка отправлена</title>
        <link rel="icon" type="image/ico" href="/img/favicon.ico">
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="/css/flexslider.css" rel="stylesheet" >
        <link href="/css/styles.css" rel="stylesheet">
        <link href="/css/queries.css" rel="stylesheet">
        <link href="/css/animate.css" rel="stylesheet">
        <style>
              .btn-class{
         display: inline-block;
         border:1px solid #C9AE34;
         color: #705D07;
         border-radius: 3px 3px 3px 3px;
         -webkit-border-radius: 3px 3px 3px 3px;
         -moz-border-radius: 3px 3px 3px 3px;
         font-family: Verdana;
         width: auto;
         height: auto;
         font-size: 18px;
         padding: 10px 40px;
         box-shadow: inset 0 1px 0 0 #FFF6CE,inset 0 -1px 0 0 #E3C852,inset 0 0 0 1px #FCE88D,0 2px 4px 0 #D4D4D4;
         -moz-box-shadow: inset 0 1px 0 0 #FFF6CE,inset 0 -1px 0 0 #E3C852,inset 0 0 0 1px #FCE88D,0 2px 4px 0 #D4D4D4;
         -webkit-box-shadow: inset 0 1px 0 0 #FFF6CE,inset 0 -1px 0 0 #E3C852,inset 0 0 0 1px #FCE88D,0 2px 4px 0 #D4D4D4;
         text-shadow: 0 1px 0 #FFFFFF;
         background-image: linear-gradient(to top, #FCE374, #FCDF5B);
         background-color: #FCE374;
        }
        .btn-class:hover, .btn-class:active{
         border:1px solid #967D09;
         color: #705D07;
         box-shadow: inset 0 1px 0 0 #FFF6CE,inset 0 -1px 0 0 #E3C852,inset 0 0 0 1px #FCE88D;
         -moz-box-shadow: inset 0 1px 0 0 #FFF6CE,inset 0 -1px 0 0 #E3C852,inset 0 0 0 1px #FCE88D;
         -webkit-box-shadow: inset 0 1px 0 0 #FFF6CE,inset 0 -1px 0 0 #E3C852,inset 0 0 0 1px #FCE88D;
         background-color: #FCDF5B;
        }
        </style>

      </head>
        <body>

          <img style="text-align:left; margin-top: 50px; margin-left: 50px;" src="/img/logo.png" width=220 height=44>
          <p style="text-align: left; font-size: 16px; margin-left: 60px;"><a href="tel:+79132105550">8(913)210-55-50</a> / <a href="tel:+73852605550">60-55-50</a></p>
          <p style="text-align: center; font-size: 25px; margin-top: 50px;" >Спасибо! Ваше сообщение отправлено, а это значит что с Вами скоро свяжется наш менеджер!</p>
          <p style="text-align: center; margin-top: 35px;"><button class="btn-class"><a href="http://altayvikup22.ru/">Вернуться назад</a></button>

        </body>
    </html>

    ';
    }
    else
    {
    echo '

    <html lang="ru">
      <head>
        <meta charset="utf-8">
        <title>Заявка не отправлена</title>
        <link rel="icon" type="image/ico" href="/img/favicon.ico">
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="/css/flexslider.css" rel="stylesheet" >
        <link href="/css/styles.css" rel="stylesheet">
        <link href="/css/queries.css" rel="stylesheet">
        <link href="/css/animate.css" rel="stylesheet">
        <style>
              .btn-class{
         display: inline-block;
         border:1px solid #C9AE34;
         color: #705D07;
         border-radius: 3px 3px 3px 3px;
         -webkit-border-radius: 3px 3px 3px 3px;
         -moz-border-radius: 3px 3px 3px 3px;
         font-family: Verdana;
         width: auto;
         height: auto;
         font-size: 18px;
         padding: 10px 40px;
         box-shadow: inset 0 1px 0 0 #FFF6CE,inset 0 -1px 0 0 #E3C852,inset 0 0 0 1px #FCE88D,0 2px 4px 0 #D4D4D4;
         -moz-box-shadow: inset 0 1px 0 0 #FFF6CE,inset 0 -1px 0 0 #E3C852,inset 0 0 0 1px #FCE88D,0 2px 4px 0 #D4D4D4;
         -webkit-box-shadow: inset 0 1px 0 0 #FFF6CE,inset 0 -1px 0 0 #E3C852,inset 0 0 0 1px #FCE88D,0 2px 4px 0 #D4D4D4;
         text-shadow: 0 1px 0 #FFFFFF;
         background-image: linear-gradient(to top, #FCE374, #FCDF5B);
         background-color: #FCE374;
        }
        .btn-class:hover, .btn-class:active{
         border:1px solid #967D09;
         color: #705D07;
         box-shadow: inset 0 1px 0 0 #FFF6CE,inset 0 -1px 0 0 #E3C852,inset 0 0 0 1px #FCE88D;
         -moz-box-shadow: inset 0 1px 0 0 #FFF6CE,inset 0 -1px 0 0 #E3C852,inset 0 0 0 1px #FCE88D;
         -webkit-box-shadow: inset 0 1px 0 0 #FFF6CE,inset 0 -1px 0 0 #E3C852,inset 0 0 0 1px #FCE88D;
         background-color: #FCDF5B;
        }
        </style>

      </head>
        <body>

          <img style="text-align:left; margin-top: 50px; margin-left: 50px;" src="/img/logo.png" width=220 height=44>
          <p style="text-align: left; font-size: 16px; margin-left: 60px;"><a href="tel:+79132105550">8(913)210-55-50</a> / <a href="tel:+73852605550">60-55-50</a></p>
          <p style="text-align: center; font-size: 25px; margin-top: 50px;" >Произошла ошибка :( Сообщение не отправлено!</p>
          <p style="text-align: center; font-size: 20px; margin-top: 20px; margin-left: 50px; margin-right: 50px;" >
          Обратитесь к системному администратору по номеру <a href="tel:+79039904644">8(903)990-46-44</a>
          </p>
          <p style="text-align: center; margin-top: 35px;"><button class="btn-class"><a href="http://altayvikup22.ru/">Вернуться назад</a></button>

        </body>
    </html>

    ';
    }
    } else {
        http_response_code(403);
        echo '

    <html lang="ru">
      <head>
        <meta charset="utf-8">
        <title>403 Forbidden</title>
        <link rel="icon" type="image/ico" href="/img/favicon.ico">
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="/css/flexslider.css" rel="stylesheet" >
        <link href="/css/styles.css" rel="stylesheet">
        <link href="/css/queries.css" rel="stylesheet">
        <link href="/css/animate.css" rel="stylesheet">
        <style>
              .btn-class{
         display: inline-block;
         border:1px solid #C9AE34;
         color: #705D07;
         border-radius: 3px 3px 3px 3px;
         -webkit-border-radius: 3px 3px 3px 3px;
         -moz-border-radius: 3px 3px 3px 3px;
         font-family: Verdana;
         width: auto;
         height: auto;
         font-size: 18px;
         padding: 10px 40px;
         box-shadow: inset 0 1px 0 0 #FFF6CE,inset 0 -1px 0 0 #E3C852,inset 0 0 0 1px #FCE88D,0 2px 4px 0 #D4D4D4;
         -moz-box-shadow: inset 0 1px 0 0 #FFF6CE,inset 0 -1px 0 0 #E3C852,inset 0 0 0 1px #FCE88D,0 2px 4px 0 #D4D4D4;
         -webkit-box-shadow: inset 0 1px 0 0 #FFF6CE,inset 0 -1px 0 0 #E3C852,inset 0 0 0 1px #FCE88D,0 2px 4px 0 #D4D4D4;
         text-shadow: 0 1px 0 #FFFFFF;
         background-image: linear-gradient(to top, #FCE374, #FCDF5B);
         background-color: #FCE374;
        }
        .btn-class:hover, .btn-class:active{
         border:1px solid #967D09;
         color: #705D07;
         box-shadow: inset 0 1px 0 0 #FFF6CE,inset 0 -1px 0 0 #E3C852,inset 0 0 0 1px #FCE88D;
         -moz-box-shadow: inset 0 1px 0 0 #FFF6CE,inset 0 -1px 0 0 #E3C852,inset 0 0 0 1px #FCE88D;
         -webkit-box-shadow: inset 0 1px 0 0 #FFF6CE,inset 0 -1px 0 0 #E3C852,inset 0 0 0 1px #FCE88D;
         background-color: #FCDF5B;
        }
        </style>

      </head>
        <body>

          <img style="text-align:left; margin-top: 25px; margin-left: 50px;" src="/img/logo.png" width=220 height=44>
          <p style="text-align: left; font-size: 16px; margin-left: 60px;"><a href="tel:+79132105550">8(913)210-55-50</a> / <a href="tel:+73852605550">60-55-50</a></p>
          <img style="display:block; margin:0 auto;" src="/img/oops.png" width=710 height=200>
          <p style="text-align: center; font-size: 25px; margin-top: 35px;" >Ой.. Что-то пошло не так! Запрос отклонен!</p>
          <p style="text-align: center; font-size: 20px; margin-top: 20px; margin-left: 50px; margin-right: 50px;" >
          Как правило, такое происходит когда ресурс не предназначен для публичного доступа. То есть, пользователь хочет осуществить доступ к ресурсу, к которому он не имеет прав доступа. Если же источником владеете вы сами, то попросту могли установить неправильные права на папку, загрузить файл сайта не в ту папку, выложить на сервер неверный индексный файл и т.д.
          </p>
          <p style="text-align: center; margin-top: 35px;"><button class="btn-class"><a href="http://altayvikup22.ru/">Перейти на сайт</a></button>

        </body>
    </html>

    ';
    }
?>
