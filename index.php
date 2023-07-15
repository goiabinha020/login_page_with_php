<!--<?php

if(isset($_POST['submit']))
{
    include_once('config.php');
    // print_r($_POST['name']);
    // print_r($_POST['email']);
    // print_r($_POST['password']);
    // print_r($_POST['date']);
//Get the parameter to do the register
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $date = $_POST['date'];
    $check_name = trim($name);
//Code to the sql query
    $sql_code = "SELECT id, name FROM users WHERE email = '$email'";
    $sql_query = $connection->query($sql_code);

//Checking if the email exist
    if($sql_query->num_rows == 0){
//hash the password
        $hash_pwd = password_hash($password, PASSWORD_DEFAULT); 
        echo "$hash_pwd";
//Insering the data to the database with sql comands
        $result = mysqli_query($connection, "INSERT INTO users(name, email, password, dob) VALUES('$check_name', '$email', '$hash_pwd', '$date')");
        echo "You have been registered!";
    }else{
        echo"This  email already exist, try another one";
    }
    

}  
?>
-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <main>
        <div class="form_area">
                <form action="index.php" method="POST">
                    <h1>Register</h1>
                    <div class="single_input">
                        <input type="text" name="name" id="name" required class="input_area" placeholder="Type your complete name" autocomplete="off">
                        <label for="name" class="label_item">Complete name</label>
                    </div>
                    <div class="single_input">
                        <input type="email" name="email" id="email" required class="input_area" placeholder="Type your email" autocomplete="off">
                        <label for="email" class="label_item">Email</label>
                    </div>
                    <div class="single_input">
                        <input type="password" name="password" id="password" required class="input_area" placeholder="Type your password" autocomplete="off">
                        <label for="password" class="label_item">Password</label>
                    </div>
                    <div class="date_input">
                        <label for="date" id="dob_label">Date of birthday</label>
                        <input type="date" name="date" id="date_input" min="1900-01-01" required autocomplete="off">
                    </div>
                    <div class="submit_div">
                        <input type="submit" value="Submit" name='submit' id="submit_btn">
                    </div>
                </form>
        </div>
       
    </main>
</body>
</html>