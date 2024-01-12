<html>
<head>
<title>Suppression de produit</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
	<?php
		include('fonctions.php');
		include('menu.php');
		connexion();
		$sql="delete from produits where id_produit='".$_GET['id_produit']."'";
		$reponse = $bdd->query($sql);
		echo "<center> Le produit d'id : <strong>".$_GET['id_produit']."</strong> est supprimé avec succés</center>";
	?>
</body>
</html>