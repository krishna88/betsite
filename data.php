<?php

require_once 'config.php';

header("Cache-Control: no-cache, must-revalidate");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");

$con=mysql_connect($db_hostname,$db_username,$db_password) or die(mysql_error());
mysql_select_db($db_database,$con) or die(mysql_error());

$arr=array();
$result=mysql_query("SELECT * FROM teams WHERE team LIKE '%".mysql_real_escape_string($_GET['chars'])."%'",$con) or die(mysql_error());

if(mysql_num_rows($result)>0)

	{
    	while($data=mysql_fetch_row($result)){
        // Store data in array
        $arr[]=array(
            "id" => $data[0],
            "data" => $data[1],
         
        );
    }
}
mysql_close($con);
// Encode it with JSON format
echo json_encode($arr);



?>
