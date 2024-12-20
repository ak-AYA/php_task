<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container">


<div class="container">
        <div class="wrapper p-5 m-5">
            <div class="d-flex p-2 justify-content-between">
                <h2><?php echo $title; ?> user</h2>
                <div><a href="index.php"><i data-feather="corner-down-left"></i></a></div>
            </div>
            <form action="index.php" method="post" >
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" value="<?php echo $name; ?>"
                     placeholder="enter your name" name="name"
                        autocomplete="false">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control"  value="<?php echo $email; ?>"
                     placeholder="enter your email" name="email"
                        autocomplete="false">
                </div>
                <div class="mb-3">
                    <label class="form-label">Mobile</label>
                    <input type="tel" class="form-control"  value="<?php echo $mobile; ?>"
                    placeholder="enter your phone number" name="mobile"
                        autocomplete="false">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control"  value="<?php echo $password; ?>"
                    placeholder="password" name="password"
                        autocomplete="false">
                </div>
                <?php 
                
                if (isset($_GET['id'])){?>


                    <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">


             <?php   }
                
                ?>
                <input type="submit" class="btn btn-primary" value="<?php echo $btn_title; ?>" name="save">
            </form>
        </div>


</div>








    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace();
    </script>
</body>
</html>
