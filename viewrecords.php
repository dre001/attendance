<?php

$title = 'View Records';
require_once 'includes/header.php';
require_once 'db/conn.php';


$results = $crud->getAttendees();
?>

<table class="table">
    <tr> 
        <th>#</th> 
        <th>First Name</th> 
        <th>Last Name</th> 
        <!-- <th>Date of Birth</th> 
        <th>Email Address</th> 
        <th>Contact Number</th>  -->
        <th>Specialty</th> 
        <th>Actions</th> 
        
    </tr>

<!-- <tr>
        <td>1</td>
        <td>firstname value</td>
        <td>lastname value</td>
        <td>dob</td>             //manually inputting information within the table
        <td>Email Address</td>
        <td>321456987</td>
        <td>Database Admin</td>
</tr> -->


    <?php
        while($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>

        <!-- Every "tr" have "td" -->
        <tr>
            <td><?php echo $r['attendee_id'] ?></td>
            <td><?php echo $r['firstname'] ?></td>
            <td><?php echo $r['lastname'] ?></td>

            <!-- <td><?php echo $r['dateofbirth'] ?></td>
            <td><?php echo $r['emailaddress'] ?></td>
            <td><?php echo $r['contactnumber'] ?></td> -->
            <td><?php echo $r['name'] ?></td>
            <!-- <td><?php //echo $r['specialty_id'] ?></td> -->

                <!-- ACTION BUTTONS -->
            <td><a href="view.php?id=<?php echo $r['attendee_id'] ?>" class="btn btn-primary">View</a></td>
            <td><a href="edit.php?id=<?php echo $r['attendee_id'] ?>" class="btn btn-warning">Edit</a></td>
           

            
        </tr>


       <?php } ?>
    

</table>

<br>
<br>
<br>

<?php require_once 'includes/footer.php'; ?>