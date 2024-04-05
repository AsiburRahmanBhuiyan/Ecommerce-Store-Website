<?php
include("connection.php");



function contact_function(){

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $feedback = $_POST['message'];

        include("connection.php");
    
        $sql = "INSERT INTO feedback (name, email, message) 
                VALUES('$name', '$email', '$feedback')";
        
        if (mysqli_query($con,$sql)) {
            echo "<script> alert('You successfully submitted your feedback.');
            window.location.href='user_homepage.php';
            </script>
            ";
        
        } else {
          echo "Error: " . $sql . "<br>" . $con->error;
        }
    }
}



?>


