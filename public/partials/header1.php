<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link to the css archive -->
    <link rel="stylesheet" href="css/style.css">
    <!-- cdn in order to use bootstram-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- link to the javascript file to hide table -->
    <script src="js/hideTable.js"></script>
    <!--Title of the page-->
    <title>Alejandro Valdiviezo</title>
</head>
<body>
<!--header of the page to use as a nav bar with bootstrap classes-->
<header>
      <!--Use of nav-bar class and bg-dark class to change the color to dark using bootstrap-->
        <nav class="navbar navbar-dark bg-dark">
          <!--We create a list to add buttons to our nav bar--> 
            <ul class="nav nav-tabs">
                <li class="nav-item">
                  <!--we wrap with a command the Home list element to transform it in a button of our navbar and the same with the other list elements-->
                  <a class="nav-link active" href="home1.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="resumeInformation.php">Resume Information</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="tabledemo.php">Table Demo</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="freestyle.php">FreeStyle</a>
                </li>
               
              
            </ul> 
            <!--we assign the footer class to be able to change the font color with css-->
            <p class="footer">Alejandro Valdiviezo</p>
            <!--link to LinkedIn page using an image as a button-->
            <a href="https://www.linkedin.com/in/alejandro-valdiviezo-b085272b/"><img src="imgs/linkedin.png" width="20px"></a>
            <!-- <a href="login.php"><button class="btn btn-outline-secondary"> Log In</button></a> --> 
            <div>
            
              <ul class="nav footer">
                <li>Hi, <b><?php echo htmlspecialchars($_SESSION['username']); ?></b>. Welcome to our site.</li>
                <li><a href='logout.php' class='btn btn-danger'>Sign Out of Your Account</a></li>
                <!-- <?php if(!$connection){
                echo "<li><a href='login.php' class='btn btn-danger'>Sign in</a></li>";  
                echo "<li><a href='register.php' class='btn btn-danger'>Register</a></li>";
                } else{  
                echo "<li><a href='logout.php' class='btn btn-danger'>Sign Out of Your Account</a></li>"; 
                } ?>  -->  
              </ul>
            </div>    
        </nav>
        
    </header>