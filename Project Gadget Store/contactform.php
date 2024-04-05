

<?php 
session_start();

include("connection.php");
include("contactfunction.php");
contact_function();

?>



<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Feedback</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link rel="stylesheet" href="style.css">
	 <link rel="stylesheet" href="common.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
</head>

<body>


    <form method="post" action="#" class="signup-form">

        <h1 style="padding-top: 130px">Contact</h1>

        <div class="txtb">
            <input id="text" type="text" name="name" required>
            <span data-placeholder="Name"></span>
        </div>



		<div class="txtb">
            <input id="text" type="email" name="email" required>
            <span data-placeholder="Email"></span>
        </div>


        <div class="txtb">
            <input id="text" type="textarea" name="message" required>
            <span data-placeholder="Please provide your feedback"></span>
        </div>

        

        

		<input id="button" type="submit" class="signbtn" value="Submit">
	</form>



    <!--<script>
        $(".txtb input").on("focus", function(){
            $(this).addClass("focus");
        });

        $(".txtb input").on("blur", function(){
            if($(this).val() == "")
                $(this).removeClass("focus");
        })
    </script>-->
	<script src="main.js" type="text/javascript"></script>
    

</body>
</html>



