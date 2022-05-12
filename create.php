<?php
    include "config.php";

    if(isset($_POST['submit'])){
        $first_name = $_POST['firstname'];
        $last_name = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        
        $sql = "INSERT INTO users (firstname, lastname, email, password, gender) VALUES ('$first_name', '$last_name', '$email', '$password', '$gender')";
        // $result = $conn->query($sql);
        $result = mysqli_query($conn,$sql);
        if($result == TRUE){
            // echo "New record created successfully";
            header('location:view.php');
        }
        else{
            echo "Error:" . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
?>

<!DOCTYPE html>
<html lang="eng">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
        <div class=form-group></div>
        <form action="" method="POST">
            <fieldset>
                <legend> Personal Information:</legend>
                First Name:<br>
                <input type="text" name="firstname">
                <br>
                Last Name:<br>
                <input type="text" name="lastname">
                <br>
                Email:<br>
                <input type="text" name="email">
                <br>
                Password:<br>
                <input type="password" name="password">
                <br>
                Gender<br>
                <input type="radio" name="gender" value="Male"> Male
                <input type="radio" name="gender" value="Female"> Female
                <br><br>
                <input class="btn btn-primary" type="submit" name="submit" value="submit">
            </fieldset>
        </form>
        </div>
        </div>
    </body>
</html>
