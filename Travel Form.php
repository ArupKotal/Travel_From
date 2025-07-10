<?php
$insert = false;
if(isset($_POST['name'])){ 
    // Set connection variable   
$server = "localhost";
$username = "root";
$password = "";

// Create a database connection 
$con = mysqli_connect($server, $username, $password);

// Chack for connection success
if(!$con){
    die("connection to this database failed due to". mysqli_connect_error());
}

// echo "Success Connecting to the Database.. "

// Collect post variable
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$desc = $_POST['desc'];
$sql = "INSERT INTO `travel`.`travel` (`Name`, `Age`, `Gender`, `Email`, `Phone`, `Other`, `Date`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
// echo $sql;

// Execute the query
if($con->query($sql) == true){
    // echo "Successfully Inserted..";

    // Flag for successful insertion
    $insert = true;
}

else{
    echo "ERROR: $sql <br> $con->error";
    // $not_insert = true;
}

// Close the database connection
$con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form.</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <link rel="shortcut icon" href="favicon-32x32.png" type="favicon-32x32">
    <link rel="shortcut icon" href="apple-touch-icon.png" type="apple-touch-icon">
</head>
<body>
    <img class="bg" src="bg.jpg" alt="IIT Kharagpur">
    <div class="container">
        <h1>Welcome to IIT Kharagpur US Trip form</h1>
        <p>Enter your details and submit this form to confirm your participation in the trip</p>

        <?php 
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining us for the US trip..</p>";
         }
        ?>
        

        <form action="Travel form.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter Your Name">
            <input type="text" name="age" id="age" placeholder="Enter Your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter Your Gender">
            <input type="text" name="email" id="email" placeholder="Enter Your Email">
            <input type="text" name="phone" id="phone" placeholder="Enter Your Phone Number">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter Any Other Information Here...."></textarea>
            <button class="btn">Submit</button>
            <!-- <button class="btn">Reset</button> -->
        </form>
    </div>
    <script src="Travel Form.js"></script>

    
</body>
</html>