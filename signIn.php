<?php 
require_once 'functions.php';
?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Immobilier Assistant</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="signInTreatment.php" method="post">
        <div class="imgcontainer">
            <img src="" alt="" class="">
        </div>

        <div class="container">
            <label for="login"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="login" id="login" required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password"  id="password" required>

            <button type="submit">Login</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
    </form>    
</body>
</html>
