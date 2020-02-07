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
        <form action="traitementSignIn.php" method="POST">
            <div class="containerForm">
                <div class="champ">
                    <input type="text" class="input" placeholder="User Name" name="username" id="username" required>
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
            <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
            ?>
        </form>  
    </div>  
</body>
</html>
