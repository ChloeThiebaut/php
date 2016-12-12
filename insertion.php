<?php session_start();

    $login=$_POST['login'];
    $mdp=md5($_POST['mdp']);

 $cle=new mysqli('localhost','root','root','utilisateur');
 $reponse=$cle->query("SELECT * FROM users WHERE login='$login'");




if($reponse->num_rows==1){
    
        header("Location:inscription.php?error");
        
    }
else {
        $reponse2=$cle->query("INSERT INTO users (login, mdp) VALUES ('$login' ,'$mdp')");
     
        header("Location:formulaire.php");
    }

?>