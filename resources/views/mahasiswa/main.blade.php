<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
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
                        <li><a class="aWhite" href="#">Home</a></li>
                        <li><a class="aWhite" href="http://127.0.0.1:8000/queue">Pending Queue</a></li>
                        <li><a class="aWhite" href="http://127.0.0.1:8000/helpdesk">Help Desk</a></li>
                        <li><button onclick="tambahClass2()">Change Background</button></li>
                    </ul>
                </nav>
        </div>
        <div>
            <img src="/image/bg.jpg" width="800" height="600">
            <div class="content">
                <div class="centerWithBox">
                    <b><h1>Welcome to User Interaction and Social Management Admin Page</h1></b>
                    ___________________________________<br>
                    <p>
                        <i>
                            <h2>
                                This is a page for admin managing anything that related to user interactions and social interest<br>
                                including costumer service, user interest analyst, global trend, and many more.<br>
                            </h2>
                        </i>
                    </p>
                </div>
                <div class="justifyWithBox">
                    
                </div>
            </div>
        </div>
        <div class="centerWithBox">
            <h2>Global trend</h2><br>
            <canvas id="myChart" style="width:100%;max-width:800px"></canvas>
        </div>
        <div class="centerWithBox">
            <h2>Interest rate</h2><br>
            <canvas id="myChart2" style="width:100%;max-width:800px"></canvas>
        </div>
    
    </div>
    <script>
        const xValues = [50,60,70,80,90,100,110,120,130,140,150];
        const yValues = [7,8,8,9,9,9,10,11,14,14,15];
        var xValues2 = ["January", "February", "March", "April", "June"];
        var yValues2 = [55, 49, 44, 24, 15];
        var barColors = ["red", "green","blue","orange","brown"];
        
        new Chart("myChart", {
            type: "line",
            data: {
                labels: xValues,
                datasets: [{
                    fill: false,
                    lineTension: 0,
                    backgroundColor: "rgba(0,0,255,1.0)",
                    borderColor: "rgba(0,0,255,0.1)",
                    data: yValues
                }]
            },
            options: {
                legend: {display: false},
                scales: {
                    yAxes: [{ticks: {min: 6, max:16}}],
                }
            }
        });

        new Chart("myChart2", {
            type: "bar",
            data: {
                labels: xValues,
                datasets: [{
                backgroundColor: barColors,
                data: yValues
                }]
            },
            options: {
                legend: {display: false},
                title: {
                display: true,
                
                }
            }
        });


        function tambahClass2() {
            var element = document.getElementById("main");
            element.classList.toggle("color");
        }
        </script>
        
</body>