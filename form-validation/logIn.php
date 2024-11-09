<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    #heading {
        background-color:#fce8ef;
        height: 100vh;
        width:100%;
        margin: auto;
        padding:auto;
        display: flex;
        justify-content:center;
        align-items:center;
        flex-direction: column;
    }
    .text h1:hover {
        color: #FFD700;
        transition-duration: 0.3s;
    }
    .text p {
        font-size: 20px;
    }
    .btn {
        width:450px;
        margin:10px;
        padding: 10px;
        border: 2px solid;
        border-radius: 20px;
    }
    .text {
        display: flex;
        justify-content:center;
        align-items:center;
        flex-direction: column;
    }
    .inputs {
        margin: 40px;
    }
    .inputs .form-control {
        border-radius: 10px;
        width:450px;
        height: 3rem;
        padding: 15px;
    }
    .sub {
        display: flex;
        justify-content:center;
        align-items:center;
        flex-direction: column;
    }
</style>

<?php
require("connct.php");

session_start();

if (isset($_POST['submit'])) {
    $myemail = $_POST['email'];  
    $mypassword = $_POST['password'];  
    echo $myemail;
    echo $mypassword;

    $sql = "SELECT * FROM `users` WHERE `email` = :email";
    $stm = $conn->prepare($sql); 
    $stm->bindParam(':email', $myemail); 
    $test=$stm->execute();
//    print_r($stm->fetch(PDO::FETCH_ASSOC)); 

    
    if ($stm->rowCount() == 1) {
        $user = $stm->fetch(PDO::FETCH_ASSOC); 
        $_SESSION['user_id']=$user['Id'];
        echo($user['is_admin']);
        // print_r(); 

      
            if ($user['is_admin'] == 1) {
                    echo "is admin";
                // header('Location: ./Data.php');
            } else {
                echo "is not admin";

                header('Location:./welcome.php');
            }
            
       
        // // if (password_verify($mypassword, $user['Password'])) { } 
          
    } else {
        echo 'Email does not exist.'; 
    }
}
?>



<div id="heading">
    <div class="text">
        <h1 class="">Login</h1>
        <p>Welcome back! Login with your credentials.</p>
    </div>

    <form id="loginForm" class="inputs" method="post" action="logIn.php">
        <div class="form-floating mb-3">
            <label for="floatingInput">Email address</label>
            <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
            <span style="color:red" id="errorEmail"></span>
        </div>

        <div class="form-floating">
            <label for="floatingPassword">Password</label>
            <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
            <span style="color:red" id="errorPassword"></span>
        </div>

        <div class="sub">
            <button type="submit" id="logOut" class="btn btn-outline-warning" name="submit">Login</button>
            <p>Don't have an account? <a href="SignUp.php"><b>Sign Up</b></a></p>
        </div>
    </form>
</div>

<script>
    let mail = document.getElementById('floatingInput');
    let pass = document.getElementById('floatingPassword');
    let head = document.getElementById('loginForm');
    let errorEmail = document.getElementById('errorEmail');
    let errorPassword = document.getElementById('errorPassword');

    errorEmail.innerHTML = '';
    errorPassword.innerHTML = '';
    
    head.addEventListener('submit', (x) => {
        if (mail.value.trim() === '' || mail.value.trim() == null) {
            x.preventDefault();
            errorEmail.innerHTML = "Email is required";
        }

        if (pass.value.trim() === '' || pass.value.trim() == null) {
            x.preventDefault();
            errorPassword.innerHTML = "Password is required";
        }
    });
</script>

</body>
</html>
