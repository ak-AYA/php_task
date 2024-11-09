<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    /* body{
      
    } */
    #heading{
        background-color:#fce8ef;
        height: 100vh;
        width:100%;
        margin: auto;
        padding:auto;
        display: flex;
        justify-content:center;
        align-items:center;
        flex-direction: column;
        border: 2px solid transparent; 
        border-radius: 5px;
        transition: border-color 0.3s ease;
    }
    
    #heading:hover {
    border-color: #FFD700; 
    }

    .text p{
        font-size: 20px;
        
    }

    .text{
        display: flex;
        justify-content:center;
        align-items:center;
        flex-direction: column;
        gap:20px;
        z-index: 1;
        color:#5E4747;
    }
    img{
        z-index: 0;
        height:700px;
       position: absolute;
        margin-left:35px;
        margin-bottom:35px;
    }
   
    </style>


<?php

if (isset($_POST['email'])) {
    $email = $_POST['email'];

    include("connct.php");
    $sql = "SELECT * FROM users WHERE Email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        $Name = $row['Full_name'];
        $email = $row['Email'];

    } else {
        echo 'User not found.';
    }
} else {
    header('Location: logIn.php');
}

?>



    
<div id="heading">
    <img src="sticky notes clipart.png" alt="">
    <div class="text">
         <h1 class="">Welcome <?php echo htmlspecialchars($_SESSION['Name']); ?></h1>
         <p>Check you info please.</p>


         <h3>Your Full Name Is </h3>
         <h3><?php echo htmlspecialchars($_SESSION['Name']); ?></h3>

         <h3>Your Email address Is </h3>
         <h3><?php echo htmlspecialchars($_SESSION['email']); ?></h3>

         <button type="submit" id="logIn" class="btn btn-outline-warning" name="submit">LogOut</button>
         <p>Contact the admin if you have any problem.</p>

         <p>00962789795953</p>


    </div>

</div>


?>
</body>
</html>