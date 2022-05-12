<?php
    include "config.php";
    $id=$_GET['id'];
    $sql="SELECT * FROM users WHERE id=$id";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    $first_name = $row['firstname'];
    $last_name = $row['lastname'];
    $email = $row['email'];
    $password = $row['password'];
    $gender = $row['gender'];


    if(isset($_POST['submit'])){
        $first_name = $_POST['firstname'];
        $last_name = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        
        $sql = "UPDATE users SET firstname = '$first_name', lastname = '$last_name', email = '$email', password = '$password', gender = '$gender' WHERE id = $id";
        // $result = $conn->query($sql);
        $result = mysqli_query($conn,$sql);
        if($result == TRUE){
            echo "Updated successfully";
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
                <input type="text" name="firstname" value=<?php echo $first_name; ?>>
                <br>
                Last Name:<br>
                <input type="text" name="lastname" value=<?php echo $last_name; ?>>
                <br> 
                Email:<br>
                <input type="text" name="email" value=<?php echo $email; ?>>
                <br>
                Password:<br>
                <input type="password" name="password" value=<?php echo $password; ?>>
                <br>
                Gender<br>
                <input type="radio" name="gender" value="Male" <?php if($gender == 'Male') {echo "checked";} ?>> Male
                <input type="radio" name="gender" value="Female" <?php if($gender == 'Female') {echo "checked";} ?>> Female
                <br><br>
                <button type="submit" class="btn btn-primary" name="submit" value="submit">Update</button>
            </fieldset>
        </form>
        </div>
        </div>
    </body>
</html>
