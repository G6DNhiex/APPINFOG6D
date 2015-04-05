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

<form method="post" action="traitement.php">
	<p class="myformulaire">
		<label> Mots-Clés </label>
	 <input type="text" name="MotsCles" placeholder="Ex : Pomme" id="MotsClés"/><br>
	 <label for="catégories"> Catégories/ Variétés</label>
	 <select name="catégories" id="catégories">
	 <option value="Choisissez une catégorie">Choisissez une catégorie</option></select>
	 <select name="variétés">
	 	<option value="Choisissez une variété"> choisissez une variété </option>
	 </select><br>
	 <label id="prix"> Prix </label>
	 <label id="Pmin"> Min </label> 
	 <input type="number" name="Prix min" size="15"/>
	 <label id)"Pmax"> Max </label> <input type="number" name="Prix max" size="2"/><br>
	 <label id="quantité"> Quantité </label> <label id="Qmin"> Min </label><input type="number" name="Quantité min" size="15"/>
	 <label id="Qmax"> Max </label> <input type="number" name="Quantité max" size="2"/><br>
	
	 <label for="Echange"> Echange </label> <input type="checkbox" name="Echange" id="Echange"/> 
	</p>
</form>

<?php
bottom();
?>

