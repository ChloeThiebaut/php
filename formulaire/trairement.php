 <?php session_start();?>
<!DOCTYPE HML>
<html>

    <head>
    </head>

    <body>
        <?php
            echo "Bonjour ". $_POST['nom'];
            echo  $_POST['sexe'];
        if   (isset($_POST['cb']))  {                                      
        echo  $_POST['cb'];}
        echo  $_POST['annee'];
        
        foreach($_POST['loisirs']as $loisir){
            echo $loisir;
        }
        ?>
        

    </body>


</html>
