<?php




function top()
{
?>
    <header>
        <img src="logo.png" alt="Logo du site" id="logo">

    	<p class="slogan">N’en navet-vous pas marre d’être pris pour une poire et qu’on vous raconte des salades ? Venez potager des fruits et des légumes avec d’autres gourmangues du coing !
    </p>
        <nav>
            <ul>
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Déposer une annonce</a></li>
                <li><a href="#">Offres</a></li>
                <li><a href="#">Demandes</a></li>
                <li><a href="#">Mon compte</a></li>
                <li><a href="#">Forum</a></li>
            </ul>
        <p class="sedeconnecter"><a href="#"><img src="deco2.png" alt="Se connecter" id="login"></a>
		<a href="#"><img src="shopping232-2.png" alt="Mon panier" id="panier"></a>
		<a href="#"><img src="black218.png" alt="Messagerie" id="messagerie"></a></p>

    </nav>
            <form method="post" action="traitement.php">
                <p class="recherche"><input type="search" name="rechercheproduit" placeholder="Nom de fruit/légume/vendeurs" size="25"/>
                    <select name="offre" id="offre">
                         <option value="offre">Offre</option>
                        <option value="demande">Demande</option>
                    </select>
                    
                    <select name="departement" id="departement">
                        <option value="offre">Haut-de-seine</option>
                        <option value="demande">...</option>
                     </select>

                     <input type="search" name="rechercheville" placeholder="Ville/Code Postal" size="15"/>
					<button onclick="ClicBouton();">Rechercher</button>
					<br />
					<div class="check">
					<input type="checkbox" name="frites" id="frites" /> <label for="frites">Achat</label>
					<input type="checkbox" name="frites" id="frites" /> <label for="frites">Echange</label>
					<a class="recherchea" href="#">Recherche avancée</a>
					</div>

                </p>
            </form>  
    </header>

    <body>

<?php
}

function bottom()
{
?>

<div class="aide">
<a href='index.html'><img src="question.png" alt="aide"></a>
</div>

</div>
<footer>
			<a href='index.html'>Mentions légales</a> - <a href='index.html'>Contact </a>
			<div id="social">
				<a href="#" target="_blank"><img src="img/social/fb.png" alt="Facebook" title="Facebook" /></a>
				<a href="#" target="_blank"><img src="img/social/google.png" alt="Google +" title="Google +" /></a>
				<a href="#" target="_blank"><img src="img/social/tw.png" alt="Twitter" title="Twitter" /></a>
				<a href="#" target="_blank"><img src="img/social/pinterest.png" alt="Pinterest" title="Pinterest" /></a>
				<a href="#" target="_blank"><img src="img/social/insta.png" alt="Instagram" title="Instagram" /></a>
				<a href="#" target="_blank"><img src="img/social/tumblr.png" alt="Tumblr" title="Tumblr" /></a>
			</div>

</footer>

</body>
</html>
<?php
}


function valid($s)
{
	echo '<p class="valid">'.$s.'</p>';
}

function error($s)
{
	echo '<p class="error">'.$s.'</p>';
}

?>