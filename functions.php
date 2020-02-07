<?php
function connect(){
    try {
        return  new PDO('mysql:host=localhost:3308;dbname=projet;charset=utf8', 'root', '');
    } catch(Exception $e) {
        die('Erreur : ' .$e->getMessage());
    }
}

function login(){
    session_start();
    if(isset($_POST['username']) && isset($_POST['password']))
    {
        // connexion à la base de données
        $username = $_POST['username'];
        $password = $_POST['password'];
        $bdd = connect();
        
        
        if($username !== "" && $password !== "")
        {
            $requete = "SELECT count(*) FROM utilisateur where 
                  nom_utilisateur = '".$username."' and mot_de_passe = '".$password."' ";
            $exec_requete = mysqli_query($bdd,$requete);
            $reponse      = mysqli_fetch_array($exec_requete);
            $count = $reponse['count(*)'];
            if($count!=0) // nom d'utilisateur et mot de passe correctes
            {
               $_SESSION['username'] = $username;
               header('Location: home.php');
            }
            else
            {
               header('Location: signIn.php?erreur=1'); // utilisateur ou mot de passe incorrect
            }
        }
        else
        {
           header('Location: signIn.php?erreur=2'); // utilisateur ou mot de passe vide
        }
    }
    else
    {
       header('Location: signIn.php');
    }
    mysqli_close($bdd); // fermer la connexion
}

?>