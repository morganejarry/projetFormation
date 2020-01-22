<?php 
//require_once 'functions.php';
?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Immobilier Assistant</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1 class="titleForm">LOGIN</h1>
        <form action="signInTreatment.php" method="POST">
            <div class="containerForm">
                <div class="champ">
                    <input type="text" class="input" placeholder="User Name" name="login" id="login" required>
                </div>
                <div class="champ">
                    <input class="input" type="password" placeholder="Password" name="password"  id="password" required>
                </div>
                <div>
                    <button class="submit" type="submit">Login</button>
                    <label class="checkbox">
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
                </div>
                
                
            </div>

            <div class="containerHelp">
                <button class="cancel" type="button" class="cancelbtn">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
        </form>  
    </div>  
</body>
</html>
