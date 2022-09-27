<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered</title>
</head>
<style>
    body {
        background-image: url(https://wallpapercave.com/wp/MJpQIqg.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
    }
</style>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = htmlspecialchars($_POST["firstname"]);
    $lname = htmlspecialchars($_POST["lastname"]);
    $address = htmlspecialchars($_POST["address"]);
    $email = htmlspecialchars($_POST["email"]);
    $pass = $_POST["psw"];
    $confirm = $_POST["confirmpass"];

    $password = $_POST["psw"];

    //  to Validate password strength
    $uppercase = preg_match('@[A-Z]@', $pass);
    $lowercase = preg_match('@[a-z]@', $pass);
    $number = preg_match('@[0-9]@', $pass);
    $specialChars = preg_match('@[^\w]@', $pass);

    if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($pass) < 8) {
        echo "<p style='font-size:20pt; color:red;cursor:pointer;'> Password should be at least 8 characters in length <br> and should include at least one upper case letter,
        <br>one number, and one special character.</p>";
        echo "<a style='font-size:20pt; color:red;cursor:pointer;' href='index.php'> Error! <br> please register again.</a>";
    } else if ($pass == $confirm) {
        echo "<div style='max-width: 510px;
        height: auto;
        padding: 50px;
        padding-bottom: 59px;
        background-color: rgb(1, 14, 1, 0.8);
        border: 2px;
        border-radius: 20px;
        box-shadow: 0 15px 15px green;
        border: 1px solid green;
        margin-bottom: 10%;
        margin-top:200px;
        margin-left:20px;'>";
        echo "<h1 style='color: white; font-family:tahoma'> Welcome:  $fname $lname <h1>";
        echo "<h1 style='color: white; font-family:tahoma'> You are from:  $address <h1>";
        echo "<h1 style='color: white; font-family:tahoma'> Your email is:  $email <h1>";
        echo "<h1 style= 'color:white; font-family:tahoma'> Your password is :  $pass <h1>";
        echo "</div>";

    } 

}

?>

</body>
</html>
