<?php
    require_once("conn.php");
    $query = "SELECT * FROM student";
    $result = mysqli_query($conn, $query);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
    <!-- Link the custom CSS file -->
    <link rel="stylesheet" href="view.css">
    <link rel="shortcut icon" href="bg_img.jpeg">
    <link rel="shortcut icon" href="fact.png" type="image/x-icon">

</head>

<body>
            
    
        <h1>All Applicants</h1>
        <h2><a href="index.php">+ Register</a></h2>
        <table>
            <thead>
                <tr>
                    <th>Student ID</th>
                    <th>Programme</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Date Of Birth</th>
                    <th>Place Of Birth</th>
                    <th>User Name</th>
                    
                    <th class="action" >Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
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
                ?>
                    <tr>
                        <td><?php echo $id ?></td>
                        <td><?php echo $programme  ?></td>
                        <td><?php echo "$title $surname   $firstname  $middlename"  ?></td>
                        <td><?php echo $email ?></td>
                        <td><?php echo $date_of_birth  ?></td>
                        <td><?php echo $place_of_birth  ?></td>
                        
                        <td><?php echo $username ?></td>
                        <td> 
                            <a class="update" href="edit.php?GetID=<?php echo $id ?>">Update Record</a>
                            <a class="delete" href="delete.php?Del=<?php echo $id ?>">Delete</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>

</body>

</html>
