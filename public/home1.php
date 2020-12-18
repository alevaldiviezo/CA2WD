<!-- we call the session file with php  -->
<?php
   include('../private/session.php');
?>
<!-- include a header  -->
<?php include('partials/header1.php'); ?>
  
    
    <!--Use of the jumbotron class from Bootstrap to create a container as a presentation-->
    <div id="bnr" class="jumbotron jumbotron-fluid"> <!--Use of bnr id to give an image background with css-->
    
      <div class="container">
        <h1 class="display-4"><strong>Alejandro Valdiviezo</strong></h1>
        <p>Student Number: 2020399</p>
        <p class="lead"><b> Software Developing, Web Design, Network Administration and Databases.</b></p>
        <p class="lead">Industrial Engineering</p>
        <!--Use of images as a links to personal social networks-->
        <a href="https://www.linkedin.com/in/alejandro-valdiviezo-b085272b/"><img src="imgs/linkedin.png" width="40px"></a>
        <a href="https://www.instagram.com/cumpexem/"><img src="imgs/Instagram.jpg" width="40px"></a>
        <a href="https://www.facebook.com/alejandro.valdiviezo.92"><img src="imgs/Facebook.png" width="40px"></a>
        
      </div>
    </div>
    <!--Use of container class to align the content at center and with lateral space-->
    <div class="container">
       
        <h3>Profesional Profile</h3>
        <p>Industrial Engineer, focused on a change career oriented to the IT sector. Currently studying a Higher Diploma in Science and Computing. Background in business management and experienced in consulting, integrate management, environment, health and safety, and oil industry. Living in Ireland last couple of years studying English language in different schools.</p>
        <!--Use of row class to divide the content in the page-->
          <div class="row">
            <!--Use of col-md-4 class to divide the content in 3 equal parts and car class to be able to insert an image and a button, both from Bootstrap-->
            <div class="col-md-3 card">
              <hr>
              <img src="imgs/netimg.jpg" class="card-img-top">
              <!--redirect the button to home page-->
              <a href="home1.php" class="btn btn-outline-success btn-lg">Home</a>
            </div>
            <div class="col-md-3 card">
              <hr>
              <img src="imgs/imgb.jpeg" class="card-img-top">
              <!--redirect the button to resume information page-->
              <a href="resumeInformation.php" class="btn btn-outline-success btn-lg">Resume Information</a>
            </div>
            <div class="col-md-3 card">
              <hr>
              <img src="imgs/imgc.jpg" class="card-img-top">
              <!--redirect the button to table demo page-->
              <a href="tabledemo.php" class="btn btn-outline-success btn-lg">Table demo</a>
            </div>
            <div class="col-md-3 card">
              <hr>
              <img src="imgs/imga.jpg" class="card-img-top">
              <!--redirect the button to freestyle page-->
              <a href="freestyle.php" class="btn btn-outline-success btn-lg">FreeStyle</a>
            </div>

          </div>
    </div> 
    <!--just to create an space we use hr-->
    <hr>
<!-- include a footer  -->
<?php include('partials/footer.php'); ?>   