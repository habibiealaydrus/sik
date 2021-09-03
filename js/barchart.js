google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Bulan', 'BPJS', 'Asuransi', 'Tunai'],
          ['Mei', 1000, 400, 200],
          ['Juni', 1170, 460, 250],
          ['Juli', 660, 1120, 300],
          ['Agustus', 1030, 540, 350]
        ]);

        var options = {
          chart: {
            title: 'Jenis Pembayaran',
            subtitle: 'BPJS,Asuransi & Tunai',
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }