google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Bulan', 'Rawat Inap', 'Rawat Jalan'],
          ['Mei',  1000,      400],
          ['Juni',  1170,      460],
          ['Juli',  660,       1120],
          ['Agustus',  1030,      540]
        ]);

        var options = {
          title: 'Rawat Jalan Vs Rawat Inap',
          hAxis: {title: 'Bulan',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }