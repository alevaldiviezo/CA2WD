<!-- we call the session file with php  -->
<?php
   include('../private/session.php');
?>
<!-- include a properly header  -->
<?php include('partials/header1.php'); ?>

    <!--Use of the jumbotron class from Bootstrap to create a container as a presentation-->
    <div id="bnr" class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4"><strong>Alejandro Valdiviezo</strong></h1>
        <p class="lead"><b> Software Developing, Web Design, Network Administration and Databases.</b></p>
        <p class="lead">Industrial Engineering</p>
        <!--Use of images as a links to personal social networks-->
        <a href="https://www.linkedin.com/in/alejandro-valdiviezo-b085272b/"><img src="imgs/linkedin.png" width="40px"></a>
        <a href="https://www.instagram.com/cumpexem/"><img src="imgs/Instagram.jpg" width="40px"></a>
        <a href="https://www.facebook.com/alejandro.valdiviezo.92"><img src="imgs/Facebook.png" width="40px"></a>
        
      </div>
    </div>

    </div>
      <h3>CODE DEPARTMENT</h3>
      <div class="container">
        <div class>
          <!--We create a form with form-inline class to keep the input text and the button at the same level or in the same row-->
          <form class="form-inline" type="submit" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> <!-- we include the php action element in order to self processing form -->
          <!-- we select the department number from a list  -->
          <select type="submit" class="form-control mb-2 mr-sm-2" name="dname"> <!-- element name as a dname -->
            <option >Select number:</option>
            <option >d001</option>
            <option >d002</option>
            <option >d003</option>
            <option >d004</option>
            <option >d005</option>
            <option >d006</option>
            <option >d007</option>
            <option >d008</option>
            <option >d009</option>
          </select>
            
            
            <button type="submit" class="btn btn-primary mb-2" >search</button>
          </form>
          <br>
          <!-- we use php to collect the value introduced in the form  -->
          <?php error_reporting (E_ALL ^ E_NOTICE); // we include this line after php to prevent the Notice msg in the web page
            // $name variable including the dname reference
            $name = isset($_POST['dname']); // we include isset function to prevent Notice msgs
            if($_SERVER["REQUEST_METHOD"] == "POST"){
              //collect value
              $name = $_POST['dname'];
              if(empty($name)){
                echo "empty field"; //message if the value is empty

              }else{
                //echo $name;
              }
            }

            
            // we create a variable $con to enter to db 
            $con = mysqli_connect('localhost','root','','employees');
            if (!$con) {
                die('Could not connect: ' . mysqli_error($con));
            }
            // we select a db and create a query to retrieve the desired data 
            mysqli_select_db($con,"employees");
            $sql1="SELECT * FROM `departments` WHERE `dept_no` = '".$name."'";
            $result = mysqli_query($con,$sql1);
            // if the query give us a valid data we create the table 
            if(!empty($name)){

             
            echo "<table id='table'>
                  <tr>
                  <th>Department No.</th>
                  <th>Department Name</th>
                                 
                  </tr>";
            while($row = mysqli_fetch_array($result)) { // loop to fill up the table
              echo "<tr>";
              echo "<td>" . $row['dept_no'] . "</td>";
              echo "<td>" . $row['dept_name'] . "</td>";
              
              echo "</tr>";
            }
              echo "</table>";
          }
              mysqli_close($con); // close connection
            ?>
        </div>
        <!--another div tag to create a table inside of it, class center1 to keep centered with css-->
        <hr>
        
      
    </div>

    </div>
    <!-- we interact with the db as in the case above -->
      <h3>EMPLOYEE NAME AND GENDER</h3>
      <div class="container">
        <div class>
          <!--We create a form with form-inline class to keep the input text and the button at the same level or in the same row-->
          <form class="form-inline" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            
            <!-- in this case we introduce a value manually -->
            <input type="text" class="form-control mb-2 mr-sm-2" name="gname" placeholder="Employee number..." >
            <button type="submit" class="btn btn-primary mb-2" >search</button>
          </form>
          <br>
          
          <?php error_reporting (E_ALL ^ E_NOTICE); // we include this line after php to prevent the Notice msg in the web page
          // we use the name gname in this case
            $name = isset($_POST['gname']);
            if($_SERVER["REQUEST_METHOD"] == "POST"){
              //collect value
              $name = $_POST['gname'];
              if(empty($name)){
                echo "empty field";

              }else{
                //echo $name;
              }
            }

            
            

            $con = mysqli_connect('localhost','root','','employees');
            if (!$con) {
                die('Could not connect: ' . mysqli_error($con));
            }
            // sql query
            mysqli_select_db($con,"employees");
            $sql2="SELECT emp_no, first_name, last_name, gender FROM `employees` WHERE `emp_no` = '".$name."'";
            $result = mysqli_query($con,$sql2);
            if(!empty($name)){

            // buikt the table
            echo "<table id='table'>
                  <tr>
                  <th>Employee No.</th>
                  <th>Name</th>
                  <th>Surname</th>
                  <th>Gender</th>
                  
                  </tr>";
            while($row = mysqli_fetch_array($result)) { // fill up the table
              echo "<tr>";
              echo "<td>" . $row['emp_no'] . "</td>";
              echo "<td>" . $row['first_name'] . "</td>";
              echo "<td>" . $row['last_name'] . "</td>";
              echo "<td>" . $row['gender'] . "</td>";
              
              echo "</tr>";
            }
              echo "</table>";
          }
              mysqli_close($con); // close connection
            ?>
        </div>
        <hr>

      </div>
      
    </div>
    
    </div>
      <h3>SALARIES:</h3>
      <div class="container">
        <div class>
          <!--We create a form with form-inline class to keep the input text and the button at the same level or in the same row-->
          <form class="form-inline" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            
            
            <input type="text" class="form-control mb-2 mr-sm-2" name="Sname" placeholder="Employee number..." >
            <button type="submit" class="btn btn-primary mb-2" >search</button>
          </form>
          <br>
          
          <?php error_reporting (E_ALL ^ E_NOTICE); // we include this line after php to prevent the Notice msg in the web page
          // using the name Sname
            $name = isset($_POST['Sname']);
            if($_SERVER["REQUEST_METHOD"] == "POST"){
              //collect value
              $name = $_POST['Sname'];
              if(empty($name)){
                echo "empty field";

              }else{
                //echo $name;
              }
            }

            
            //accesing db

            $con = mysqli_connect('localhost','root','','employees');
            if (!$con) {
                die('Could not connect: ' . mysqli_error($con));
            }
            // query select
            mysqli_select_db($con,"employees");
            $sql2="SELECT emp_no, salary, from_date, to_date FROM `salaries` WHERE `emp_no` = '".$name."'";
            $result = mysqli_query($con,$sql2);
            if(!empty($name)){

            // build the table 
            echo "<table id='table'>
                  <tr>
                  <th>Employee No.</th>
                  <th>Salary</th>
                  <th>From</th>
                  <th>To</th>
                  
                  </tr>";
            while($row = mysqli_fetch_array($result)) { // filling up
              echo "<tr>";
              echo "<td>" . $row['emp_no'] . "</td>";
              echo "<td>" . $row['salary'] . "</td>";
              echo "<td>" . $row['from_date'] . "</td>";
              echo "<td>" . $row['to_date'] . "</td>";
              
              echo "</tr>";
            }
              echo "</table>";
          }
              mysqli_close($con); // close connection
            ?>
        </div>

        <hr>
      </div>
      
    </div>
    <!-- we use the same code schema for the following interactions   -->
    </div>
      <h3>TITLES:</h3>
      <div class="container">
        <div class>
          <!--We create a form with form-inline class to keep the input text and the button at the same level or in the same row-->
          <form class="form-inline" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            
            
            <input type="text" class="form-control mb-2 mr-sm-2" name="tname" placeholder="Employee number..." >
            <button type="submit" class="btn btn-primary mb-2" onclick="showEmp(this.value)">search</button>
          </form>
          <br>
          
          <?php error_reporting (E_ALL ^ E_NOTICE);
            $name = isset($_POST['tname']);
            if($_SERVER["REQUEST_METHOD"] == "POST"){
              //collect value
              $name = $_POST['tname'];
              if(empty($name)){
                echo "empty field";

              }else{
                //echo $name;
              }
            }

            
            

            $con = mysqli_connect('localhost','root','','employees');
            if (!$con) {
                die('Could not connect: ' . mysqli_error($con));
            }

            mysqli_select_db($con,"employees");
            $sql2="SELECT emp_no, title, from_date, to_date FROM `titles` WHERE `emp_no` = '".$name."'";
            $result = mysqli_query($con,$sql2);
            if(!empty($name)){

             
            echo "<table id='table'>
                  <tr>
                  <th>Employee No.</th>
                  <th>Title</th>
                  <th>From</th>
                  <th>To</th>
                  
                  </tr>";
            while($row = mysqli_fetch_array($result)) {
              echo "<tr>";
              echo "<td>" . $row['emp_no'] . "</td>";
              echo "<td>" . $row['title'] . "</td>";
              echo "<td>" . $row['from_date'] . "</td>";
              echo "<td>" . $row['to_date'] . "</td>";
              
              echo "</tr>";
            }
              echo "</table>";
          }
              mysqli_close($con);
            ?>
        </div>
        <hr>

      </div>
      
    </div>
   
    </div>
      <h3>MANAGEMENT:</h3>
      <div class="container">
        <div class>
          <!--We create a form with form-inline class to keep the input text and the button at the same level or in the same row-->
          <form class="form-inline" type="submit" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
          <select type="submit" class="form-control mb-2 mr-sm-2" name="mname">
            <option >Select number:</option>
            <option >d001</option>
            <option >d002</option>
            <option >d003</option>
            <option >d004</option>
            <option >d005</option>
            <option >d006</option>
            <option >d007</option>
            <option >d008</option>
            <option >d009</option>
          </select>
            
            <!-- <input type="text" class="form-control mb-2 mr-sm-2" name="dname" placeholder="Employee number..." > -->
            <button type="submit" class="btn btn-primary mb-2" onclick="showEmp(this.value)">search</button>
          </form>
          <br>
          
          <?php error_reporting (E_ALL ^ E_NOTICE);
            $name = isset($_POST['mname']);
            if($_SERVER["REQUEST_METHOD"] == "POST"){
              //collect value
              $name = $_POST['mname'];
              if(empty($name)){
                echo "empty field";

              }else{
                //echo $name;
              }
            }

            
            //$q = $_REQUEST['q'];

            $con = mysqli_connect('localhost','root','','employees');
            if (!$con) {
                die('Could not connect: ' . mysqli_error($con));
            }

            mysqli_select_db($con,"employees");
            $sql2="SELECT dept_no, emp_no, from_date, to_date FROM `dept_manager` WHERE `dept_no` = '".$name."'";
            $result = mysqli_query($con,$sql2);
            if(!empty($name)){

             
            echo "<table id='table'>
                  <tr>
                  <th>Department</th>
                  <th>Employee No.</th>
                  
                  <th>From</th>
                  <th>To</th>
                  
                  </tr>";
            while($row = mysqli_fetch_array($result)) {
              echo "<tr>";
              echo "<td>" . $row['dept_no'] . "</td>";
              echo "<td>" . $row['emp_no'] . "</td>";
              
              echo "<td>" . $row['from_date'] . "</td>";
              echo "<td>" . $row['to_date'] . "</td>";
              
              echo "</tr>";
            }
              echo "</table>";
          }
              mysqli_close($con);
            ?>
        </div>
        <hr>

      </div>

    </div>
    <!--Same footer-->
<?php include('partials/footer.php'); ?>