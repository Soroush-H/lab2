<!DOCTYPE html>
<html>
<body>

<?php
// error_reporting(E_ALL);
//ini_set( 'display_errors','1'); 


// Connecting, selecting database
$dbconn = pg_connect("host=localhost dbname=lab2 user=postgres password=Soroush1994")
    or die('Could not connect: ' . pg_last_error());
$courseID = $_GET['CourseID'];
$group = $_GET['group'];

echo "här är courseid: $courseID";
echo "här är group: $group";


$CourseIDquery = "SELECT Number FROM Recitation WHERE courseid = '$courseID' AND groupr = '$group'";

echo "test1\n";

$NumberResult = pg_query($CourseIDquery) or die('Query failed:' . pg_last_error());
echo "NumberResult: $NumberResult\n";
$ans = pg_fetch_object($NumberResult);
echo "ans: $ans\n";
echo "här är number: $ans";

// // Performing SQL query
// $query = "SELECT combinations FROM problems WHERE number = '$Number'";
// $result = pg_query($query) or die('Query failed: ' . pg_last_error());




// // Printing results in HTML
// while ($arr = pg_fetch_array($result, null, PGSQL_ASSOC))
// {
// 	//echo "hej";
// 	foreach ($arr as $col_value) {
// 		 echo'<form action="last_page.php">';
// 		 echo '<form>';
// 		 echo '<input type="radio" name="combinations" value= $col_value >';
// 		 echo "$col_value";
// 		 echo '<br>';
// 		 echo'<input type="submit" value="Submit">';
// 		 echo '</form>';

   
// 	}

// }






// Free resultset
pg_free_result($result);

// Closing connection
pg_close($dbconn);
?>

</body>
</html>