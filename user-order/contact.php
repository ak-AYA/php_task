
<?php
include('./structure/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div  class="container" style="margin-top:10px;" >
<div class="form-floating mb-3">
  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
  <label for="floatingInputDisabled">Email address</label>
</div>

<div class="form-floating mb-3">
  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
  <label for="floatingInputDisabled">User Name</label>
</div>

<div class="form-floating mb-3">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
  <label for="floatingTextarea2Disabled">Leave a comment here</label>
</div>

<button type="button" class="btn btn-outline-dark text-uppercase ">Send Your Message</button>



</div>

</body>
</html>
<?php
include('./structure/footer.php');
?>
