<?php
require_once("conn.php");

if (isset($_GET['Del'])){
    $id = $_GET['Del'];

    $query = "DELETE FROM student WHERE id = '$id'";

    $result = mysqli_query($conn, $query);  

    if ($result){
        header("location: view.php");
    }else{
        echo "Please check your query";

    }

}else{
    header("location: view.php");
}

?>
