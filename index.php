<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="fact.png" type="image/x-icon">
</head>
<body>
    <div class="container">
    <form action="insert.php" method ="POST">
        <h2>ADMISSION FORM</h2>
        <p>Applicants should indicate by ticking the preferred as specified here.</p>

        <p>Undergraduate Programme<p>
            <input type="radio" name="programme" id="" value ="degree" >Degree<br>
            <input type="radio" name="programme" id="" value ="diploma">Diploma

            <fieldset>
                <legend>A. Biodata (Application details)</legend>
                <p>Applicant's name must correspond to those used for all examinations taken</p>
                <table>
                    <tr>
                        <td>Title (Mr./Mrs./Ms.)</td>
                        <td>
                            <select name="title" id="title">
                                <option value="">Select...</option>
                                <option value="Mr.">Mr.</option>
                                <option value="Mrs.">Mrs.</option>
                                <option value="Ms.">Ms.</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td><input type="text" name="surname" id="surname" placeholder="surname"></td>
                        <td><input type="text" name="firstname" id="firstname" placeholder="Firstname"></td>
                        <td><input type="text" name="middlename" id="middlename" placeholder="Middle Name"></td>
                    </tr>
                    <tr>
                        <td>Enter email:</td>
                        <td><input type="email" name="email" id="email" placeholder="Enter email"></td>
                    </tr>
                    <tr>
                        <td>Date of Birth: </td>
                        <td><input type="date" name="date_of_birth" id="date_of_birth"></td>
                    </tr>
                    <tr>
                        <td>Place of Birth:</td>
                        <td><input type="text" name="place_of_birth" id="place_of_birth" placeholder="Enter place of birth"></td>
                    </tr>
                </table>
            </fieldset>
            <fieldset>
                <table>
                    <tr>
                        <td>Username </td>
                        <td><input type="text" name="username" id="username" placeholder = "Enter Username"></td>
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
                    <td><input type="submit" value="Submit" name="submit"></td>
                    <td><input type="reset" value="clear" name="clear"></td>
                    <td><a href="#"><button>Cancel</button></td>
                </tr>
            </table>

    </form>
    </div>
</body>
</html>



