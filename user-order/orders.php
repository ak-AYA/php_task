
<?php
include('./structure/header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<div class= container>
<body>
<?php
include "connection.php"; 


$query = "
    SELECT oreders.order_id, users.user_name, items.item_description
    FROM oreders
    JOIN users ON oreders.user_order_id = users.user_id
    JOIN items ON oreders.user_item_order_id = items.item_id
"; 

$statement = $dbconnection->prepare($query);
$statement->execute();

$results = $statement->fetchAll(PDO::FETCH_ASSOC);

if ($results) {
    
    echo "<table class='table'>";
    echo "<thead class= 'table-dark'>
            <tr>
                <th>Order ID</th>
                <th>User Name</th>
                <th>Item Description</th>
            </tr>
          </thead>
          <tbody>";
    foreach ($results as $row) {
        echo "<tr>
            <td>{$row['order_id']}</td>
            <td>{$row['user_name']}</td>
            <td>{$row['item_description']}</td>
            </tr>";
    }
    echo "</tbody></table>";
} else {
    echo "<table class='table'>";
    echo "<thead>
            <tr>
                 <th>No items found.</th>
            </tr>
          </thead>
          <tbody>";
    echo "</tbody></table>";
}

?>
</div>
</body>
</html>
<?php
include('./structure/footer.php');
?>