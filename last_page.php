<!DOCTYPE html>
<html>
<body>

<?php
// error_reporting(E_ALL);
//ini_set( 'display_errors','1');


// Connecting, selecting database
$dbconn = pg_connect("host=localhost dbname=lab2 user=akai password=")
    or die('Could not connect: ' . pg_last_error());

// Performing SQL query
$query = 'SELECT combination FROM Problems';
$result = pg_query($query) or die('Query failed: ' . pg_last_error());




// Printing results in HTML
while ($arr = pg_fetch_array($result, null, PGSQL_ASSOC))
{
	//echo "hej";
	foreach ($arr as $col_value) {

		 echo 'Du har nu lämnat in uppgiften';


	}

}






// Free resultset
pg_free_result($result);

// Closing connection
pg_close($dbconn);
?>

</body>
</html>
