<?php
	#Include the connect.php file
	include('connect.php');
	#Connect to the database
	$mysqli = new mysqli("$hostname", "$username", "$password", $database);
	/* check connection */
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	} else {
		echo "połączono";
	}
	// Initialize pagenum and pagesize
	$pagenum = $_POST['pagenum'];
	$pagesize = $_POST['pagesize'];		
	$start = $pagenum * $pagesize;
	if (isset($_POST['sortdatafield']))
	{
		$sortfield = $_POST['sortdatafield'];
		$sortorder = $_POST['sortorder'];
		
		if ($sortorder != '')
		{			
			if ($sortorder == "desc")
			{
				$query = "SELECT id, rodzaj, Model, uwagi, WiFi, LAN, FAX, NFC, ADF, duplex, Skan_Dwustr, A3, cena_drukarki FROM mytable ORDER BY" . " " . $sortfield . " DESC LIMIT ?, ?";
			}
			else if ($sortorder == "asc")
			{
				$query = "SELECT id, rodzaj, Model, uwagi, WiFi, LAN, FAX, NFC, ADF, duplex, Skan_Dwustr, A3, cena_drukarki FROM mytable ORDER BY" . " " . $sortfield . " ASC LIMIT ?, ?";
			}			
			$result = $mysqli->prepare($query);
			$result->bind_param('ii', $start, $pagesize);
		}
		else
		{
			$result = $mysqli->prepare("SELECT id, rodzaj, Model, uwagi, WiFi, LAN, FAX, NFC, ADF, duplex, Skan_Dwustr, A3, cena_drukarki FROM mytable LIMIT ?, ?");
			$result->bind_param('ii', $start, $pagesize);		
		}
	}
	else
	{
		$result = $mysqli->prepare("SELECT id, rodzaj, Model, uwagi, WiFi, LAN, FAX, NFC, ADF, duplex, Skan_Dwustr, A3, cena_drukarki FROM mytable LIMIT ?, ?");
		$result->bind_param('ii', $start, $pagesize);		
	}
	
	 /* execute query */
	$result->execute();
	/* bind result variables */
	$result->bind_result($id, $rodzaj, $Model, $uwagi, $WiFi, $LAN, $FAX, $NFC, $ADF, $duplex, $Skan_Dwustr, $A3, $cena_drukarki);
	/* fetch values */
	while ($result -> fetch()) {
		$customers[] = array(
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
	echo json_encode($customers);	
	// get the total rows.
/*	$result = $mysqli->prepare("SELECT FOUND_ROWS()");
	$result->execute();
	$result->bind_result($total_rows);
	$result->fetch();
	$data[] = array(
       'TotalRows' => $total_rows,
	   'Rows' => $customers
	); */

	/* close statement */
	$result->close();
	/* close connection */
	$mysqli->close();
?>