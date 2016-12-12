<?php session_start();?>

<form method="Post" action="authentification.php">
    <label for="login"> login</label>
        <input type="text" id="login" name="login">    
    <label for="login"> mdp </label>
        <input type="password" id="mdp" name="mdp">
    <input type="submit" id="bouton" name="bouton" value="ok">
</form>