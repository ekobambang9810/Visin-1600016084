<html>
  <head>
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        //Grafik 1
        var PieChartData= '<?php echo $PieChartData;?>';
        
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows(JSON.parse(PieChartData));

        var options = {'title':'<?php echo $PieChartTitle; ?>',
                       'width':300 ,
                       'height':300,is3D: true};

        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);

        // Grafik 2
        var BarChartData1= '<?php echo $BarChartData1;?>';
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Negeri');
        data.addColumn('number', 'Swasta');
        data.addRows(JSON.parse(BarChartData1));
        var options1 = {'title':'<?php echo $BarChartTitle1; ?>',
                       'width':450 ,
                       'height':300 };
        var chart = new google.visualization.ColumnChart(document.getElementById('chart1_div'));
        chart.draw(data, options1);
        
        //Visual 5
        var BarChartData2= '<?php echo $BarChartData2;?>';
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'SD');
        data.addColumn('number', 'SLTP');
        data.addColumn('number', 'SMK');
        data.addColumn('number', 'SMU');
        data.addRows(JSON.parse(BarChartData2));
        var options2 = {'title':'<?php echo $BarChartTitle2; ?>',
                       'width':600 ,
                       'height':600 };
        var chart = new google.visualization.BarChart(document.getElementById('chart5_div'));
        chart.draw(data, options2);

        //Visual 4
        var BarChartData3= '<?php echo $BarChartData3;?>';
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'SD');
        data.addRows(JSON.parse(BarChartData3));
        var options3 = {'title':'<?php echo $BarChartTitle3; ?>',
                       'width':300 ,
                       'height':300 , bar: { groupWidth: '30%' },
        isStacked: true,is3D: true};
        var chart = new google.visualization.PieChart(document.getElementById('chart3_div'));
        chart.draw(data, options3);
        
        //Visual 3
        var BarChartData4= '<?php echo $BarChartData4;?>';
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'SD');
        data.addColumn('number', 'SLTP');
        data.addColumn('number', 'SMK');
        data.addColumn('number', 'SMU');
        data.addRows(JSON.parse(BarChartData4));
        var options4 = {'title':'<?php echo $BarChartTitle4; ?>',
                       'width':450,
                       'height':300 };
        var chart = new google.visualization.LineChart(document.getElementById('chart4_div'));
        chart.draw(data, options4);
              }
    </script>
  </head>
  <style type="text/css">  
      body {
        background-color: #FFD700;
      }
  </style>

  <body>    

    <table border="0">
      <tr><td colspan="3"><h2 style="color: black:; " > <center>VISUALISASI INFORMASI DATA INSTANSI PENDIDIKAN BANDUNG</center> </h2></td></tr>
      <tr>
          <td rowspan="3"><div id="chart5_div" ></div></td>
          <td><div id="chart_div"></div></td>
          <td><div id="chart1_div"></div></td>
          
      </tr>
      <tr>
          <td><div id="chart3_div"></div></td>
          <td><div id="chart4_div"></div></td>
      </tr>
    </table>

  </body>
</html>