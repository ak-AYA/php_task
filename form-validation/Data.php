<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data</title>
</head>
<body>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    #heading {
        background-color: #fce8ef;
        width: 100%;
        margin: auto;
        padding: auto;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        border: 2px solid transparent;
        border-radius: 5px;
        transition: border-color 0.3s ease;
    }

    button {
        padding: 5px;
        background-color: #fce8ef;
    }

    #usersTable {
        background-color: #e5e5e5;
        margin-top: 20px;
    }

    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 10px;
    }
</style>

<div id="heading">
    <h2>Users</h2>

    <?php
    require("connct.php");

   
    $query = "SELECT * FROM users";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    
    if (empty($users)) {
        echo "empty table";
    } else {
        echo '<table id="usersTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>';

        
        foreach ($users as $user) {
            
            $Id = $user['Id'];
            $full_name = isset($user['Full_name']) ? $user['Full_name'] : '';
            $email = isset($user['Email']) ? $user['Email'] : '';
            $mobile = isset($user['Mobile']) ? $user['Mobile'] : '';
            $image = isset($user['image']) && !empty($user['image']) ? "./{$user['image']}" : 'default_image.png';

            echo "<tr>
                    <td>{$Id}</td>
                    <td>{$full_name}</td>
                    <td>{$email}</td>
                    <td>{$mobile}</td>
                    <td><img src='{$image}' alt='User Image' style='width:100px;'></td>
                    <td><a href='./feature/update_page.php?id={$Id}' class='btn btn-primary'>Edit</a></td>
                    <td><a href='./feature/delete.php?id={$Id}' class='btn btn-danger'>Delete</a></td>
                  </tr>";
        }

        echo '</tbody></table>';
    }

    ?>
</div>



<script>
function editUser(index) {
    let table = document.getElementById("usersTable");
    let row = table.rows[index + 1];

    for (let i = 0; i < row.cells.length - 2; i++) {
        let cell = row.cells[i];
        let oldValue = cell.innerHTML;
        cell.innerHTML = `<input type="text" value="${oldValue}">`;
    }

    row.cells[row.cells.length - 2].innerHTML = `<button onclick="saveUser(${index})">Save</button>`;
}

function saveUser(index) {
    let table = document.getElementById("usersTable");
    let row = table.rows[index + 1];

    for (let i = 0; i < row.cells.length - 2; i++) {
        let input = row.cells[i].querySelector('input');
        row.cells[i].innerHTML = input.value; 
    }

    row.cells[row.cells.length - 2].innerHTML = `<button onclick="editUser(${index})">Edit</button>`;
}

function deleteUser(index) {
    if (confirm("Are you sure you want to delete this user?")) {
        let table = document.getElementById("usersTable");
        table.deleteRow(index + 1);
    }
}
</script>

</body>
</html>
