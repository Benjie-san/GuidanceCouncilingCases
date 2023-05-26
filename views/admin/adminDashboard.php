<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="styles/global.css">
  <link rel="stylesheet" href="styles/dashboard-style.css">
  <link rel="stylesheet" href="styles/admin-style.css">
  <link rel="stylesheet" href="styles/charts.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.40.0/apexcharts.min.js" ></script>
</head>
  <body>
    <div class="container">
      <?php include_once 'components/nav.php' ?>
      <div class="main">
        <?php include_once 'components/topBar.php'?>
        <div class="header">
          <h2 class="title"><?php echo $heading?></h2>
          <span></span>
        </div>
        <div class="div content">
          <div class="row1">

            <div class="card">
              <h4>Total Cases</h4>
              <h3>204</h3>
            </div>

            <div class="card">
              <h4>Total Students</h4>
              <h3>1994</h3>
            </div>

            <div class="card">
              <h4>Total Teachers</h4>
              <h3>81</h3>
            </div>
          </div>
          <div class="row2">
          
            <div class="charts">
              <div class="chart-card">
                <h4 class="chart-title" >Daily Cases Graph</h4>
                <div id="bar-chart"></div>
              </div> 
        
              <div class="chart-card">
                <h4 class="chart-title" >Users Pie Chart</h4>
                <div id="pie-chart"></div>
              </div> 

            </div>
            
          </div>
        </div>

      </div>
    </div>

    <script type="text/javascript" src="scripts/nav-script.js">

    </script>
    <script>
    var barChartOptions = {
        series: [{
        data: [5, 2, 10, 4, 9, 2]
        }],
        chart: {
        type: 'bar',
        width: 400,
        height: 200,
        toolbar:{
          show: false
        },
        },
      colors:[
        '#28fd0c',
      ],
      plotOptions: {
        bar: {
          borderRadius: 4,
          horizontal: false,
          columnWidth: '20%',
        }
      },
      colors:[
        '#28fd0c',
      ],
      dataLabels: {
        enabled: false
      },
      legends:{
          show: false
      },
      
      xaxis: {
        categories: ['M', 'T', 'W', 'TH', 'F', 'S'],
      },
    
    };

    var options = {
      series: [44, 55, 13, 43],
      chart: {
      width: 400,
      type: 'donut',
    },
    colors:[
        '#28fd0c',
        '#33cc33',
        '#009900',
        '#66ff66'
      ],
    labels: ['Students', 'Subj. Teacher', 'Adviser Teacher', 'Guidance Council'],
    responsive: [{
      breakpoint: 480,
      options: {
        chart: {
          width: 200
        },
        legend: {
          position: 'bottom'
        }
      }
    }],
    plotOptions: {
      pie: {
        donut: {
          labels: {
            show: true,
            total: {
              show: true,
              showAlways: true,
              fontSize: '20px',
              color:"#29d612",
            },
          }
        }
      }
    }
    };

    var barChart = new ApexCharts(document.querySelector("#bar-chart"), barChartOptions);
    barChart.render();
    

        var chart = new ApexCharts(document.querySelector("#pie-chart"), options);
        chart.render();
    </script>
    
  </body>
</html>