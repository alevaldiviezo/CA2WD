<?php
include('../../private/session.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/styles.css" />
    <title>CV: John snel</title>
    <meta http-equiv="refresh" content="30">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <div class="row">
        <div class="column">
            <p class="white">
                30-34 Westmoreland St, Dublin, D02 HK35 &nbsp Tel: 0812345678 &nbsp
            </p>
        </div>
        <div class="column" style="text-align:right" vertical-align: middle;>
            <a class="logout" href="logout.php">logout</a>
        </div>
    </div>
    <div class="header">

    </div>
    <div>
        <ul class="ourNavbar">
            <li><a href="../index.php">Home</a></li>
            <li><a href="../page2.php">Page 2</a></li>
            <li class="active"><a href="../page3.php">Page 3</a></li>
            <li><a href="../page4.php">Page 4</a></li>
            <li><a href="../page5.php">Page 5</a></li>
        </ul>
    </div>

    <h2 class="colourband">Page 3</h2>

    <div class="clearfix">


        <p class="padding">Edit username: <?php echo $_GET['username']; ?></p>


        <?php

        // Get info for record

        $sql = "SELECT fname, lname, username, password FROM user WHERE username='" . $_GET['username'] . "'";
        $result = mysqli_query($connection, $sql);
        $row = mysqli_fetch_assoc($result);


        if ($_SERVER['REQUEST_METHOD'] == 'GET') {

            // Handle form values sent by page3.php
            $first_name = $row['fname'];
            $last_name = $row['lname'];
            $username = $row['username'];
            $email = $row['email'];
            $password = $row['password'];
        } else if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            //UPDATE record
            $user = [];
            $user['fname'] = mysqli_real_escape_string($connection, $_POST['first_name']);
            $user['lname'] = mysqli_real_escape_string($connection, $_POST['last_name']);
            $user['username'] = mysqli_real_escape_string($connection, $_POST['username']);
            $user['email'] = mysqli_real_escape_string($connection, $_POST['email']);
            $user['password'] = mysqli_real_escape_string($connection, $_POST['password']);

            $sql = "UPDATE users SET ";
            $sql .= "fname='" . $user['fname'] . "', ";
            $sql .= "lname='" . $user['lname'] . "', ";
            $sql .= "username='" . $user['username'] . "', ";
            $sql .= "email='" . $user['email'] . "', ";
            $sql .= "password='" . $user['password'] . "' ";
            $sql .= "WHERE username='" . $_GET['username'] . "' ";



            $result = mysqli_query($connection, $sql);
            // For UPDATE statements, $result is true/false
            if ($result) {
                echo "record updated";
            } else {
                echo "record not updated";
                echo "Error: " . mysqli_error($connection);
            }
        }
        ?>


        <!-- Row data in Form -->
        <form method="post">
            <p>
                <label for="firstName">First Name:</label>
                <input type="text" name="first_name" id="firstName" value="<?php echo $first_name; ?>">
            </p>
            <p>
                <label for="lastName">Last Name:</label>
                <input type="text" name="last_name" id="lastName" value="<?php echo $last_name; ?>">
            </p>

            <p>
                <label for="username">User name:</label>
                <input type="text" name="username" id="username" value="<?php echo $username; ?>">
            </p>
            <p>
                <label for="emailAddress">Email Address:</label>
                <input type="text" name="email" id="emailAddress" value="<?php echo $email; ?>">
            </p>
            <p>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" value="<?php echo $password; ?>">
            </p>
            <input type="submit" value="Submit">
        </form>



    </div>
    <br />
    <div style="text-align:center" class="footer">


    </div>

</body>

</html>