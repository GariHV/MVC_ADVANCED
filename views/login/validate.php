<?php
// in_array
$fil="./users.json";
$Allusers= file_get_contents($fil);
$usersAll= json_decode($Allusers);

if (($_POST)){
    $postEmail= $_POST["email"];
    $postPassword= $_POST["password"];
    /* header(("Location: ./index.php?InvalidPassword")); */
    foreach ($usersAll as $user ) {
        print_r($user->name);
        if($postEmail == $user->email){
            echo "a";
            if($postPassword == $user->password){
                $_SESSION["email"]= $postEmail;
                $_SESSION["user"]= $user->name;
                $_SESSION["password"]=$postPassword;
                /* header("Location: ../main"); */
                exit();
            }
        }
    }
}

