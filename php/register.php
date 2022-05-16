<?php
   require('db.php');
   $name = $_GET['name'];
   $mail = $_GET['mail'];
   $password = $_GET['password'];
          if (isset($_GET["submit"])){
              if (empty($_GET["name"])) {
                  $error = "пздц";
                  $foto = '<img src="media/fotn.jpeg">';
                  $erorname = '<style> #name{
                               border: 2px solid red;
} </style>';
} else {
    $name = test_input($_GET["name"]);
}
             if (!preg_match("/^[a-zA-Z0-9]+$/", $name)){
                 echo "недопустимі знакі!!!";
                 $error = "пздц";
}
             if (strlen($name) < 3 or strlen($name) > 10){
                 echo "недопустима кількість знаків, мінму 3 максимум 10";
                 $error = "пздц";
}

             if (empty($_GET["mail"])){
                 if ($foto !='<img src="media/fotn.jpeg">' ){
                     $foto = '<img src="media/fote.jpeg">';
}
                 $error = "пздц";
                 $mmm = '<style> #mail{
                               border: 2px solid red;
} </style>';
} else {
    $mail = test_input($_GET["mail"]);
  }

            if (empty($_GET["password"])){
                if ($foto != '<img src="media/fotn.jpeg">'){
                    if ($foto != '<img src="media/fote.jpeg">'){
                        $foto = '<img src="media/fotp.jpeg">';
}
}
                $error = "пздц";
                $pss = '<style> #password{
                               border: 2px solid red;
} </style>';
} else {
    $password = test_input($_GET["password"]);
  }
         if ( R::count('users', "mail = ?", array($_GET['mail'])) > 0) {
                 $error = "пздц";
                 echo "користувач існує";
}
        if ($error != "пздц"){
                    $user = R::dispense('users');
                    $user->name = $name;
                    $user->mail = $mail;
                    $user->password = password_hash($password, PASSWORD_DEFAULT);
                    R::store($user);
                      echo "ви зареєстровані";
}
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
        if ($foto != '<img src="media/fotn.jpeg">'){
            if ($foto != '<img src="media/fote.jpeg">'){
                if ($foto != '<img src="media/fotp.jpeg">'){
                    $foto = '<img src="media/foto.jpg">';
}
}
}
