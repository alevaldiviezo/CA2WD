<?php
   include('../../private/session.php');
?>
<!DOCTYPE html>
<html>
    <head>       
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../css/styles.css"/>
    <title>CV: John snel</title>
    <meta http-equiv="refresh" content="30">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        
    </head>
    
    <body>
    <div class="row"> 
        <div class="column"><p class="white">
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
            <li><a href="./index.php">Home</a></li>
            <li><a href="./page2.php">Page 2</a></li>
            <li class="active"><a href="../page3.php">Page 3</a></li>
            <li><a href="./page4.php">Page 4</a></li>
            <li><a href="./page5.php">Page 5</a></li>
        </ul>
    </div>
        
        <h2 class="colourband">Page 3</h2>

        <div class="clearfix">


            <p class="padding">Are you sure you want to detele username: <?php echo $_GET['username']; ?></p>
           
            <a href="#">YES</a>
            <a href="#">NO</a>

        </div>
        <br/>   
        <div style="text-align:center" class="footer">
            

        </div>
                
    </body>
</html> 