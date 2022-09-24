<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>After Login</title>
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
$Lemail = $_POST["email"];
echo "<div style='margin-top:200px;
    height: auto;
    max-width: 510px;
    padding: 50px;
    padding-bottom: 59px;
    background-color: rgb(1, 14, 1, 0.8);
    border: 2px;
    border-radius: 20px;
    box-shadow: 0 15px 15px green;
    border: 1px solid green;'>";
echo " <h2 style = 'color: yellow; font-family: Aharoni;text-align:center;font-size:50pt'>Welcome <br> $Lemail </h2>";
echo "</div>";
?>
</body>
</html>