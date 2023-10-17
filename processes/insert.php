<?php
require_once('conn.php');

if(isset($_POST['submit'])){
    // --------children's info--------
    $gender = $_POST['gender_c'];
    $surname = $_POST['surname_c'];
    $firstname = $_POST['firstname_c'];
    $middlename = $_POST['middlename_c'];
    $email = $_POST['email_c'];
    $date_of_birth = $_POST['date_of_birth_c'];
    $place_of_birth = $_POST['place_of_birth_c'];
    $residential_address = $_POST['residential_address_c'];
    $house_number = $_POST['house_number_c'];


// ----------parent's Info ---------

    $gender = $_POST['gender_c'];
    $title = $_POST['title_c'];
    $surname = $_POST['surname_c'];
    $firstname = $_POST['firstname_c'];
    $middlename = $_POST['middlename_c'];
    $email = $_POST['email_c'];
    $date_of_birth = $_POST['date_of_birth_c'];
    $place_of_birth = $_POST['place_of_birth_c'];
    $residential_address = $_POST['residential_address_c'];
    $house_number = $_POST['house_number_c'];
    
// || empty($residential_address) || empty($email) || empty($house_number)


    $query = "INSERT INTO student(gender, title, surname, firstname, middlename, email, date_of_birth, place_of_birth, residential_address, secret_code) 
    VALUES ('$gender', '$title', '$surname',  '$firstname', '$middlename', '$email', '$date_of_birth', '$place_of_birth', '$residential_address', '$secret_code')";

    $result = mysqli_query($conn, $query);

    if($result){
        header("Location: view.php");
    }else{
        echo "There is an error in your QUERY statement. Please try again";
    }

}
else{
    header("location: index.php");
}
?>