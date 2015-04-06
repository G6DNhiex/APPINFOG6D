<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<link rel="stylesheet" href="style.css"/>
<link rel="stylesheet" href="recherchea.css"/>
</head>
<?php
include 'functions.php';

top();
?>
<h1 class="ravancee"> Recherche avancée </h1>

<form method="post" action="traitement.php">
	<p class="myformulaire">
		<label class="Mcles"> Mots-Clés </label>
	 <input type="text" name="MotsCles" placeholder="Ex : Pomme" class="MotsCles" /><br>
	 <label for="catégories" class="cate"> Catégories/ Variétés</label>
	 <select name="catégories" class="categories">
	 <option value="Choisissez une catégorie">Choisissez une catégorie</option></select>
	 <select name="variétés" class="varietes">
	 	<option value="Choisissez une variété"> choisissez une variété </option>
	 </select><br>
	 <label class="prix"> Prix </label>
	 <label class="Pmin"> Min </label> 
	 <input type="number" name="Prix min" size="15" class="Prixmin"/>
	 <label class="Pmax"> Max </label> <input type="number" name="Prix max" size="2" class="Prixmax"/><br>
	 <label class="quantite"> Quantité </label> <label class="Qmin"> Min </label><input type="number" name="Quantité min" size="15" class="Quantitiemin"/>
	 <label class="Qmax"> Max </label> <input type="number" name="Quantité max" size="2" class="Quantitemax"/><br>
	
	 <label for="Echange" class="echange"> Echange </label> <input type="checkbox" name="Echange" id="Echange" class="echange"/> 
	 <input type="button" name="rechercher" class="rechercher" value="rechercher"/>
	</p>
</form>

<?php
bottom();
?>

