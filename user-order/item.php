<?php
include('./structure/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<div class= container>
<body>
    <?php 

    require 'connection.php';
    $query = "SELECT * FROM `items` WHERE `is_deleted` = 0";
    $statment = $dbconnection->query($query);
    $statment->execute();

    $items = $statment->fetchAll(PDO::FETCH_ASSOC);

    if ($statment->rowCount() == 0) {
        echo 'Table is empty!';
    } else {
        echo '<table class="table">';
        echo '<thead class="table-dark">
                <tr>
                    <th scope="col">Item Id</th>
                    <th scope="col">Item Description</th>
                    <th scope="col">Item Image</th>
                    <th scope="col">Item Total Count</th>
                    <th scope="col" colspan="2">Action</th>
                </tr>
              </thead>';
        echo '<tbody>';
        foreach ($items as $item) {
            echo "<tr>
                <td>{$item['item_id']}</td>
                <td>{$item['item_description']}</td>
                <td>{$item['item_image']}</td>
                <td>{$item['item_total_number']}</td>
                <td><a href='edit.php?id={$item['item_id']}' class='btn btn-primary'>Edit</a></td>
                <td><a href='delete.php?id={$item['item_id']}' class='btn btn-danger'>Delete</a></td>
                  </tr>";
        }
        echo '</tbody>';
        echo '</table>';
    }
    ?>
    </div>
</body>
</html>
<?php
include('./structure/footer.php');
?>
