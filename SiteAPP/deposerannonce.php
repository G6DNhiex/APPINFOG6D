<?php 
include 'functions.php';
top('Déposer une annonce', '<link rel="stylesheet" href="deposerannonce.css"/>');
?>
			<form method="post" action="traitement.php">
			<p class="offredemande">
				<input type="radio" name="od" value="offre" id="offre" /> <label for="ofrre">Offre</label>
				<input type="radio" name="od" value="demande" id="demande" /> <label for="demande">Demande</label>
			</p>
			</br>
			<p class="fl">
				<select name="fl" id="fl">
					<option value="fruit">Fruit</option>
					<option value="legume">Légume</option>
				</select>
					
				<select name="categorie" id="categorie">
					<option value="categorie">Catégorie</option>
					<option value="ect">...</option>
				</select>

				<select name="variete" id="variete">
					<option value="variete">Variété</option>
					<option value="ect">...</option>
				</select>
			</p>
			</br>
			<p class="titre">
				<label for="titre">Titre</label></br>
				<input type="text" name="titre" id="titre" size="70">
			</p>
			<p class="description">
				<label for="description">Description</label></br>
				<textarea name="casedescription" id="casedescription" placeholder="Description max: 250 caracteres"/></textarea>
			</p>
		
		<p class="vendre">
			<input type="checkbox" name="vendre" id="vendre"><label for="vendre">Vendre</label>
			<input type="checkbox" name="echange" id="echange"><label for="echange">Echange</label>
		</p>
		<p class="quantite">
			<label for="quantite">Quantité max</label></br>
			<input type="text" name="quantite" id="quantite" size="15"/>
		</p>
		<p class="prix">
			<label for="prix">Prix</label></br>
			<input type="text" name="prix" id="prix" placeholder="€" size="15"/>
		</p>
	</br>
	<input type="submit" name="valider" id="valider" value="Valider"/>
		</form>
<?php
bottom();
?>
