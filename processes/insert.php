<?php
require_once('conn.php');

if(isset($_POST['submit'])){
    $gender = $_POST['gender'];
    $title = $_POST['title'];
    $surname = $_POST['surname'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $email = $_POST['email'];
    $date_of_birth = $_POST['date_of_birth'];
    $place_of_birth = $_POST['place_of_birth'];
    $residential_address = $_POST['residential_address'];
    $house_number = $_POST['house_number'];
    $secret_code = $_POST['secret_code'];
    
// || empty($residential_address) || empty($email) || empty($hashedhouse_number)
    if (empty($gender) || empty($title) || empty($surname) || empty($firstname) || empty($middlename) || empty($email) || empty($date_of_birth) || empty($place_of_birth) || empty($residential_address)){
        echo "Please fill in the blank spaces";
    }else{

        $query = "INSERT INTO student(gender, title, surname, firstname, middlename, email, date_of_birth, place_of_birth, residential_address, secret_code) 
        VALUES ('$gender', '$title', '$surname',  '$firstname', '$middlename', '$email', '$date_of_birth', '$place_of_birth', '$residential_address', '$secret_code')";

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