<html>
    <head>
    <title>Page protegée par mot de passe : Administrateur</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    </head>
    <body>
    <center><h3>BACK OFFICE</h3>
    <h3>Page protegée par mot de passe</h3>
    <h5>Veuillez saisir votre Login et mot de passe</h5>
    <form action="gestionproduits.php" method="POST" name="autentification">
    <table border="1" bgcolor="pink">
    <tr><td>Login:</td><td><input type="text" name="login"></td></tr>
    <tr><td>Pass:</td><td><input type="password" name="pass"></td></tr>
    </table>
    <input type="submit" value="Envoyer"> &nbsp; &nbsp;<input type="reset" value="Effacer">
    </form>
    </center>
    <?php
    include('fonctions.php');
    if(isset($_POST['login']) and isset($_POST['pass']))
    {
        if($_POST['login']=='admin' and $_POST['pass']=='admin')
                 header( "location: gestionproduits.php");
        else
        {
        
            echo "<center> Mot de passe incorrect</center>";
        }
    }
    ?>
    </body>
    </html>