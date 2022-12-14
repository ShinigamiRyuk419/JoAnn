<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration_Form</title>
</head>
<style>
    body {
        background-image: url(https://wallpapercave.com/wp/MJpQIqg.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
    }

    .one {
        border: 1px solid yellow;
        border-radius: 5px;
        height: 50px;
        width: 250px;
        background-color: transparent;
        color: yellow;
        font-family: 'Courier New', Courier, monospace;
        font-size: larger;
        font-weight: bold;
        position: absolute;
        top: 50%;
        left: 25%;
        cursor: pointer;
    }

    .two {
        border: 1px solid yellow;
        border-radius: 5px;
        height: 50px;
        width: 250px;
        background-color: transparent;
        color: yellow;
        font-family: 'Courier New', Courier, monospace;
        font-size: larger;
        font-weight: bold;
        position: absolute;
        top: 50%;
        left: 5%;
        cursor: pointer;
    }

    /* for register */
    .loginPopup {
        position: inherit;
        text-align: center;
        width: 100%;
        transition: 0.5s;
        transform: translate(-10%, 50%);
    }

    .formPopup {
        display: none;
        position: fixed;
        left: 47%;
        top: 10%;
        transform: translate(-50%, 5%);
        z-index: 9;
        border-radius: 24px;
    }

    .formContainer {
        max-width: 510px;
        height: auto;
        padding: 50px;
        padding-bottom: 100px;
        background-color: rgb(1, 14, 1, 0.8);
        border: 2px;
        border-radius: 20px;
        box-shadow: 0 15px 15px yellow;
        border: 1px solid yellow;
        margin-bottom: 10%;
    }

    .formContainer input[type=text],
    .formContainer input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 20px 0;
        border: 1 solid black;
        background: #eee;
        border-radius: 20px;
    }

    .formContainer input[type=text]:focus,
    .formContainer input[type=password]:focus {
        background-color: #ddd;
        outline: none;
    }

    .formContainer .btn1 {
        border: 1px red;
        border-radius: 25px;
        background-color: yellow;
        color: black;
        position: absolute;
        cursor: pointer;
        opacity: 1;
        margin-left: -200px;
        height: 50px;
        width: 150px;
        font-size: x-large;
        margin-bottom: px;

    }

    .formContainer .cancel {
        position: absolute;
        background-color: #cc0000;
        border: none;
        border-radius: 25px;
        margin-left: 50px;
        width: 150px;
        height: 50px;
        font-size: x-large;
        margin-bottom: 5px;
        cursor: pointer;
    }

    .formContainer .btn1:hover,
    .openButton:hover {
        opacity: 1;
    }

    #poop.active {
        top: 50%;
        visibility: visible;
        opacity: 1;
        transition: all 0.5s;
    }

    #blur.active {
        filter: blur(20px);
        pointer-events: none;
        user-select: none;
    }

    /* for login */
    .loginPopup1 {
        position: inherit;
        text-align: center;
        width: 100%;
        transition: 0.5s;
        transform: translate(-10%, 50%);
    }

    .formPopup1 {
        display: none;
        position: fixed;
        left: 47%;
        top: 10%;
        transform: translate(-50%, 5%);
        z-index: 9;
        border-radius: 24px;
    }

    .formContainer1 {
        max-width: 510px;
        height: auto;
        padding: 50px;
        padding-bottom: 100px;
        background-color: rgb(1, 14, 1, 0.8);
        border: 2px;
        border-radius: 20px;
        box-shadow: 0 15px 15px blue;
        border: 1px solid blue;
        margin-top: 30%;
    }

    .formContainer1 input[type=text],
    .formContainer1 input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 20px 0;
        border: 1 solid bisque;
        background: #eee;
        border-radius: 20px;

    }

    .formContainer1 input[type=text]:focus,
    .formContainer1 input[type=password]:focus {
        background-color: #ddd;
        outline: none;
    }

    .formContainer1 .btn1 {
        border: 1px red;
        border-radius: 25px;
        background-color: blue;
        color: white;
        position: absolute;
        cursor: pointer;
        opacity: 1;
        margin-left: -200px;
        height: 50px;
        width: 150px;
        font-size: x-large;
        margin-bottom: 5px;
    }

    .formContainer1 .cancel {
        position: absolute;
        background-color: #cc0000;
        border: none;
        border-radius: 25px;
        margin-left: 50px;
        width: 150px;
        height: 50px;
        font-size: x-large;
        margin-bottom: 5px;
        cursor: pointer;
    }

    .formContainer1 .btn1:hover,
    .openButton:hover {
        opacity: 1;
    }

    #poop.active {
        top: 50%;
        visibility: visible;
        opacity: 1;
        transition: all 0.5s;
    }
