<?php
//For infinity Free host
// $host = "sql304.epizy.com"; /* Host name */
// $user = "epiz_31819650"; /* User */
// $password = "o9B50Rwn2uWXT"; /* Password */
// $dbname = "epiz_31819650_treasure_hunt_db"; /* Database name */
 




//For 000webhost
$host = "localhost"; /* Host name */
$user = "id19040562_arthunt_user"; /* User */
$password = "X8?+*k}WGou&Ccf@"; /* Password */
$dbname = "id19040562_arthunt"; /* Database name */
 




//For localhost
// $host = "localhost"; /* Host name */
// $user = "root"; /* User */
// $password = ""; /* Password */
// $dbname = "treasure_hunt_db"; /* Database name */




$conn = mysqli_connect($host, $user, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
mysqli_set_charset($conn, "utf8");

?>