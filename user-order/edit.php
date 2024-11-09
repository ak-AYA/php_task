<?php
include('./structure/header.php');
?>
<?php

require('connection.php');

if(isset($_GET['id'])){
    $id=$_GET['id'];

    $query="SELECT * FROM `items` WHERE `item_id`=:id";

    $statment=$dbconnection->prepare($query);
    $statment->bindParam(':id',$id,PDO::PARAM_INT);
    $statment->execute();

    $item=$statment->fetch(PDO::FETCH_ASSOC);
 

}

if(isset($_POST['edit_item'])){
    $item_description=$_POST['item_description'];
    $item_image=$_POST['item_image'];
    $item_total_number=$_POST['item_total_number'];
    $id=$_POST['id'];

    
    $query="UPDATE `items` SET `item_description`=:item_description,`item_image`=:item_image,`item_total_number`=:item_total_number WHERE `item_id`=:item_id";

    $statment=$dbconnection->prepare($query);
    $statment->bindParam(':item_description',$item_description);
    $statment->bindParam(':item_image',$item_image);
    $statment->bindParam(':item_total_number',$item_total_number);
    $statment->bindParam(':item_id',$id);

    // $statment->execute();
if($statment->execute()){
    echo "Update Item Successfully";
}else{
    echo "Failed To update Item";
}

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    


<div class="container mt-5">
<div class="admin-product-form-container">
    <form action="edit.php" method="post">
    <input type="hidden" class="form-control" name="id" id="id" aria-describedby="id"
    value=<?php echo $item['item_id']??'';?>>
        <div class="mb-3">
            <label for="item_description">Item description</label>
            <input type="text" class="form-control" name="item_description" id="item_description" aria-describedby="item_description"
                value=<?php echo $item['item_description']??'';?>>
        </div>
        <div class="mb-3">
            <label for="item_image">Item Image</label>
            <input type="file" class="form-control" id="formGroupExampleInput2" accept="image/jpg, image/png, image/jpeg" placeholder="Product Image"
                value=<?php echo $item['item_image']??'';?>>
        </div>
        <div class="mb-3">
            <label for="item_total_number">Item total number</label>
            <input type="text" class="form-control" id="item_total_number" aria-describedby="item_total_number" placeholder="item_total_number" name="item_total_number"
                value=<?php echo $item['item_total_number']??'';?>>
        </div>
      
        
        <input type="submit" class="btn btn-success" name="edit_item" value="SAVE">
    </form>
    
</div>
</div>
</body>
</html>

<?php
include('./structure/footer.php');
?>