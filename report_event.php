<?php
// Check for empty fields
if(empty($_POST['conductor_name'])        ||
   empty($_POST['event_name'])       ||
   empty($_POST['date'])       ||
   empty($_POST['report'])       )
   {
    echo "No arguments Provided!";
    return false;
   }
    
$conductor_name = $_POST['conductor_name'];
$event_name = $_POST['event_name'];
$report = $_POST['report'];
$date = $_POST['date'];

//database
$servername = "mysql.hostinger.in";
$username = "u828621389_trek";
$password = "mydatabase";
$dbname = "u828621389_trek";

/*$conductor_name = "Harshit";
$event_name = "nothing";
$report = "jffkfkfd";
$date = "12/10/2015";*/
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO events (conductor_name,event_name,date,report)
VALUES ('$conductor_name','$event_name','$date','$report');";
if ($conn->query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
return true;
?>
