<?php
#Include the connect.php file
include ('connect.php');
// Connect to the database
$mysqli = new mysqli($hostname, $username, $password, $database);
/* check connection */
if (mysqli_connect_errno())
	{
	$mysqli -> query("SET NAMES 'utf8'");
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
	}
// get data and store in a json array
$query = "SELECT id, rodzaj, Model, uwagi, WiFi, LAN, FAX, NFC, ADF, duplex, Skan_Dwustr, A3, cena_drukarki FROM mytable";
if (isset($_GET['insert']))
	{
	// INSERT COMMAND
	$query = "INSERT INTO `mytable`(`rodzaj`, `Model`, `uwagi`, `WiFi`, `LAN`, `FAX`, `NFC`, `ADF`, `duplex`, `Skan_Dwustr`, `A3`, `cena_drukarki`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
	$result = $mysqli->prepare($query);
	$result->bind_param('ssssssssssss', $_GET['rodzaj'], $_GET['Model'], $_GET['uwagi'], $_GET['WiFi'], $_GET['LAN'], $_GET['FAX'], $_GET['NFC'], $_GET['ADF'], $_GET['duplex'], $_GET['Skan_Dwustr'], $_GET['A3'], $_GET['cena_drukarki']);
	$res = $result->execute() or trigger_error($result->error, E_USER_ERROR);
	// printf ("New Record has id %d.\n", $mysqli->insert_id);
	echo $res;
	}
  else if (isset($_GET['update']))
	{
	// UPDATE COMMAND
	$query = "UPDATE `mytable` SET `rodzaj`=?, `Model`=?, `uwagi`=?, `WiFi`=?, `LAN`=?, `FAX`=?, `NFC`=?, `ADF`=?, `duplex`=?, `Skan_Dwustr`=?, `A3`=?, `cena_drukarki`=? WHERE `id`=?";
	$result = $mysqli->prepare($query);
	$result->bind_param('ssssssssssssi', $_GET['rodzaj'], $_GET['Model'], $_GET['uwagi'], $_GET['WiFi'], $_GET['LAN'], $_GET['FAX'], $_GET['NFC'], $_GET['ADF'], $_GET['duplex'], $_GET['Skan_Dwustr'], $_GET['A3'], $_GET['cena_drukarki'], $_GET['id']);
	$res = $result->execute() or trigger_error($result->error, E_USER_ERROR);
	// printf ("Updated Record has id %d.\n", $_GET['EmployeeID']);
	echo $res;
	}
  else
	{
	// SELECT COMMAND
	$result = $mysqli->prepare($query);
	$result->execute();
	/* bind result variables */
	$result->bind_result($id, $rodzaj, $Model, $uwagi, $WiFi, $LAN, $FAX, $NFC, $ADF, $duplex, $Skan_Dwustr, $A3, $cena_drukarki); 
	/* fetch values */
	while ($result->fetch())
		{
		$drukarki[] = array(
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
	echo json_encode($drukarki);
	}
$result->close();
$mysqli->close();
/* close connection */
?>