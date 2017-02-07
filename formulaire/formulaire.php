<?php session_start();?>

<form method="Post" action="traitement.php">
    <label for="nom"> Nom</label>
        <input type="text" id="nom" name="nom" value="nom">
        <input type="text" id="prenom" name="prenom" value="prenom">
        <input type="submit" id="bouton" name="bouton" value="ok"> <br/>
        homme: <input type="radio" id="sexe" name="sexe" value="homme" checked>
        femme: <input type="radio" id="sexe" name="sexe" value="femme"> 
        <input type="checkbox"  name="cb" value="ok">
    
        <select name="annee">
            <?php
                for($annee=1900;$annee<2017;$annee++){
                    echo"<option value=\"$annee\">$annee</option>";
                    }
            ?>
        </select>
    <input type="checkbox" value="cinema" name="loisirs[]"> cinema
    <input type="checkbox" value="sport" name="loisirs[]"> sport
    <input type="checkbox" value="sieste" name="loisirs[]"> sieste
    <input type="checkbox" value="PHP" name="loisirs[]"> PHP
</form>
