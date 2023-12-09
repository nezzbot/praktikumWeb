<?

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $email=htmlspecialchars($_POST["email"]);
    $password=htmlspecialchars($_POST["password"]);
    
    if($email=='nezha.chandra@gmail.com' and $password=='123456'){
        header("Location: http://localhost/praktikum/tht8/ManagementAdminPage.html");
        exit();
    }
    else{
        header("Location: http://localhost/praktikum/tht8/login.html");
        exit();
    }
}

?>