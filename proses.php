<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $mk1 = $_POST["mk1"];
   $mk2 = $_POST["mk2"];
   $mk3 = $_POST["mk3"];

   $result = ($mk1 + $mk2 + $mk3) / 30; 
   if ($result > 70) {
      $message = "lulus dengan IPK $result";
   } else {
      $message = "tidak lulus dengan IPK $result";
   }

   header("Location: form.html?message=" . urlencode($message));
   exit();
} else {
   
   header("Location: form.html");
   exit();
}
?>

