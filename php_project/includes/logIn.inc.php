
<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        // get data from form
        $user_email = $_POST["email"];
        $user_password = $_POST["password"];

        

         // instantiate signUp controller class

        include "conn.php";
        include "../controllers/loginController.php";
        include "../model/loginClasses.php";
        
        $login = new LoginContr($user_email, $user_password);
        

         // catch errors
         $login->loginUser();

         // back to view 

        header("location:../views/index.php?error=none");

        die();
    }