</style>
<div class="cont" id="blur">

    <body>
        <div>
            <button class="one" type="button" onclick="openForm()">Register Now!</button>
        </div>
        <div>
            <button class="two" type="button" onclick="openForm1()">Login</button>
        </div>
    </body>
</div>
<div class="loginPopup" id="poop">
    <div class="formPopup" id="popupForm">
        <form class="formContainer" id="form" name="form" action="registration.php" method="post">
            <h2 style="color: yellow;">Please Register Here</h2>
            <label for="fname">
                <strong style="color: white; font-size: 14pt;">Firstname</strong>
            </label>
            <input type="text" id="firstn" placeholder="Your firstname" name="firstname" required minlength="2"
                maxlength="25">
            <label for="lname">
                <strong style="color: white; font-size: 14pt;">Lastname</strong>
            </label>
            <input type="text" id="lastn" placeholder="Your lastname" name="lastname" required minlength="2"
                maxlength="25">
            <label for="add">
                <strong style="color: white; font-size: 14pt;">Address</strong>
            </label>
            <input type="text" id="adr" placeholder="Your address" name="address" required minlength="2" maxlength="25">
            <label for="email">
                <strong style="color: white; font-size: 14pt;">E-mail</strong>
            </label>
            <input type="text" id="emailnasad" placeholder="Your Email" name="email"
                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
            <label for="psw">
                <strong style="color: white;font-size: 14pt;">Password</strong>
            </label>
            <input type="password" id="pswdaw" placeholder="Your Password" name="psw" required minlength="6">
            <label for="cpass">
                <strong style="color: white; font-size: 14pt;">Confirm Password</strong>
            </label>
            <input type="password" id="confirm" placeholder="Confirm Password" name="confirmpass" required>

            <button type="submit" onclick="matchpass()" class="btn1">Register</button>
            <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
        </form>
    </div>
</div>

<div class="loginPopup1" id="poop1">
    <div class="formPopup1" id="popupForm1">
        <form class="formContainer1" id="form1" name="form1" action="forlogin.php" method="post">
            <h2 style="color: blue;">Please login here!</h2>
            <label for="email">
                <strong style="color: white; font-size: 14pt;">E-mail</strong>
            </label>
            <input type="text" id="emailnasad" placeholder="Your Email" name="email"
                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
            <label for="psw">
                <strong style="color: white;font-size: 14pt;">Password</strong>
            </label>
            <input type="password" id="pswdaw" placeholder="Your Password" name="psw" required>

            <button type="submit" onclick="validation()" class="btn1">Login</button>
            <button type="button" class="btn cancel" onclick="closeForm1()">Close</butto>

        </form>
    </div>
</div>
<script>
    function openForm() {
        var blur = document.getElementById('blur');
        blur.classList.toggle('active')
        document.getElementById("popupForm").style.display = "block";
    }
    function closeForm() {
        document.getElementById("popupForm").style.display = "none";
        var blur = document.getElementById('blur');
        blur.classList.toggle('active')
    }

    function openForm1() {
        var blur = document.getElementById('blur');
        blur.classList.toggle('active')
        document.getElementById("popupForm1").style.display = "block";
    }
    function closeForm1() {
        document.getElementById("popupForm1").style.display = "none";
        var blur = document.getElementById('blur');
        blur.classList.toggle('active')
    }



  
    function matchpass() {
        var passWord = document.getElementById('pswdaw').value;
        var comPass = document.getElementById('confirm').value;

        if (passWord != comPass && passWord != "" && comPass != "") {
            alert("password must be the same!");
            return false;
        }
    }  
</script>

</html>