<?php
// //lets recall our session cookies  --> nicht mehr nötig, wer auf ANmelde-Seite ist, soll sich einfach anmelden :D
// if (isset($_COOKIE["login_name"]) and isset($_COOKIE["user_id"])){
//     $login_name = $_COOKIE["login_name"];
//     $id = $_COOKIE["user_id"];
// }
// else {
//     //login_name or id not found. abort and go back to login page
//     header("Location: ../landing_page_friends.html");
//     die();
// }

// //lets verify the name and id before we proceed to make the db request
// if (is_null($login_name) or is_null($id)) {
//     //login_name or id not found. abort and go back to login page
//     header("Location: ../landing_page_friends.html");
//     die();
// }

//retrieve input data from POST request payload. The data is found in the $_POST variable
//for now, we expect the following variables: riddle
$participation = $_POST["participation"];
$num_person=$_POST["num_person"];
$invite_name=$_POST["invite_name"];
$sleep=$_POST["sleep"];
$allergy=$_POST["allergy"];
$text_allergy=$_POST["text_allergy"];
$text_music=$_Post["text_music"];
$activity=$_POST["activity"];


//First, lets look at our credentials
$servername = "localhost"; //if we host our php file at the same url as the database, we can use localhost. Most database providers restrict access to local anyway.
$username = "guest";
$password = "p@bT1UbrloBA*Zvl";
$database = "guest";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


// fill form elements into database "guest_list"
//add new record to the database
$sql = "INSERT INTO guest_list (participation) VALUES ('".$participation."')";
$sql = "INSERT INTO guest_list (num_person) VALUES ('".$num_person."')";
// usw.
if ($conn->query($sql) === TRUE) {
  //forward to the confirmation page

 header("Location: ../confirmation.html");
 die();
} else {
// something went wrong :-(
  echo "<br>Error: " . $sql . "<br>" . $conn->error;
}



//close the connection when we are done.
$conn->close();
?>