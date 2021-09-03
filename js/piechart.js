google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['UGD',     11],
          ['Internist', 2],
          ['Pediatrist',  2],
          ['Jantung', 2],
          ['Anak', 7]
        ]);

        var options = {
          title: 'Statistik Poli',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
    }
