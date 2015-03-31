<?php
/*
Class sql de Triton :D (23/08/2012)

Exemples :

Insertion d'une entrée dans la table joueurs :
	Sql::insert('joueurs', 'tom', 45);

Suppression d'entrées dans la table joueurs :
	Sql::delete('joueurs', 'nombre = ?', 45);

Mise à jour d'entrées dans la table joueurs :
	Sql::update('joueurs', array('nombre' => 69), 'nombre = ?', 45);

Selection d'entrées dans la table joueurs :
	Sql::select('joueurs', 'nombre = ?', 45);
	while ($data = Sql::getData())
	{
		print_r($data);
	}

Comptage d'entrées dans la table joueurs :
	$nombre = Sql::count('joueurs', 'nombre = ?', 45);
*/

Sql::init();

$GLOBALS['sqlDebugMode'] = false;

class Sql
{
	public static function generateRequest($arguments, $currentArgument)
	{
		$request = $arguments[$currentArgument];
		$currentArgument++;
		
		$position = 0;
		while (count($arguments) > $currentArgument && (($position = @strpos($request, '?', $position)) !== false))
		{
			$argument = $arguments[$currentArgument];
			$currentArgument++;
			
			if (is_string($argument))
				$argument = Sql::rc()->quote($argument);
			
			$request = substr_replace($request, $argument, $position, 1);
			$position += strlen($argument);
		}
		return $request;
	}
	
	
	public static function insert()//table, values ---------- Exemple : Sql::insert('joueurs', 'tom', 45);
	{
		$arguments = func_get_args();
		
		$table = $arguments[0];
		
		$request = 'INSERT INTO '.$table.' VALUES(';
		
		for ($i = 1; $i < count($arguments); $i++)
		{
			if ($i > 1)
				$request .= ', ';
				
			if (is_string($arguments[$i]))
				$request .= Sql::rc()->quote($arguments[$i]);
			else
				$request .= $arguments[$i];
		}
		
		$request .= ')';
		
		Sql::displayDebug($request);

		Sql::rc()->query($request);
	}
	
	public static function delete()//table, request, values ---------- Exemple : Sql::delete('joueurs', 'nombre = ?', 45);
	{
		$arguments = func_get_args();
		
		$table = $arguments[0];
		
		$request = 'DELETE FROM '.$table;
		
		if (count($arguments) > 1)
		{
			$request .= ' WHERE ';
			$request .= Sql::generateRequest($arguments, 1);
		}
		
		Sql::displayDebug($request);

		Sql::rc()->query($request);
	}
	
	public static function update()//table, newValues, request, values ---------- Exemple : Sql::update('joueurs', array('nombre' => 69), 'nombre = ?', 45);
	{
		$arguments = func_get_args();
		
		$table = $arguments[0];
		$newValues = array_values($arguments[1]);
		$newValuesKeys = array_keys($arguments[1]);
		
		$request = 'UPDATE '.$table.' SET ';
		
		for ($i = 0; $i < count($newValues); $i++)
		{
			if ($i > 0)
				$request .= ', ';
				
			$request .= $newValuesKeys[$i].' = ';
			
			if (is_string($newValues[$i]))
				$request .= Sql::rc()->quote($newValues[$i]);
			else
				$request .= $newValues[$i];
		}
		
		if (count($arguments) > 2)
		{
			$request .= ' WHERE ';
			$request .= Sql::generateRequest($arguments, 2);
		}
		
		Sql::displayDebug($request);

		Sql::rc()->query($request);
	}
	
	public static function select()//table, request, values ---------- Exemple : Sql::select('joueurs', 'nombre = ?', 45); AND Sql::getData()
	{
		$arguments = func_get_args();
		
		$table = $arguments[0];
		
		$request = 'SELECT * FROM '.$table;
		
		if (count($arguments) > 1)
		{
			$request .= ' WHERE ';
			$request .= Sql::generateRequest($arguments, 1);
		}
		
		Sql::displayDebug($request);

		$GLOBALS['queries'][] = Sql::rc()->query($request);
		return count($GLOBALS['queries']) - 1;
	}
	
	public static function count()//table, request, values ---------- Exemple : Sql::count('joueurs', 'nombre = ?', 45); AND Sql::getData()
	{
		$arguments = func_get_args();
		
		$table = $arguments[0];
		
		$request = 'SELECT COUNT(*) AS number FROM '.$table;
		
		if (count($arguments) > 1)
		{
			$request .= ' WHERE ';
			$request .= Sql::generateRequest($arguments, 1);
		}
		
		Sql::displayDebug($request);

		$GLOBALS['queries'][] = Sql::rc()->query($request);
		$data = Sql::getData();
		return $data['number'];
	}
	
	public static function request()//request, values
	{
		$arguments = func_get_args();
		
		$request = '';
		$request .= Sql::generateRequest($arguments, 0);
		
		Sql::displayDebug($request);

		$GLOBALS['queries'][] = Sql::rc()->query($request);
		return count($GLOBALS['queries']) - 1;
	}
	
	public static function getData($queryId = -1)//Exemple : while ($data = Sql::getData()) { print_r($data); }
	{
		if ($queryId == -1)
			$queryId = count($GLOBALS['queries']) - 1;
		return $GLOBALS['queries'][$queryId]->fetch(PDO::FETCH_ASSOC);
	}
	
	public static function getLastInsertId()
	{
		return Sql::rc()->lastInsertId();
	}
	
	public static function displayDebug($request)
	{
		if (Sql::isDebugMode())
			echo '<strong style="color:red;">[SQL DEBUG MODE] </strong>'.$request.' <strong style="color:red;">[END]</strong>';
	}
	
	public static function setDebugMode($value)
	{
		$GLOBALS['sqlDebugMode'] = $value;
		if ($value)
			$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		else
			$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
	}
	
	public static function isDebugMode()
	{
		return $GLOBALS['sqlDebugMode'];
	}
	
	public static function protect($v, $html = false)
	{
		if ($html)
			$v = html($v);
		return Sql::rc()->quote($v);
	}
	
	public static function rc()
	{
		return $GLOBALS['db'];
	}
	
	public static function init()
	{
		define("HOST", 'localhost');
		define("DATABASE", 'marine');
		define("LOGIN", 'marine');
		define("PASS", 'marine');
		$bdd = new PDO("mysql:host=" .HOST.";dbname=" .DATABASE."", "".LOGIN."", "".PASS."");
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
		$bdd->query("SET NAMES 'utf8'");
		$GLOBALS['db'] = $bdd;
	}
}
?>
