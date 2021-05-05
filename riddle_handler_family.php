<?php
//lets recall our session cookies
if (isset($_COOKIE["login_name"]) and isset($_COOKIE["user_id"])){
    $login_name = $_COOKIE["login_name"];
    $id = $_COOKIE["user_id"];
}
else {
    //login_name or id not found. abort and go back to login page
    header("Location: ../landing_page_family.html");
    die();
}

//lets verify the name and id before we proceed to make the db request
if (is_null($login_name) or is_null($id)) {
    //login_name or id not found. abort and go back to login page
    header("Location: ../landing_page_family.html");
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
if ($riddle == "Corona") {
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
    //solution is wrong, print some error and let the user retry --> brauche ich nicht, da JS eine Fehlermeldung bringt
    // $message = "Leider nein.";
    // echo "<html>
    // <script type='text/javascript'>
    // if (confirm('Leider falsch. Nochmal probieren?')) {
    //   // go to riddle
    //   window.location.href = './riddle.php';
    // } else {
    //   // go back to login
    //   window.location.href = './index.html';
    // }
    // </script></html>";
    header("Location: ../raetsel_family.html"); 
    die();
}

//close the connection when we are done.
$conn->close();
?>