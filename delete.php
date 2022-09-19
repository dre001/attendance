<?php 
    require_once 'db/conn.php';
    if(!$_GET['id']){
        echo 'error';

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