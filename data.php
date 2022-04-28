<?php
	#Include the connect.php file
include ('connect.php');
// Connect to the database
$mysqli = new mysqli($hostname, $username, $password, $database);
/* check connection */
if (mysqli_connect_errno())
	{
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
	}
// get data and store in a json array
$query = "SELECT id, rodzaj, Model, uwagi, WiFi, LAN, FAX, NFC, ADF, duplex, Skan_Dwustr, A3, cena_drukarki FROM mytable";
if (isset($_GET['sortdatafield']))
	{
	$sortfields = array(
		"id",
		"rodzaj",
		"Model",
		"uwagi",
		"WiFi",
		"LAN",
		"FAX",
		"NFC",
		"ADF",
		"duplex",
		"Skan_Dwustr",
		"A3",
		"cena_drukarki"
	);
	$sortfield = $_GET['sortdatafield'];
	$sortorder = $_GET['sortorder'];
	if (($sortfield != NULL) && (in_array($sortfield, $sortfields)))
		{
		if ($sortorder == "desc")
			{
			$query = "SELECT id, rodzaj, Model, uwagi, WiFi, LAN, FAX, NFC, ADF, duplex, Skan_Dwustr, A3, cena_drukarki FROM mytable ORDER BY " . $sortfield . " DESC";
			}
		  else if ($sortorder == "asc")
			{
			$query = "SELECT id, rodzaj, Model, uwagi, WiFi, LAN, FAX, NFC, ADF, duplex, Skan_Dwustr, A3, cena_drukarki FROM mytable ORDER BY " . $sortfield . " ASC";
			}
		}
	}
$result = $mysqli->prepare($query);
$result->execute();
/* bind result variables */
$result->bind_result($id, $rodzaj, $Model, $uwagi, $WiFi, $LAN, $FAX, $NFC, $ADF, $duplex, $Skan_Dwustr, $A3, $cena_drukarki);
/* fetch values */
while ($result->fetch())
	{
	$orders[] = array(
		'id' => $id,
		'rodzaj' => $rodzaj,
		'Model' => $Model,
		'uwagi' => $uwagi,
		'WiFi' => $WiFi,
		'LAN' => $LAN,
		'FAX' => $FAX,
		'NFC' => $NFC,
		'ADF' => $ADF,
		'duplex' => $duplex,
		'Skan_Dwustr' => $Skan_Dwustr,
		'A3' => $A3,
		'cena_drukarki' => $cena_drukarki
	);
	}
echo json_encode($orders);
/* close statement */
$result->close();
/* close connection */
$mysqli->close();
?>