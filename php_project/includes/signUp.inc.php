<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get data from form
    $user_fName = $_POST["fname"];
    $user_lName = $_POST["lname"];
    $user_email = $_POST["email"];
    $user_password = $_POST["password"];
    $user_confPassword = $_POST["confirm_password"];
    $user_gender = $_POST["gender"];
    $user_DOB = $_POST["DOB"];
    $user_mobile = $_POST["mobile"];
    $user_address = $_POST["address"];

    // signUp controller class
    include "conn.php"; 
    include "../controllers/signUpController.php";
    include "../model/signupClasses.php";

    $signUp = new signUpContr($user_fName, $user_lName, $user_email, $user_password, $user_confPassword, $user_gender, $user_DOB, $user_mobile, $user_address); 

    
    // Catch errors
    $signUp->signupUser();
    $userId = $signUp->fetchUserId($user_id);
    $signUp = new signUpContr($user_fName, $user_lName, $user_email, $user_password, $user_confPassword, $user_gender, $user_DOB, $user_mobile, $user_address); 


    include "../controllers/ProfileController.php";
    include "../model/UserModel.php";
    
    header("location:../views/userProfile.php?error=none");

}
