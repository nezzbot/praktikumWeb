<?php

echo("<h1>PPN (gambar garuda)</h1>");
echo("<h3>Pendataan Penduduk Nasional</h3>");
echo("");
echo('<form action="http://127.0.0.1:8000/hasil" method="post">');
echo('NIK');
echo('<input type="text"><br>');
echo('Nama');
echo('<input type="text"><br>');
echo('Provinsi');
echo('<input type="text"><br>');
echo('Kota');
echo('<input type="text"><br>');
echo('Nomor telpon');
echo('<input type="text"><br>');
echo('<a href="http://127.0.0.1:8000/hasil">submit</a>');
echo('</form>');
?>