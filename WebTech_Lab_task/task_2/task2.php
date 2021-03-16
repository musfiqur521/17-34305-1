<!DOCTYPE HTML>
<html>

<head>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>

<body>

    <?php

    $nameErr = $emailErr = $genderErr = "";
    $name = $email = $gender = $degree = $date = $blood = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);

            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $nameErr = "Only letters and white space allowed";
            }
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }

        if (empty($_POST["date"])) {
        } else {
            $date = test_input($_POST["date"]);
        }





        
        if (isset($_POST['submit']) && (!empty($_POST['blood']))) {
            $blood = $_POST['blood'];
        }

        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = test_input($_POST["gender"]);
        }

                if (empty($_POST["degree"])) {
            $degree = "Gender is required";
        } else {
            $gender = test_input($_POST["degree"]);
        }
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <h2>PHP Form Validation Example</h2>
    <p><span class="error">* required field</span></p>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Name: <input type="text" name="name">
        <span class="error">* <?php echo $nameErr; ?></span>
        <br><br>
        E-mail: <input type="text" name="email">
        <span class="error">* <?php echo $emailErr; ?></span>
        <br><br>

        <tr>
            <td>

                <label>Date of Birth</label>

            </td>
            <td>
                <input type="Date" name="date">
            </td>
        </tr>
        Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other
        <span class="error">* <?php echo $genderErr; ?></span>
        <br><br>
        Degree:
        <input type="radio" name="degree" value="ssc">SSC
        <input type="radio" name="degree" value="hhc">HSC
        <input type="radio" name="degree" value="bsc">BSc
        <input type="radio" name="degree" value="msc">MSc

        <table>

            <tr>
                <td>
                    <label>Blood Group</label>

                </td>
                <td>
                    <select name="blood">
                        <option value="A+VE">A+VE</option>
                        <option value="A-VE">A-VE</option>
                        <option value="B+VE">B+VE</option>
                        <option value="B-VE">B-VE</option>
                        <option value="O+VE">O+VE</option>
                        <option value="O-VE">O-VE</option>
                        <option value="AB+VE">AB+VE</option>
                        <option value="AB-VE">AB-VE</option>
                    </select>
                </td>

            </tr>
        </table>



        <input type="submit" name="submit" value="Submit">


    </form>







    <?php
    echo "<h2>Your Input:</h2>";

    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $degree;
    echo "<br>";
    echo $date;
    echo "<br>";

    echo $gender;
    echo "<br>";
    echo $blood;
    echo "<br>";
    ?>

</body>

</html>