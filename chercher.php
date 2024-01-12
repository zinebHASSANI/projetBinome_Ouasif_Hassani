<html>
<head>
<title>Chercher un produit</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<?php include('menu.php');
include('fonctions.php'); ?>
<center>
	<h3>Rechercher un produit</h3>
	<form action="chercher.php" method="POST">
		<table border="1" bgcolor="#FF9966">
		<tr><td>Entrez id_produit ou le nom </td><td><input type="text" name="mc"></td></tr>
		</table>
		<br>
		<input type="submit" value="Rechercher"> &nbsp;&nbsp;<input type="reset" value="Annuler">
	</form>
</center>
<?php
	if(isset($_POST['mc'])) 
	{
		if(!empty($_POST['mc'])) 
		{
			connexion();
			 $sql1="select * from produits where id_produit='".$_POST['mc'].
			"' or nom_produit='".$_POST['mc']."' or description='".$_POST['mc'].
			"' or prix='".$_POST['mc']."' or quantité='".$_POST['mc']."'";
            $reponse = $bdd->query($sql1);
			$nbrDeLigne = $reponse->rowCount();
			echo "<center> <b>Il y a ".$nbrDeLigne." Produit(s)</b></center>";
?>
			<center><table border="1">
			    <tr bgcolor="#FF9966"><th>id_produit</th><th>nom_produit</th><th>description</th><th>prix</th><th>quantité</th><th>Supprimer</th></tr>
			<?php
				while($enreg = $reponse->fetch())
				{//debut de while
				echo "<tr><td>".$enreg['id_produit']."</td>";
				echo "<td>".$enreg['nom_produit']."</td>";
				echo "<td>".$enreg['description']."</td>";
				echo "<td>".$enreg['prix']."</td>";
				echo "<td>".$enreg['quantité']."</td>";
				echo "<td><a  
				<a href='supprimer.php?id_produit=".$enreg['id_produit']."'>Supprimer</a></td>";
				echo "</tr>";
				} // fin de while
			echo "</table>";
		} // fin de if de champs vide
				else // si le champs mc est vide
				alerte('Taper un mot cle');
	} //fin de if de variable existants
			?>
</body>
</html>