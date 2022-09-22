<?php 
//This includes the session file. This file contains code that starts/resumes a session
// By having it in the header file, it will be included on every page, allowing session capability to be used on every page across the website
include_once 'includes/session.php'

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script> -->

    <!-- <title>Bootstrap demo</title> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  


    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
    
    
    <link rel="stylesheet" href="CSS/site.css"/>

        <title>Attendance - <?php echo $title ?></title>

    </head>
  
  
    <body>
  <div class="container">

  <nav class="navbar navbar-expand" style="background-color: #e3f2fd;">
  <!-- <nav class="navbar navbar-expand-lg bg-light blue"> -->
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">IT Conference</a>
    <!-- navigation pill (resposive website which adjust to a mobile device) -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>  
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">


      <div class="navbar-nav m-auto ">
        <a class="nav-link active" aria-current="page" href="index.php">Home </a>
        <a class="nav-link" href="viewrecords.php">View Attendees</a>
        <!-- <a class="nav-link" href="#">Pricing</a>
        <a class="nav-link disabled">Disabled</a> -->
    </div>


    <div class="navbar-nav ml-auto">

        <?php 
            if(!isset($_SESSION['userid'])){
        ?>
        
        <a class="nav-item nav-link" href="login.php">Login <span class="sr-only"></span></a>
        <?php } else { ?>

       

<!-- <a class ="navitem nav-link" href="#"><span>Hello <?php //echo $_SESSION['username'] ?>! </span class="sr-only">current</span></a>
<a class="nav-item nav-link" href="logout.php">Logout <span class="sr-only">(current)</span></a> -->

   


            <span>Hello <?php echo $_SESSION['username']?>!</span> 
            
             <a class="nav- item nav-link" href="logout.php">Logout </a>
       
    
            <?php } ?> 

    
    </div>
    </div>
  </div>
</nav>
<br/>
<br/>
<br/>




 