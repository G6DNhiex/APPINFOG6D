<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8" />
            <link rel="stylesheet" href="style.css" />
            <title>Déposer une annonce</title>
        </head>
<? php
include 'functions.php'
top();
?>
		
			<form method="post" action="traitement.php">
			<p>
			<input type="radio" id="offre" value="offre"/><label for="offre">Offre</label>
			<input type="radio" id="demande" value="demande"/><label for="demande">Demande</label>
		</p>
<? php 
bottom();
?>