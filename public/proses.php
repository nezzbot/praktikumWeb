<?
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $reply = htmlspecialchars($_POST["reply"]);
    
    
    $response = "Message: $reply";

    
    echo $response;

}
?>
