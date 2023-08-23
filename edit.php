<?php
require_once("conn.php");
$id = $_GET['GetID'];

$query = "SELECT * FROM student WHERE id = '".$id."'";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)){
    $id = $row['id'];
    $title = $row['title'];
    $programme = $row['programme'];
    $surname = $row['surname'];
    $firstname = $row['firstname'];
    $middlename = $row['middlename'];
    $username = $row['username'];
    $email = $row['email'];
    $date_of_birth = $row['date_of_birth'];
    $place_of_birth = $row['place_of_birth'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <form action="update.php?ID=<?php echo $id ?>" method ="POST">
        <h2>ADMISSION FORM</h2>
        <p>Applicants should indicate by ticking the preferred as specified here.</p>

        <p>Undergraduate Programme<p>
            <input type="radio" name="programme" id="" value="Degree">Degree<br>
            <input type="radio" name="programme" id="" value="Diploma">Diploma

            <fieldset>
                <legend>A. Biodata (Application details)</legend>
                <p>Applicant's name must correspond to those used for all examinations taken</p>
                <table>
                    <tr>
                        <td>Title (Mr./Mrs./Ms.)</td>
                        <td>
                            <select name="title" id="title">
                                <option value="0">Select...</option>
                                <option value="mr">Mr.</option>
                                <option value="mrs">Mrs.</option>
                                <option value="ms">Ms.</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td><input type="text" name="surname" id="surname" placeholder="surname"  value="<?php echo $surname ?>"></td>
                        <td><input type="text" name="firstname" id="firstname" placeholder="Firstname" value="<?php echo $firstname ?>"></td>
                        <td><input type="text" name="middlename" id="middlename" placeholder="Middle Name" value="<?php echo $middlename ?>"></td>
                    </tr>
                    <tr>
                        <td>Enter email:</td>
                        <td><input type="email" name="email" id="email" placeholder="Enter email" value="<?php echo $email ?>"></td>
                    </tr>
                    <tr>
                        <td>Date of Birth: </td>
                        <td><input type="date" name="date_of_birth" id="date_of_birth" value="<?php echo $date_of_birth ?>"></td>
                    </tr>
                    <tr>
                        <td>Place of Birth:</td>
                        <td><input type="text" name="place_of_birth" id="place_of_birth" placeholder="Enter place of birth" value="<?php echo $date_of_birth ?>"></td>
                    </tr>
                </table>
            </fieldset>
            <fieldset>
                <table>
                    <tr>
                        <td>Username </td>
                        <td><input type="text" name="username" id="username" placeholder = "Enter Username" value="<?php echo $username ?>"></td>
                    </tr>
                    <tr>
                        <td>Password: </td>
                        <td><input type="password" name="password" id="password" placeholder = "password"></td>
                    </tr>
                    <tr>
                        <td>Secret Code: </td>
                        <td><input type="text" name="secret_code" id="secret_code" value="CUCG-001" readonly></td>
                    </tr>
                </table>
            </fieldset>
            <table>
                <tr>
                    <td><input type="submit" value="Update" name="update"></td>
                    <td><input type="reset" value="clear" name="clear"></td>
                    <td><td><a href="#"><button>Cancel</button></td></td>
                </tr>
            </table>
</div>
    </form>
</body>
</html>



