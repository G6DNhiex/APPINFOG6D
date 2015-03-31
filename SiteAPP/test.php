!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
            <link rel="stylesheet" href="accueilebaie.css" />
            <link rel="stylesheet" href="seconnecter.css" />
        <title>Se connecter</title>
    </head>
    <header>
        <img src="logo.png" alt="Logo du site" id="logo">

    	<p class="slogan">N’en navet-vous pas marre d’être pris pour une poire et qu’on vous raconte des salades ? Venez potager des fruits et des légumes avec d’autres gourmangues du coing !
    </p>
        <nav>
            <ul>
                <li>Accueil</li>
                <li>Déposer une annonce</li>
                <li>Offres</li>
                <li>Demandes</li>
                <li>Mon compte</li>
                <li>Forum</li>
            </ul>
        <p class="sedeconnecter"><img src="deco2.png" alt="Se connecter" id="login"><img src="shopping232-2.png" alt="Mon panier" id="panier"><img src="black218.png" alt="Messagerie" id="messagerie"></p>

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


                </p>
            </form>
    <HR color="black" height="5%">      
    </header>
    <body>
          </body>
</html>
