<?php

$email = $_POST['email'];
$password = $_POST['password']; 

if($email == "g211210027@sakarya.edu.tr"){
    if($password == "g211210027"){
        sleep(2);
        echo '<h1>Hoşgeldiniz G211210027! <a href="Anasayfa.html"> Ana sayfaya buraya tıklayarak dönebilirsiniz </a></h1>';
        
    }
    else {
        
        
        header("Location: login.html");
        
       

    }
} 
else {
        
        header("Location: login.html");
}





?>
