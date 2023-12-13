<?php


class Daftarbuku{
    public $buku=array("lord of the rings","starwars","kalkulus 2");

    function tampilin(){
        echo("<h1><b>Daftar Buku</b></h1>");
        foreach($this->buku as $value ){
            echo("<form action='login.php' method='post'>");
            echo ("$value");
            echo('<input type="hidden" name="buku" value="'.$value.'">');
            echo ("<input type='submit'>");
            echo("</form><br>");
           
        }
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
</head>
<body>

<?php
$test=new Daftarbuku();
$test->tampilin();

?>

</body>
</html>
