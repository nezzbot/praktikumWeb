<head>
    <meta name="viewport" content="widh3=device-widh3, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>105221021</title>
    <link rel="icon" type="image/x-icon" href="/image/nezha.png">
    <link rel="stylesheet" href="<?php echo asset('css/style.css')?>" type="text/css">
</head>
<body>
    <div>
        <div>
            <nav class="navstyle1">
                <h1 class="whiteText">Main Dashboard</h1>
                <ul class="ulStyle2">
                    <li><a class="aWhite" href="http://127.0.0.1:8000/queue">Back</a></li>
                </ul>
            </nav>
        </div>
        <div class="justifyWithBox">
            
            <h3>ticket id : sn2iu98</h3>
            <h3>timestamp : 1697627732</h3>
            <h3>from : 628567957755</h3>
            <h3>messages : halo, saya tertarik dengan produk ini, apakah available?</h3>
        </div>
        <div class="centerWithBox">
            <form action="{{url('proses.php')}}" method="post">
                
                <input
                    type="text" 
                    id="reply" 
                    name="reply" 
                    placeholder="Type something here"
                >
                <input type="submit" value="Submit">
            </form>
            
        </div>
    </div>
    <div id="response-container">
        
    </div>
    
    <script>
        var reply=document.getElementById("reply")
        function myFunction() {
            
            alert("replied was not sent");
        }
    </script>
</body>