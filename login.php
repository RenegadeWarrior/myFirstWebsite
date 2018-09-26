<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = mysqli_real_escape_string($conn,test_input($_POST["email"]));
  $password = test_input($_POST["password"]);
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
  printf("~\n");
$sql = "SELECT * FROM `userdata` WHERE email='$email'";
$res=$conn->query($sql);
if($res->num_rows==0){
  printf("No user Exists!");
}
else{
  /* fetch object array */
  while ($row = $res->fetch_row()) {
       printf ("%s %s %s %s\n", $row[0], $row[1] , $row[2] , $row[3]);
  }
  /* free result set */
  $res->close();
}
$conn->close();
?>