<?php
   include('../private/session.php');
?>
<!-- include header -->
<?php include('partials/header1.php'); ?>

    <!--We use bnr Id to give to this section a backgound image-->
    <!--Same jumbotron section than in the other pages-->
    <div id="bnr" class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4"><strong>Alejandro Valdiviezo</strong></h1>
        <p class="lead"><b> Software Developing, Web Design, Network Administration and Databases.</b></p>
        <p class="lead">Industrial Engineering</p>
        <a href="https://www.linkedin.com/in/alejandro-valdiviezo-b085272b/"><img src="imgs/linkedin.png" width="40px"></a>
        <a href="https://www.instagram.com/cumpexem/"><img src="imgs/Instagram.jpg" width="40px"></a>
        <a href="https://www.facebook.com/alejandro.valdiviezo.92"><img src="imgs/Facebook.png" width="40px"></a>
        
      </div>
    </div>
    <div class="container">
      <h3>DEPARTMENT INFORMATION</h3>
      <!--class center to keep the button at the center of the section and row to have the two elements aligned in the same row-->
      <div class="center row">
        <!--col-md-6 to divide the row in two same size spaces-->
        <div class="col-md-6">
          <!--In the button we call the hideTable function when we press it-->
          <!-- <button type="button" class="btn btn-primary" onclick="hideTable()">Department</button> -->
          <button type="button" class="btn btn-primary" onclick="hideTable()">Show Department</button>
        </div >
        
          <?php
            
            // Access DB
            $con = mysqli_connect('localhost','root','','employees');
            if (!$con) {
                die('Could not connect: ' . mysqli_error($con));
            }
            //Query selector
            mysqli_select_db($con,"employees");
            $sql="SELECT * FROM departments";
            $result = mysqli_query($con,$sql);
            // Creating a table
            echo "<table id='table'>
                  <tr>
                  <th>Department Number</th>
                  <th>Department Name</th>
                  
                  </tr>";
            while($row = mysqli_fetch_array($result)) { // loop to fill up the table
              echo "<tr>";
              echo "<td>" . $row['dept_no'] . "</td>";
              echo "<td>" . $row['dept_name'] . "</td>";
              
              echo "</tr>";
            }
              echo "</table>";
              mysqli_close($con); // close connection
            ?>
        

      </div>
      <h3>EMPLOYEE INFORMATION</h3>
      <div class="center">
        <div class>
          <!--We create a form with form-inline class to keep the input text and the button at the same level or in the same row-->
          <!-- include php line in action element  -->
          <form class="form-inline" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            
            <!-- introduce the value in order to get the desired info  -->
            <input type="text" class="form-control mb-2 mr-sm-2" name='fname' placeholder='Employee number...' >
            <button type="submit" class="btn btn-primary mb-2" >search</button>
          </form>
          <br>
          
          <!-- insert and get the info with fname as a parameter -->
          <?php
            $name = isset($_POST['fname']);
            if($_SERVER["REQUEST_METHOD"] == "POST"){
              //collect value
              $name = $_POST['fname'];
              if(empty($name)){
                echo "empty field";

              }else{
                //echo $name;
              }
            }
            
            
            // Access to the DB

            $con = mysqli_connect('localhost','root','','employees');
            if (!$con) {
                die('Could not connect: ' . mysqli_error($con));
            }
            // Query selector
            mysqli_select_db($con,"employees");
            $sql="SELECT * FROM `dept_emp` WHERE `emp_no` = '".$name."'";
            $result = mysqli_query($con,$sql);
            // if there is some information retrieved create a table and fill up this table
            if(!empty($name)){

             
            echo "<table id='table'>
                  <tr>
                  <th>Employee No.</th>
                  <th>Department No.</th>
                  <th>From</th>
                  <th>To</th>
                  
                  </tr>";
            while($row = mysqli_fetch_array($result)) {
              echo "<tr>";
              echo "<td>" . $row['emp_no'] . "</td>";
              echo "<td>" . $row['dept_no'] . "</td>";
              echo "<td>" . $row['from_date'] . "</td>";
              echo "<td>" . $row['to_date'] . "</td>";
              
              echo "</tr>";
            }
              echo "</table>";
          }
              mysqli_close($con); // close connection
            ?>
        </div>
        <!--another div tag to create a table inside of it, class center1 to keep centered with css-->
        <div class="center1">
          
          
        </div>  
            
          
        
        

      </div>
      
    </div>
<!--Same footer-->
<?php include('partials/footer.php'); ?>