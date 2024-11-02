<?php

// получаем данные с формы

    $login = $POST['login'];
    $email = $POST['email'];
    $tel = $POST['tel'];


// обрабатываем полученные данные 

    $login = htmlspecialchars($login);  //преобразование симвлов в сущности
    $email = htmlspecialchars($email);
    $tel = htmlspecialchars($tel);

    $login = urldecode($login); //декодирование URL
    $email = urldecode($email);
    $tel = urldecode($tel);

    $login = trim($login);  //удаление пробелов
    $email = trim($email);
    $tel = trim($tel);

    //отправляем данные

    if (mail("cidoh79127@avzong.com",
                "Новое письмо с сайта",
                "Логин: ".$login."/n".
                "Email: ".$email."/n".
                "Телефон: ".$tel,
                "From: no-reply@mydomain.ru /r/n")
    
    ) {
        echo ('Письмо доставленно!');
    }

    else {
        echo ('Есть ошибки! Проверьте данные...');
    }


?>

