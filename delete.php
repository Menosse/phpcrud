<?php
    include "config.php";

    if(isset($_GET['id'])){
        $user_id = $_GET['id'];
        $sql = "DELETE FROM users WHERE users.id=$user_id";
        $result = $conn->query($sql);

        if($result == TRUE){
            echo "Record deleted successfully";
            header('location:view.php');
        }else{
            echo "Error:" . $sql . $conn->error;
        }
    }
?>