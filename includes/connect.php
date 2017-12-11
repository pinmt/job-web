<?php
	$host = 'localhost';
    $dbname = 'db_timviec';
    $username = 'root';
    $password = '';

	$link = mysqli_connect("localhost", "root", "", "db_timviec") or die("không thể kết nối tới database");
	$link->set_charset("utf8");
		if($link === false){
		    die("ERROR: Could not connect. " . mysqli_connect_error());
		}
        else{
            echo "connect ok";
        }
?>


<?php
    /*$host = 'localhost';
    $dbname = 'db_timviec';
    $username = 'root';
    $password = '';
  
    try {
        $con = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
        echo "Connected to $dbname at $host successfully.";
    } catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }*/
 ?>