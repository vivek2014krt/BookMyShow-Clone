<?php
//if(isset($_POST['name']))
    $con = mysqli_connect("localhost:3308" , "root" , "", "project_dbms");
    if(!$con)
    {
        die("conection to this database failed due to".mysqli_connect_error());
    }
    //echo "Success connecting to the db";
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    $sql = "INSERT INTO `project_dbms`.`seminar` ( `name`, `age`, `gender`, `email`, `phone`, `desc`, `date`) VALUES ( '$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
    echo $sql;

    if($con->query($sql) == true){
        echo "Successfully inserted";}
    else{
        echo "ERROR : $sql <br> $con->error";
    }

    $con->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to BookMyShow</title>
    <link rel = "stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h3>BookMyShow</h3>
        <p>Enter your details to book your ticket for the seminar <br> HURRY, LIMITED TICKETS ARE AVAILABLE</p>
        <form action+"index.php" method = "post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your Age">
            <input type = "text" name ="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name ="desc" id=""desc" cols= "30" rows ="10" placeholder="Enter any other inforation here"></textarea>
            <button class = "btn"> Submit</button>
            <button class = "btn"> Reset</button>
        </form>
    </div>
    <script src = "index.js"></script>
    
</body>
</html>