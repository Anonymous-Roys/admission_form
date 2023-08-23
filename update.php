<?php
require_once("conn.php");
if (isset($_POST['update'])) {
    $id = $_GET['ID'];
     $title = $_POST['title'];
    $programme = $_POST['programme'];
    $surname = $_POST['surname'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $date_of_birth = $_POST['date_of_birth'];
    $place_of_birth = $_POST['place_of_birth'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $query = "UPDATE student SET title = '".$title."', programme='".$programme."', surname='".$surname."', firstname='".$firstname."', middlename='".$middlename."',
    username='".$username."', email='".$email."', date_of_birth ='".$date_of_birth."', place_of_birth='".$place_of_birth."',
    password='".$password."' WHERE id = '".$id."'";

    $result = mysqli_query($conn, $query);

    if ($result){
        header("location:view.php");

    }else{
        echo "please check your query and try again";
    }
}else{
    header("location:view.php");
}

?>