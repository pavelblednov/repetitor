<?php

if($_POST['action'] == '' or empty($_POST['action'])) return;

if($_POST['action'] == 'form-1'){
    $username = strip_tags($_POST['username']);
    // $useremail = strip_tags($_POST['useremail']);
    $userphone = strip_tags($_POST['userphone']);
    $error = '';

    if(empty($username)){
        $error = 'Введите имя';
    }
    // if(empty($useremail)){
    //     $error = 'Введите e-mail';
    // }
    if(empty($userphone)){
        $error = 'Введите телефон';
    }
    if($error !== ''){
        echo 'Неправильно заполненны поля!';
    }

    $to      = 'pavellled@gmail.com';
    $subject = 'Заявка с сайта';
    $message = "
    <p>Имя: $username</p>
    <p>Телефон: $userphone</p>
    ";
    // <p>E-mail: $useremail</p>
    $headers  = "Content-type: text/html; charset=utf-8 \r\n"; 
    $headers .= "From: Заявка <from@example.com>\r\n";
    if(mail($to, $subject, $message, $headers)){
        echo '
        <div class="form-message">
        <div class="form-message__body">
                <div class="form-message__title">Сообщение успешно отправленно!</div>
                <div class="form-message__text">Наш менеджер скоро с вами свяжется.</div>
            </div>
        </div>
        ';
    } else {
        echo '
        <div class="form-message">
        <div class="form-message__body">
                <div class="form-message__title">Ошибка!</div>
            </div>
        </div>
        ';
    }
}