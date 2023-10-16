<?php
require_once('conn.php');

if(isset($_POST['submit'])){
    $programme = $_POST['programme'];
    $title = $_POST['title'];
    $surname = $_POST['surname'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $email = $_POST['email'];
    $date_of_birth = $_POST['date_of_birth'];
    $place_of_birth = $_POST['place_of_birth'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $secret_code = $_POST['secret_code'];
    
// || empty($username) || empty($email) || empty($hashedpassword)
    if (empty($programme) || empty($title) || empty($surname) || empty($firstname) || empty($middlename) || empty($email) || empty($date_of_birth) || empty($place_of_birth) || empty($username)){
        echo "Please fill in the blank spaces";
    }else{

        $query = "INSERT INTO student(programme, title, surname, firstname, middlename, email, date_of_birth, place_of_birth, username, secret_code) 
        VALUES ('$programme', '$title', '$surname',  '$firstname', '$middlename', '$email', '$date_of_birth', '$place_of_birth', '$username', '$secret_code')";

        $result = mysqli_query($conn, $query);

        if($result){
            header("Location: view.php");
        }else{
            echo "There is an error in your QUERY statement. Please try again";
        }

    }
}
else{
    header("location: index.php");
}
?>