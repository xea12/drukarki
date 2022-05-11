<?php
#Include the connect.php file
include ('connect.php');

$mysqli = new mysqli($hostname, $username, $password, $database);


if (mysqli_connect_errno())
	{
	$mysqli -> query("SET NAMES 'utf8'");
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
	}
// get data and store in a json array
$query = "SELECT id, rodzaj, model, uwagi, wifi, lan, fax, nfc, adf, duplex, skan_dwustr, a3, cena_drukarki FROM mytable";
if (isset($_POST['insert']))
	{
	// INSERT COMMAND
	$query = "INSERT INTO `mytable`(`rodzaj`, `model`, `uwagi`, `wifi`, `lan`, `fax`, `nfc`, `adf`, `duplex`, `skan_dwustr`, `a3`, `cena_drukarki`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
	$result = $mysqli->prepare($query);
	$result->bind_param('ssssssssssss', $_POST['rodzaj'], $_POST['model'], $_POST['uwagi'], $_POST['wifi'], $_POST['lan'], $_POST['fax'], $_POST['nfc'], $_POST['adf'], $_POST['duplex'], $_POST['skan_dwustr'], $_POST['a3'], $_POST['cena_drukarki']);
	$res = $result->execute() or trigger_error($result->error, E_USER_ERROR);
	// printf ("New Record has id %d.\n", $mysqli->insert_id);
	echo $res;
	}
  else if (isset($_GET['update']))
	{
	// UPDATE COMMAND
	$query = "UPDATE `mytable` SET `rodzaj`=?, `model`=?, `uwagi`=?, `wifi`=?, `lan`=?, `fax`=?, `nfc`=?, `adf`=?, `duplex`=?, `skan_dwustr`=?, `a3`=?, `cena_drukarki`=? WHERE `id`=?";
	$result = $mysqli->prepare($query);
	$result->bind_param('ssssssssssssi', $_GET['rodzaj'], $_GET['model'], $_GET['uwagi'], $_GET['wifi'], $_GET['lan'], $_GET['fax'], $_GET['nfc'], $_GET['adf'], $_GET['duplex'], $_GET['skan_dwustr'], $_GET['a3'], $_GET['cena_drukarki'], $_GET['id']);
	$res = $result->execute() or trigger_error($result->error, E_USER_ERROR);
	echo $res;
	}
  else if (isset($_GET['delete']))
	{
	// DELETE COMMAND
	$query = "DELETE FROM mytable WHERE id=?";
	$result = $mysqli->prepare($query);
	$result->bind_param('i', $_GET['id']);
	echo $res;
	}
  else
	{
	// SELECT COMMAND
	$result = $mysqli->prepare($query);
	$result->execute();
	/* bind result variables */
	$result->bind_result($id, $rodzaj, $model, $uwagi, $wifi, $lan, $fax, $nfc, $adf, $duplex, $skan_dwustr, $a3, $cena_drukarki); 
	/* fetch values */
	while ($result->fetch())
		{
		$drukarki[] = array(
			'id' => $id,
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