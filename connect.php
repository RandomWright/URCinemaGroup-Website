<?
if (substr($_SERVER['REQUEST_URI'],-11)=='connect.php') {
	echo "Stop it.";
} else {
	/*--------- DATABASE CONNECTION INFO---------*/
include("/usr/cwis/connect/urcg-owner/mysql.connect");
	$db=get_connection();
	// connect to the database server
//	if (!($db = mysql_pconnect($hostname, $mysql_login , $mysql_password))){
//	  die("Can't connect to database server.");
//	}else{
//	  // select a database
//		if (!(mysql_select_db("$database",$db))){
//		  die("Can't connect to database.");
//		}
//	}
}
?>