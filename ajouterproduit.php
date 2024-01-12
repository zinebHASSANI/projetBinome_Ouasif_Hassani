<html>
<head>
<title>Ajouter un produit</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<?php 
include('menu.php');
include('fonctions.php');
?>
<center>
<h3>Ajouter un nouveau produit</h3>
<form action="ajouterproduit.php" method="POST">
	<table border="1" bgcolor="#99CCFF">
		
		</tr>
		<tr><th>id_produit</th><td><input type="text" name="id_produit"></td></tr>
		<tr><th>nom_produit</th><td><input type="text" name="nom_produit"></td></tr>
		<tr><th>description</th><td><input type="text" name="description"></td></tr>
		<tr><th>prix</th><td><input type="text" name="prix"></td></tr>
        
        <tr><th>quantite</th><td><input type="text" name="quantité"></td></tr>
	</table>
<br>
<input type="submit" value="Ajouter"> &nbsp;&nbsp;<input type="reset" value="Effacer">
</form>
</center>
<?php
	if(isset($_POST['id_produit']) and isset($_POST['nom_produit']) and isset($_POST['description']) and isset($_POST['prix']) and isset($_POST['quantité']))
	{
		if(!empty($_POST['id_produit']) and !empty($_POST['nom_produit']) and !empty($_POST['description']) and !empty($_POST['prix']) and !empty($_POST['quantité']))
		{
		connexion();
		$sql1="select * from produits where id_produit='".$_POST['id_produit']."'";
		$reponse = $bdd->query($sql1);
	    $donnees = $reponse->fetch();
	
			if(empty($donnees))
			{   
				$sql2="insert into produits(id_produit, nom_produit,description,prix , quantité) values('".$_POST['id_produit']."','".$_POST['description']."','".$_POST['prix']."','".$_POST['prix']."','".$_POST['quantité']."')";
				$bdd->exec($sql2);
				//deconnexion();
			echo "<center>Le produit".$_POST['nom_produit']." est ajouté avec succés</center>";
			}
			else
			echo "<center>Le produit existe déja !!!</center>";
		}
		else
		echo "<center>Attention !! Remplir tous les champs avec des valeur non nulles</center>"; 
	} 

	?>
</body>
</html>