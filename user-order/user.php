<?php
include('./structure/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Users</title>
</head>
<body>
    <div class="container mt-5">
        <table class="table table-striped table-hover table-bordered border-primary">
            <thead>
                <tr>
                    <th scope="col">User Id</th>
                    <th scope="col">User Name</th>
                    <th scope="col">User Mobile</th>
                    <th scope="col">User Email</th>
                    <th scope="col">User Address</th>
                </tr>
            </thead>
            <tbody>

</html>

<?php 
include "connection.php"; 
    $query = "SELECT * FROM `users`";
    $statment = $dbconnection->query($query);
    $statment->execute();

    $users = $statment->fetchAll(PDO::FETCH_ASSOC);

foreach ($users as $user) {
        echo "<tr>
             <td>{$user['user_id']}</td>
             <td>{$user['user_name']}</td>
             <td>{$user['user_mobile']}</td>
             <td>{$user['user_email']}</td>
             <td>{$user['user_address']}</td>
        </tr>";
}
 
 if ($statment->rowCount() == 0) {
   echo "<tr><td colspan='5'>Table is empty</td></tr>";
   }
?>


            </tbody>
        </table>
    </div>
</body>


<?php
include('./structure/footer.php');
?>