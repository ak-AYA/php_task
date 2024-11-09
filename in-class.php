<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_SESSION["users"])) {
        $_SESSION['users'] = [];
    }

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $newUser = [
        "name" => $username,
        "email" => $email,
        "password" => $password,
    ];
    $_SESSION["users"][] = $newUser;

    echo '<h2>Users</h2><table id="usersTable" border="1">';
    echo '<tr><th>Username</th><th>Email</th><th>Password</th></tr>';
    foreach ($_SESSION["users"] as $user) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($user["name"]) . '</td>';
        echo '<td>' . htmlspecialchars($user["email"]) . '</td>';
        echo '<td>' . htmlspecialchars($user["password"]) . '</td>';
        echo '</tr>';
    }
    echo '</table>';
}
?>
<button onclick="toggleTable()"> Reset </button>
<form method="post">
<br><br><label for="username">Username: </label><input type="text" name="username"><br><br>
    <label for="email">Email: </label><input type="email" name="email"><br><br>
    <label for="password">Password: </label><input type="password" name="password"><br><br>
    <input type="submit" value="Check" name="button"><br><br>

   

</form>

<script>

function toggleTable() {
    let table = document.getElementById("usersTable");
    if (table.style.display === "none") {
        table.style.display = "block";
    } else {
        table.style.display = "none";
    }
}
</script>





</body>
</html>