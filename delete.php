<?php 
    require_once 'db/conn.php';
    if(!$_GET['id']){
        //echo 'error';
        include 'includes/errormessage.php'; //generic Error Message
        header("Location: viewrecords.php ");

    }else{
        //GET ID VALUES
        $id = $_GET['id'];


        //CALL DELETE FUNCTION
        $result = $crud->deleteAttendee($id);

        //REDIRECT TO LIST
        if($result){
            header("Location: viewrecords.php");
        }
        else{
            echo'';
        }
    }    

?>