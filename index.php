<?php

$title = 'Index';
require_once 'includes/header.php';
require_once 'db/conn.php';

?>

<!-- FORM DESIGN NOTES
    First Name
    Last Name
    Date of Birth (Date Picker)
    Specialty (Database Admin, Software Developer, Web Administrator, Other)
    Email Address 
    Contact Number -->

<h1 class="text-center">Registration for IT Conference</h1>



<form method="post" action="success.php">
    <div class="mb-3">
        <label for="firstname" class="form-label">First Name</label>
        <input type="text" class="form-control" id="firstname" name="firstname" aria-describedby="firstname" placeholder="First Name Only">
        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
    </div>

    <div class="mb-3">
        <label for="lastname" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="lastname" name="lastname" aria-describedby="lastname" placeholder="Last Name Only">
        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
    </div>

    <div class="mb-3">
        <label for="dob" class="form-label">Date of Birth</label>
        <input type="text" class="form-control" id="dob" name="dob">
    </div>

    <div class="mb-3">
        <label for="specialty" class="form-label">Specialty</label>
        <!-- <input type="text" class="form-select" id="specialty" name="specialty" aria-describedby="specialty"> -->
        <select class="form-select" aria-label="specialty" id="specialty" name="specialty">

            <option selected>Open this select menu</option>
            <option value="1">Database Admin</option>
            <option value="2">Software Developer</option>
            <option value="3">Web Administrator</option>
            <option value="4">Other</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>

    <div class="mb-3">
        <label for="phone" class="form-label">Contact Number</label>
        <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phoneHelp">
        <div id="phoneHelp" class="form-text">We'll never share your contact number.</div>
    </div>


    <button type="submit" name="submit" class="btn btn-success btn-block">Submit</button>
</form>

<br>
<br>
<br>
<br>
<br>
<br>

<?php require_once 'includes/footer.php'; ?>