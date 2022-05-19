<?php
if(isset($_POST['submit']))
{
    header('Location: index.php');
    exit();

} 
include('index.php');
include ('connect.php');
$con = mysqli_connect($hostname, $username, $password);
$query = '';
$sqlScript = file('db.sql');
foreach ($sqlScript as $line)	{
	
	$startWith = substr(trim($line), 0 ,2);
	$endWith = substr(trim($line), -1 ,1);
	
	if (empty($line) || $startWith == '--' || $startWith == '/*' || $startWith == '//') {
		continue;
	}
		
	$query = $query . $line;
	if ($endWith == ';') {
		mysqli_query($con,$query) or die('<div class="error-response sql-import-response">Problem in executing the SQL query <b>' . $query. '</b></div>');
		$query= '';		
		echo $query;
	}
}
$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$i = 0;
$handle = fopen("test.csv", "r"); // opening CSV file for reading
if ($handle) { // if file successfully opened
    while (($CSVrecord = fgets($handle, 4096)) !== false) { // iterating through each line of our CSV

        list($field1, $field2, $field3, $field4, $field5, $field6, $field7, $field8, $field9, $field10, $field11, $field12) = explode(',', $CSVrecord); // exploding CSV record (line) to the variables (fields)
		$i = $i + 1; 
		
		$sql = "INSERT INTO rodzaj (rodzaj) values ('".$field1."')";
		$sql1 = "INSERT INTO drukarki (model,funkcje_id_funkcje,uwagi_id_uwagi,rodzaj_id_rodzaj,cena_id_cena) values ('".$field2."', '".$i."', '".$i."', '".$i."', '".$i."')";
		$sql2 = "INSERT INTO cena (cena_drukarki) values ('".$field12."')";
		$sql3 = "INSERT INTO uwagi (uwagi) values ('".$field3."')";
		$sql4 = "INSERT INTO funkcje (wifi, lan, fax, nfc, adf, duplex, skan_dwustr, a3) values ('".$field4."','".$field5."','".$field6."','".$field7."','".$field8."','".$field9."','".$field10."','".$field11."')";
		$statement = $conn->prepare($sql);
		$statement->execute();
		$stm1 = $conn->prepare($sql2);
		$stm1->execute();
		$stm2 = $conn->prepare($sql3);
		$stm2->execute();
		$stm3 = $conn->prepare($sql4);
		$stm3->execute();
		$stm = $conn->prepare($sql1);
		$stm->execute();	

    }
	
    fclose($handle); // closing file handler
}

?>
