<!DOCTYPE html>
<html>
<body>

<?php
// error_reporting(E_ALL);
//ini_set( 'display_errors','1');


$courseID = $_GET['courseID'];
$group = $_GET['group'];
$studentID = $_GET['studentID'];
$recitation = $_GET['recitation'];
$combination = $_GET['combination'];
echo "ditt courseid är: $courseID ";
echo "<br>";


// Connecting, selecting database
$dbconn = pg_connect("host=localhost dbname=lab2 user=postgres password=Soroush1994")
    or die('Could not connect: ' . pg_last_error());


$Pointquery = "SELECT points FROM problems WHERE combination = '$combination' AND number = '$recitation'";


$PointResult = pg_query($Pointquery) or die('Query failed:' . pg_last_error());
// echo "NumberResult: $PointResult\n";
$ans = pg_fetch_result($PointResult, 0, points);

echo "Ditt poäng är : $ans";
echo "<br>";
echo "Ditt användarid är : $studentID";


$Teacherquery = "SELECT teacherid FROM course WHERE courseid = '$courseID'";


$TeacherResult = pg_query($Teacherquery) or die('Query failed:' . pg_last_error());
// echo "NumberResult: $PointResult\n";
$teacherID = pg_fetch_result($PointResult, 0, teacherid);

$sql = "INSERT INTO submitted(studentid, courseid, teacherid, groupr, number, combination, points) VALUES($studentID,$courseID,$teacherID,$group, $recitation, $combination, $ans)";

// Performing SQL query
$result = pg_query($sql);

echo 'Du har nu lämnat in uppgiften';
echo "fuu";

// Printing results in HTML
var_dump($result);





// Free resultset

// Closing connection
pg_close($dbconn);
?>

</body>
</html>
