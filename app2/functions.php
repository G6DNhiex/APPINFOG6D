<?php
session_start(); //création d'une session (qui permet de stocker des variables)
include 'class.Sql.php';

ini_set('display_errors', 1);
error_reporting(E_ALL);
Sql::setDebugMode(false);

function top($title = 'Ebaie', $suite = '')
{
	if ($title != 'Ebaie')
		$title = 'Ebaie - '.$title; 
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="css/style2.css" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<?php echo $suite; ?>
		<title><?php echo $title; ?></title>
	</head>
	<body>
		<header>
			<div id="top">
				<img src="img/logo.png">
				<p><span>"</span>N’en navet-vous pas marre d’être pris pour une poire et qu’on vous raconte des salades ?<br /><br />Venez potager des fruits et des légumes avec d’autres gourmangues du coing !<span>"</span></p>
			</div>
			<div id="connexion">
				<ul>
<?php
if (empty($_SESSION["id"]))
{
?>
					<li class="c"><a href="seconnecter.php">Inscription / Connexion</a></li>
<?php
}
else
{
Sql::select('Utilisateur','id=?',$_SESSION["id"]);
$data = Sql::getData();
?>
					<li class="c">Bonjour <strong><?php echo $data["login"]; ?></strong> - <a href="deconnecter.php">Déconnexion</a></li>
<?php
}
?>
				</ul>
			</div>
			<nav>
				<ul>
					<li><a href="index.php">Accueil</a></li>
					<li class="a"><a href="deposerannonce.php">Déposer une annonce</a></li>
					<li><a href="#">Offres</a></li>
					<li class="a"><a href="demandes.php">Demandes</a></li>
<?php
if (!empty($_SESSION["id"]))
{
?>
					<li><a href="#">Mon compte</a></li>
<?php
}
?>
					<li><a href="#">Forum</a></li>
					<li class="b"><input type="text" placeholder="Recherche..." onfocus="$('#search').slideDown();" /><div></div></li>
				</ul>
			</nav>
		</header>
		<article>
			<div id="search">
				<label>Champ de texte : </label><input type="text" /><br />
				<label>Type de fleur : </label><select><option>Rose rouge</option><option>Rose verte (seulement la tige)</option></select>
			</div>
<?php
}

function bottom()
{
?>
</article>
<footer>
		<a href="#">Contact</a> - <a href="#">Mentions légales</a>
		</footer>
	</body>
</html>
<?php
}


$GLOBALS['errors_list'] = array();
$GLOBALS['valids_list'] = array();

function error($error)
{
	$GLOBALS['errors_list'][] = $error;
}

function valid($valid)
{
	$GLOBALS['valids_list'][] = $valid;
}

function displayErrors()
{
	if (count($GLOBALS['errors_list']) == 0)
		return;
		
	echo '<ul class="errors">';
	foreach ($GLOBALS['errors_list'] as $e)
		echo '<li>- '.$e.'</li>';
	echo '</ul>';
}

function hasError()
{
	return count($GLOBALS['errors_list']) > 0;
}

function displayValids()
{
	if (count($GLOBALS['valids_list']) == 0)
		return;
		
	echo '<ul class="valids">';
	foreach ($GLOBALS['valids_list'] as $e)
		echo '<li>'.$e.'</li>';
	echo '</ul>';
}

function messages()
{
	displayErrors();
	displayValids();
}

?>