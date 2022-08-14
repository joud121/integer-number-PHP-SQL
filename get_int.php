
<?php

/*1- first: on in your web site page phpmyadmin.com .
2-seconde  enter (NEW ) TO DO DATABASE NAME IS "phptest" NEKEST   name table IS "contacts".
3-  CREATE THREE column (ID ,NUME,NUM) "ID": IS INT PRUMARY KEY -- "NUME": IS VARCHARE  -- "NUM": IS INT  */

$host = "localhost";
$username = "root";
$password = "";

try 
{
    $conn = new PDO("mysql:host=$host;dbname=phptest", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}

if(isset($_GET['save_contact']))
{
	//print_r($_GET);
	
	
	$sql = "INSERT INTO contacts(name, num) VALUES('".addslashes($_GET['name'])."', '".addslashes($_GET['num'])."')";
	$conn->query($sql);
}

?>

<html>
<head>
		<title>PHP get int</title>
</head>
<body>
	<form action="" method="get">
		
			<div> Name: <input type="text" name="name" value="" /></div>
			<div> num: <input type="is_int" name="num" value="" /></div>
			<div> <input type="submit" name="save_contact" value="Save" /></div>
	</form>
</body>
</html>