<?php
    include "config.php";
    $sql = "SELECT * FROM users";

    $result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="eng">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>View Page</title>
    </head>
    <body>
        <!-- <h2>users</h2> -->
        <div class="container">
            <a class="btn btn-primary my-5"href="create.php" class="text-light">Add User</a>
        </div>
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID:</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody
                    <?php
                    if($result->num_rows>0){
                        // while($row = $result->fetch_assoc()){
                        while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['firstname']; ?></td>
                        <td><?php echo $row['lastname']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['gender']; ?></td>
                        <td><a class="btn btn-primary" href="update.php?id=<?php echo $row['id']; ?>" class="text-light"> Edit </a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>" class="text-light"> Delete </a>
                    </td>
                    </tr>
                    <?php    }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>