<?php

namespace vendor\mailer;

class Mailer
{
    private $name;

    function __construct($userMail)
    {
        $this->name = $userMail;
    }

    public function mailer()
    {
        $to = 'Название почты@mail.com'; // обратите внимание на запятую
        $subject = 'Отправитель';
        $message = '
            <html>
            <head>
              <title>Test</title>
            </head>
            <body>
             <h1>Тестовое сообщение</h1>
             <p>!!!TEST!!!</p>
            </body>
            </html>
            ';
        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        if(mail($to, $subject, $message, $headers))
        {
            echo 'Отправлено';
        }else{
            echo 'Ошибка';
        };
    }
}


    $mail = new Mailer($_POST['mail']);
    $mail->mailer();
