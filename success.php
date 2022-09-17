<?php

$title = 'Success';
require_once 'includes/header.php';
require_once 'db/conn.php';

if (isset($_POST['submit'])) {
    //extract values from the $POST array
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $contact = $_POST['phone'];
    $specialty = $_POST['specialty'];

    //Call function to insert and track if succes or not
    $isSuccess = $crud->insert($firstname, $lastname, $dob, $email, $contact, $specialty);

    if ($isSuccess) {
        echo '<h1 class="text-center text-success"> You have succesfully registered!</h1>';
    } else {
        echo '<h1 class="text-center text-danger"> ERROR when Preocessing</h1>';
    }
}

?>

<!-- <h1 class="text-center text-success">Thanks For Registering</h1> -->


<!-- his prints out values that were passed to the action page using the method "GET"  -->
<!-- <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">
        <?php
        // echo $_GET['firstname'] . ' ' . $_GET['lastname'];
        ?>
    </h5>
    <h6 class="card-subtitle mb-2 text-muted">
        <?php
        //echo $_GET['specialty']; 
        ?>
    </h6>
    <p class="card-text">
     Date of Birth: <?php
                    //echo $_GET['dob']; 
                    ?>

    </p>
    
    <p class="card-text">
     Email Address: <?php
                    //echo $_GET['email']; 
                    ?>

    </p>

    <p class="card-text">
    Contact Number: <?php
                    //echo $_GET['phone']; 
                    ?>

    </p>
     </div>
</div> -->

<?php

//    echo $_GET['firstname'];
//    echo $_GET['lastname'];
//    echo $_GET['dob'];
//    echo $_GET['specialty'];
//    echo $_GET['email'];
//    echo $_GET['phone'];

?>

<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">
            <?php
            echo $_POST['firstname'] . ' ' . $_POST['lastname'];
            ?>
        </h5>
        <h6 class="card-subtitle mb-2 text-muted">
            <?php
            echo $_POST['specialty'];
            ?>
        </h6>
        <p class="card-text">
            Date of Birth: <?php
                            echo $_POST['dob'];
                            ?>

        </p>

        <p class="card-text">
            Email Address: <?php
                            echo $_POST['email'];
                            ?>

        </p>

        <p class="card-text">
            Contact Number: <?php
                            echo $_POST['phone'];
                            ?>

        </p>
    </div>
</div>


<br>
<br>
<br>
<br>
<br>
<br>

<?php require_once 'includes/footer.php'; ?>