<?php

class anggota{
    public $username;
    public $password;
    public $user=array("nezha","boba","udin");
    public $buku;

    function login($username,$password, $buku){
        if($username=="nezha" and $password=="123"){
            echo('selamat '.$username.' anda berhasil pinjam buku '.$buku.'');
        }
        else{
            echo('<form action="login.php" method="post">');
            // echo ("$buku");
            echo('<input type="hidden" name="buku" value="'.$buku.'">');
            echo('username');
            echo('<input type="text" name="username"><br>');
            echo('password');
            echo('<input type="text" name="password"><br>');
            echo ("<input type='submit'>");
            echo("</form><br>");
        }

    }
   

}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // echo ("hello world");
  
    $buku = htmlspecialchars($_POST["buku"]);
    $usn = htmlspecialchars($_POST["username"]);
    $pass = htmlspecialchars($_POST["password"]);
    $proses = new anggota;
    $proses->login($usn, $pass, $buku);
    
}

?>
