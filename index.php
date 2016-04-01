<!DOCTYPE html>
<html>
<body>

<?php
// error_reporting(E_ALL);
//ini_set( 'display_errors','1'); 


// Connecting, selecting database
// $dbconn = pg_connect("host=localhost dbname=lab2 user=postgres password=Soroush1994")
//     or die('Could not connect: ' . pg_last_error());

// // Performing SQL query
// $query = 'SELECT combination FROM Problems';
// $result = pg_query($query) or die('Query failed: ' . pg_last_error());



  echo'<form action="problems_page.php" method= "get">';
  echo'Student ID:<br>';
  echo '<input type="text" name="StudentID" value=""><br>';
  echo'Course ID<br>';
  echo'<input type="text" name="CourseID" value=""><br><br>';
  echo'Group (between A and ):<br>';
  echo'<input type="text" name="group" value=""><br><br>';
  echo'Recitation number:<br>';
  echo'<input type="text" name="recitation" value=""><br><br>';
  echo'<input type="submit" value="Submit">';
  echo'</form>';

  //$insertquery = 'INSERT INTO Submitted VALUES ('')';

// Printing results in HTML
// while ($arr = pg_fetch_array($result, null, PGSQL_ASSOC))
// {


//   foreach ($arr as $col_value) {

//      echo '<form>';
//      echo '<input type="radio" name="combinations" value= $col_value >';
//      echo "$col_value";
//      echo '<br>';
//      echo '</form>';
   


//   }

// }






// Free resultset
//pg_free_result($result);

// Closing connection
//pg_close($dbconn);
?>

</body>
</html>