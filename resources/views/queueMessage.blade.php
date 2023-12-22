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
                    <li><a class="aWhite" href="#">Pending Queue</a></li>
                    <li><a class="aWhite" href="http://127.0.0.1:8000/helpdesk">Help Desk</a></li>
                    <li><button onclick="tambahClass2()">Change Background</button></li>
                </ul>
            </nav>
        </div>
        <div class="centerWithBox">
            <b>Pending Messages</b>
            <table class="customers">
                <tr>
                    <th>ticket id</th>
                    <th>timestamp</th>
                    <th>from</th>
                    <th>messages</th>
                    <th>status</th>
                    <th>action</th>
                </tr>
                <tr>
                    <td>sn2iu98</td>
                    <td>1697627732</td>
                    <td>628567957755</td>
                    <td>halo, saya tertarik dengan produk ini, apakah available?</td>
                    <td>pending</td>
                    <td><a href="http://127.0.0.1:8000/reply">Reply</a></td>
                </tr>
                <tr>
                    <td>sn23123</td>
                    <td>1697627838</td>
                    <td>628567957755</td>
                    <td>ini ga nipu kan?</td>
                    <td>pending</td>
                    <td><a href="http://127.0.0.1:8000/reply">Reply</a></td>
                </tr>
                <tr>
                    <td>sn23123</td>
                    <td>1697627889</td>
                    <td>628567957755</td>
                    <td>produk ga sesuai</td>
                    <td>pending</td>
                    <td><a href="http://127.0.0.1:8000/reply">Reply</a></td>
                </tr>
                <tr>
                    <td>sn2iu98</td>
                    <td>1697627732</td>
                    <td>628567957755</td>
                    <td>halo, saya tertarik dengan produk ini, apakah available?</td>
                    <td>pending</td>
                    <td><a href="http://127.0.0.1:8000/reply">Reply</a></td>
                </tr>
                <tr>
                    <td>sn23123</td>
                    <td>1697627838</td>
                    <td>628567957755</td>
                    <td>ini ga nipu kan?</td>
                    <td>pending</td>
                    <td><a href="http://127.0.0.1:8000/reply">Reply</a></td>
                </tr>
                <tr>
                    <td>sn23123</td>
                    <td>1697627889</td>
                    <td>628567957755</td>
                    <td>produk ga sesuai</td>
                    <td>pending</td>
                    <td><a href="http://127.0.0.1:8000/reply">Reply</a></td>
                </tr>
              </table>

        </div>
        <div class="centerWithBox">
            <h2>Critics</h2><br>
            <canvas id="myChart3" style="width:100%;max-width:600px"></canvas>
        </div>
        
       
        
        
    </div>
    <script>
        var xValues2 = ["January", "February", "March", "April", "June"];
        var yValues2 = [55, 49, 44, 24, 15];
        var barColors = ["red", "green","blue","orange","brown"];

        new Chart("myChart3", {
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