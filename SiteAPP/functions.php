<?php

ini_set('display_errors', 1);
include 'class.Sql.php';

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
<div class="footer">
<a href='index.html'>Mentions légales</a> - <a href='index.html'>Contact </a>
</div>

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