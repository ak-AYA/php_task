<?php
include('./structure/header.php');
?>
<?php
require('connection.php');


if (isset($_GET['id'])){
    $item_id=$_GET['id'];

    $query="UPDATE `items` SET `is_deleted` = 1 WHERE `item_id`=:item_id";
    $statment=$dbconnection->prepare($query);
    $statment->bindParam(':item_id',$item_id,PDO::PARAM_INT);

    if ($statment->execute()) {
        echo  "Item is deleted.";
    }else{
        echo "Failed to delete item.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>
<div class="--bs-danger-border-subtle">
    
</div>
</body>
</html>
<?php
include('./structure/footer.php');
?>