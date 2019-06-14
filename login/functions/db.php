<?php

$con = mysqli_connect('localhost', 'root', '', 'login_db');

function row_count($result) {

	return mysqli_num_rows($result);

}


function escape($string) {
	    global $con;

	    return mysqli_real_escape_string($con, $string);

}



function query($query) {

   global $con;

   return mysqli_query($con, $query);

   confirm($result);

}

function confirm($result) {

	global $con;

	if(!$result) {


		die("QUERY FAILED". mysql_error($con));
	}
}


?>