<?php
$name = $_GET["name"];
$typ = $_GET["typ"];

$abort_url = "";
$raetsel_url = "";
if ($typ === "family") {
        //riddle solved, forward to final page
        $abort_url = "Location:  ../landing_page_family.html?name=".$name."&typ=".$typ;
        $raetsel_url = "Location:  ../raetsel_family.php?name=".$name."&typ=".$typ;
    }else {
        //riddle not solved, forward to riddle
        $abort_url = "Location:  ../landing_page_friends.html?name=".$name."&typ=".$typ;
        $raetsel_url = "Location:  ../raetsel_friends.php?name=".$name."&typ=".$typ;
    }
//lets recall our session cookies
if (isset($name) and isset($typ)){
   //alright, lets continue
}
else {
    //login_name or id not found. abort and go back to login page
    header($abort_url);
    die();
}

//lets verify the name and id before we proceed to make the db request
if (is_null($name) or is_null($typ)) {
    //login_name or id not found. abort and go back to login page
    header($abort_url);
    die();
}

//retrieve input data from POST request payload. The data is found in the $_POST variable
//for now, we expect the following variables: riddle
$riddle = $_POST["riddle"];

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


// lets check if the solution is correct.
/*
Note: This script is executed server-side. Thus, we can do the check here without it beeing compromised. However, we should definitely not make this file public.
Still, this is in no way secure and should only be used for testing purposes.
*/

//riddle was to get "Corona" as solution
if ($riddle == "Corona" || $riddle == "corona"|| $riddle == "CORONA") {
    //correct answer. set flag and continue to the final page
    $sql = "UPDATE guest_list SET riddle_solved = 1 WHERE ID=".$id;
    if ($conn->query($sql) === TRUE) {
        header("Location: ../invitation.html"); 
        die();
    } else {
        // something went wrong :-(
        $message = "Error: " . $sql . "<br>" . $conn->error;
        echo "<script type='text/javascript'>alert(".$message.");</script>";
    }
} else {
    header($raetsel_url);
    die();
}

//close the connection when we are done.
$conn->close();
?>