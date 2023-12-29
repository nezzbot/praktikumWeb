<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>105221021</title>
    <link rel="icon" type="image/x-icon" href="/image/nezha.png">
    <link rel="stylesheet" href="<?php echo asset('css/style.css')?>" type="text/css"> 
</head>
<body>
    <div id="main">
        <div>
            <nav class="navstyle1">
                <h1 class="whiteText">Main Dashboard</h1>
                <ul class="ulStyle2">
                    <li><a class="aWhite" href="http://127.0.0.1:8000/">Home</a></li>
                    <li><a class="aWhite" href="queueMessage.html">Pending Queue</a></li>
                    <li><a class="aWhite" href="#">Help Desk</a></li>
                    <li><button onclick="tambahClass2()">Change Background</button></li>
                </ul>
            </nav>
        </div>
        <div class="centerWithBox">
            <div class="flex-container">
                <img src="/image/nezha.png" width="100" height="100">
                <div class="justifyWithBox">
                    <p><a href="mailto:nezha.chandra@gmail.com"><h1>Contact Me</h1></a></p>
                </div>
            </div>
        </div>
    </div>
    <script>
        function tambahClass2() {
            var element = document.getElementById("main");
            element.classList.toggle("color");
        }
    </script>
    
    
</body>