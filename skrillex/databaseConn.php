<?php 

	//Database=hoppindAHTChhCEe;Data Source=ap-cdbr-azure-southeast-a.cloudapp.net;User Id=b7f440f92f425e;Password=86548230

	//to make the database connection here! (GoDaddy server one)
	// $connection=mysql_connect("50.62.209.154","theMRFinal","Mresearch123");
	// if(!$connection) {
	//     die("Error Establishing connection");
	// }
	// $db = mysql_select_db("courses_",$connection);
	// if(!$db) {
	//     die("Cannot select the database");
	// }

	// (localhost connection settings)
	$connection=mysql_connect("ap-cdbr-azure-southeast-a.cloudapp.net","b7f440f92f425e","86548230");
	if(!$connection) {
	    die("Error Establishing connection");
	}
	$db = mysql_select_db("hoppindAHTChhCEe",$connection);
	if(!$db) {
	    die("Cannot select the database");
	}

?>