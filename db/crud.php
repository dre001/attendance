
<?php

    class crud {
        // private database object
        private $db; //attribute

        //constructor to initialize private variable to the database connection
        function __construct($conn) //initialising an object of a class
        {
            $this->db = $conn;   //this gives all the private and public attributes within this class
        }
            public function insert($firstname, $lastname, $dob, $email, $phone, $specialty){

                try {
                    //define sql statement to be executed
                    $sql = "INSERT INTO attendee (firstname, lastname, dateofbirth, emailaddress, contactnumber, specialty_id) VALUES (:firstname, :lastname, :dob, :email, :contact, :specialty)";

                    //prepare the sql statement for execution
                    $stmt = $this->db->prepare($sql);

                    //bind all placeholders to the actual values
                    $stmt->bindparam(':firstname',$firstname);
                    $stmt->bindparam(':lastname',$lastname);
                    $stmt->bindparam(':dob',$dob);
                    $stmt->bindparam(':email',$email);
                    $stmt->bindparam(':contact',$phone);
                    $stmt->bindparam(':specialty',$specialty);

                    $stmt->execute();
                    return true;

                } catch (PDOException $e) {
                    echo $e->getMessage(); //"e" represents the object of a class
                    return false;
        
                }
            }
  
    }
?>