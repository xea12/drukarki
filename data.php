<?php
#Include the connect.php file
include ('connect.php');
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli($hostname, $username, $password) or die('Could not connect: ' . mysql_error());
//Select The database
$bool = mysqli_select_db($mysqli, $database);
if ($bool === False){
   include ('connect.php');
}


if (mysqli_connect_errno())
	{
	$mysqli -> query("SET NAMES 'utf8'");
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
	}
printf("%s\n", $mysqli->info);
// get data and store in a json array
	$query = "SELECT id_drukarki, rodzaj, model, uwagi, wifi, lan, fax, nfc, adf, duplex, skan_dwustr, a3, cena_drukarki 
	FROM drukarki 
		JOIN uwagi ON drukarki.id_drukarki = uwagi.id_uwagi 
		JOIN funkcje ON drukarki.id_drukarki = funkcje.id_funkcje 
		JOIN rodzaj ON drukarki.id_drukarki = rodzaj.id_rodzaj 
		JOIN cena ON drukarki.id_drukarki = cena.id_cena";
if (isset($_GET['update']))
	{
	// UPDATE COMMAND
	$query = "UPDATE `funkcje` JOIN `drukarki` ON drukarki.id_drukarki=funkcje.id_funkcje SET `wifi`=?, `lan`=?, `fax`=?, `nfc`=?, `adf`=?, `duplex`=?, `skan_dwustr`=?, `a3`=? WHERE `id_funkcje`=?;";
	$result = $mysqli->prepare($query);
	$result->bind_param('ssssssssi', $_GET['wifi'], $_GET['lan'], $_GET['fax'], $_GET['nfc'], $_GET['adf'], $_GET['duplex'], $_GET['skan_dwustr'], $_GET['a3'], $_GET['id_drukarki']);
	$res = $result->execute() or trigger_error($result->error, E_USER_ERROR);
	//$query = "UPDATE `funkcje` JOIN `drukarki` ON drukarki.id_drukarki=funkcje.id_funkcje SET `wifi`='".$_GET['wifi']."', `lan`='".$_GET['lan']."', `fax`='".$_GET['fax']."', `nfc`='".$_GET['nfc']."', `adf`='".$_GET['adf']."', `duplex`='".$_GET['duplex']."',`skan_dwustr`='".$_GET['skan_dwustr']."', `a3`='".$_GET['a3']."' WHERE `id_funkcje`='".$_GET['id_drukarki']."'";
	//$res = mysqli_query($mysqli, $query) or die("SQL Error 1: " . mysql_error());
	echo $res;
	}
  else
	{
	// SELECT COMMAND
	$result = $mysqli->prepare($query);
	$result->execute();
	/* bind result variables */
	$result->bind_result($id_drukarki, $rodzaj, $model, $uwagi, $wifi, $lan, $fax, $nfc, $adf, $duplex, $skan_dwustr, $a3, $cena_drukarki); 
	/* fetch values */
	while ($result->fetch())
		{
		$drukarki[] = array(
			'id' => $id_drukarki,
			'rodzaj' => $rodzaj,
			'model' => $model,
			'uwagi' => $uwagi,
			'wifi' => $wifi,
			'lan' => $lan,
			'fax' => $fax,
			'nfc' => $nfc,
			'adf' => $adf,
			'duplex' => $duplex,
			'skan_dwustr' => $skan_dwustr,
			'a3' => $a3,
			'cena_drukarki' => $cena_drukarki
		);
		}
	echo json_encode($drukarki);
	}
$result->close();
$mysqli->close();
/* close connection */
?>