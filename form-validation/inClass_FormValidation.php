<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    #heading{
        background-color:#fce8ef;
        margin: auto;
        padding:auto;
        height: 100vh;
        width:100%;
        display: flex;
        justify-content:center;
        align-items:center;
        font-size:2rem;
        flex-direction: column;
    }
    .text{
        display: flex;
        justify-content:center;
        align-items:center;
        flex-direction: column;
        
    }
    .text h1:hover{
        color: #FFD700;
        transition-duration: 0.3s;
    }
    .text p{
        font-size: 20px;
    }

    img{
        margin:35px;
    }
    .btn{
        width:450px;
        margin:10px;
        padding: 10px;
        border: 2px solid;
        border-radius: 20px;

    }
</style>

<body>

    <div id="heading">
        <div class="text">
             <h1 class="">Hello There!</h1>
             <p>Automatic verification Identity which enable you to verify your identity</p>
        </div>
        <img src="working.png" alt="" height=300px>
        <a href="http://localhost/php/form-validation/logIn.php">
          <button type="button" id="logIn" class="btn btn-outline-warning">Login</button>
        </a>
        <a href="http://localhost/php/form-validation/SignUp.php">
        <button type="button" id="signUp" class="btn btn-outline-dark">Sign Up</button>
        </a>
    </div> 


<script>




</script>

</body>
</html>