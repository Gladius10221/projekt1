<?php
session_start();
require "db.php";
   $mail = $_GET['mail'];
   $password = $_GET['password'];
          if (isset($_GET["submit"])){
            $user = R::findOne('users', 'mail = ?', array($mail));
            if ($user){
                if (password_verify($_GET['password'], $user->password)) {
                  echo "ви вошли";
                  $_SESSION['logged_user'] = $user;
                  $_SESSION['mail'] = $user['mail'];
                }
                 else {
                echo "пароль не верний!";
}
            }
else {
    echo "пользователь не найден!";
}
}
 $foto = '<img src="media/foto.jpg">';
