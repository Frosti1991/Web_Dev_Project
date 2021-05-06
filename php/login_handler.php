<?php

//retrieve input data from POST request payload. The data is found in the $_POST variable

//for now, we expect the following variables: name

$name = $_POST["name_input"];
$typ =  $_GET["path"];

echo "<script type='text/javascript'>alert($typ);</script>";

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

//check if the user is already present in our database. We look for entries with the corresponding name:
$sql = " SELECT * FROM guest_list WHERE login_name='".$name ."'"; // * means we retrieve all columns from the table where the name corresponds to the one entered

$result = $conn->query($sql); // lets process it

$url = "";
if ($typ === "family") {
        //riddle solved, forward to final page
        $url = "Location:  ../index_family.html"
    }else {
        //riddle not solved, forward to riddle
        $url = "Location:  ../index_friends.html"
    }

if ($result->num_rows > 0) {  //checks if there is at least one record to display
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //we found an entry for the user
    $login_name = $row["login_name"];
    $id = $row["id"];
    $solved = $row["riddle_solved"];  // we expect a bool here, stating whether the riddle has been solved successfully. (0/false = not solved, 1/true = solved)

    //lets store the login_name in a cookie to use it in the process
    setcookie('login_name', $login_name); // expires when the session ends, i.e. when the browser window is closed
    setcookie('user_id', $id); // expires when the session ends, i.e. when the browser window is closed

    //check whether riddle was solved
    if ($solved) {
        //riddle solved, forward to final page
        header("Location: ../invitation.html");
        die();
    }else {
        //riddle not solved, forward to riddle
        header($url);
        die();
    }
  }

} else {  // no record with the given name found
  $message = "Keine Einträge gefunden";

  //add new record to the database
  $sql = "INSERT INTO guest_list (login_name) VALUES ('".$name."')";
  if ($conn->query($sql) === TRUE) {
    //forward to the riddle page
   header($url);
   die();
  } else {
  // something went wrong :-(
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
  }
}

//close the connection when we are done.
$conn->close();
?>