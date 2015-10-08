<?php 

//these are for the PHP Helper files
include ('databaseConn.php');

if(isset($_GET["no"]) && $_GET["no"] == "1") {  // for inserting
	Insert($_GET["email"], $_GET["name"], $_GET["tel"], $_GET["age"]);
}

function Insert($email, $name, $tel, $age) {
	$resp = "-1";
	try {
		$query = "insert into skrillex(Email, Name, Tel, Age) values('$email', '$name', '$tel', '$age')";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			$resp = "1";
		}
		echo $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		echo $resp;
	}
}

?>