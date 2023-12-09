<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // echo ("hello world");
  
    $reply = htmlspecialchars($_POST["reply"]);
    $response = "Submitted Data: <br>";
    $response .= "Message: $reply <br>";
    $response .= "Status: Success";
    echo $response;
}
?>
