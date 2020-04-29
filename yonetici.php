<?php
$connect=mysqli_connect("localhost","root","","atm2");
mysqli_query($connect,"SET NAMES UTF8");

require("vt.php");
if(!$connect){
	die("Bağlantı başarısız".mysqli_connect_error());
}

else
{
	echo "";
}



?>
<fieldset height="1000" >



<legend color="red" border="200"><h3>YÖNETİCİ SAYFASI</h3></legend>




<html>
<head>
	<meta charset="utf-8">
	<title >YÖNETİCİ SAYFASI</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Kullanici", "İlçeler", { role: "style" } ],
        ["Balçova", 33.94, "#b87333"],
        ["Çiğli", 10.49, "silver"],
        ["Konak", 19.30, "gold"],
        ["Buca", 36.27, "color: #e5e4e2"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Bakım Ve Onarım Oranı",
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>
  
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Kullanici', 'İlçeler'],
          ['Balçova',     2],
          ['Konak',      1.2],
          ['Bornova',  1],
          ['Karşıyaka', 0.60],
		  ['Gaziemir', 0.38],
		  ['SPR 3', 0]
        ]);

        var options = {
          title: 'En Çok ATM ye Sahip İlçeler',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Kullanici', 'İlçeler'],
          ['Buca',     2],
          ['Bornova',      1.3],
          ['Güzelbahçe',  1],
          ['Karşıyaka', 0.70]
		  
        ]);

        var options = {
          title: 'İlçelere Göre Kullanım Sıklığı'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
	
	
<div id="columnchart_values" style="width: 900px; height: 300px;"></div>
  
 
	
</head>
<body>

<div id="donutchart" style="width: 900px; height: 500px;"></div>
 <div id="piechart" style="width: 900px; height: 500px;"></div>
 <input type="button" name="button" id="buton" value="Çıkış Yap" onclick="window.location ='http://localhost/logout.php'"></input>
 <br>
 <br>
</body>
</html>
