<link rel="stylesheet" href="styles/charts.css">

<?php
// controllers/ajax/getData.php
require 'database/db.php';
  $id = $_POST['id'];

  $qry1 = "SELECT * FROM nat WHERE ID = $id";
  $result = $conn->query($qry1);

  $qry2 = "SELECT * FROM ap_rank WHERE ID = $id";
  $result2 = $conn->query($qry2);


  $qry3 = "SELECT * FROM ap_score WHERE ID = $id";
  $result3 = $conn->query($qry3);


    while($row = $result->fetch()){
      $surname = $row['SURNAME'];
      $firstname = $row['FIRSTNAME'];
      $MI = $row['MI'];
      $gender = $row['GENDER'];
      $bday = $row['BDAY'];
      $lrn = $row['LRN_NO'];
      $examNo = $row['EXAMINEE_NO'];
      $schoolId = $row['SCHOOL_ID'];
      $HS = $row['HS'];
      $examDate = $row['EXAM_DATE'];
    }
    while($row = $result2->fetch()){
      $SA = $row["SA"];
      $RC = $row["RC"];
      $VA = $row["VA"];
      $MA = $row["MA"];
      $LRA = $row["LRA"];
      $GSA = $row["GSA"];
      $CA = $row["CA"];
      $NVA = $row["NVA"];
      $VMS = $row["VMS"];
      $TVA = $row["TVA"];
      $HUMMS = $row["HUMMS"];
      $STEM = $row["STEM"];
      $ABM = $row["ABM"];
      $AT = $row["AcadT"];
    }
    while($row = $result3->fetch()){
      $A = $row["SCORE_A"];
      $B = $row["SCORE_B"];
      $C = $row["SCORE_C"];
      $D = $row["SCORE_D"];
      $E = $row["SCORE_E"];
      $F = $row["SCORE_F"];
      $G = $row["SCORE_G"];
      $H = $row["SCORE_H"];
      $I = $row["SCORE_I"];
      $J = $row["SCORE_J"];
      $K = $row["SCORE_K"];
      $L = $row["SCORE_L"];
      $M = $row["SCORE_M"];
      $N = $row["SCORE_N"];
      $O = $row["SCORE_O"];
    }
?>
<div class="container-chart">

  <div class="gen-info">
    <div class="cells-container">
      <div class="cells-1">
          <div class="cells">
            <p>EXAMINEE #</p> 
            <h3><?php echo $examNo;?></h3>
          </div>
          <div class="cells" id=name>
          <div>
            <p>SURNAME</p>
            <h3><?php echo $surname;?></h3>
          </div>
          <div>
            <p>FIRSTNAME</p>
            <h3><?php echo $firstname;?></h3>
          </div>
          <div>
            <p>M.I.</p>
            <h3><?php echo $MI;?></h3>
          </div>
        </div>
        <div class="cells">
          <p>GENDER</p>
          <h3><?php echo $gender;?></h3>
        </div>

        <div class="cells">
          <p>DATE OF BIRTH</p>
          <h3><?php echo $bday;?></h3>
        </div>
      </div>

      <div class="cells-2">
        
        <div class="cells">
          <p>LRN #</p>
          <h3><?php echo $lrn;?></h3>
        </div>
        <div class="cells" >
          <p>SCHOOL ID</p>
          <h3><?php echo $schoolId;?></h3>
        </div>
        <div class="cells" id="school">
          <p>HIGH SCHOOL</p>
          <h3><?php echo $HS;?></h3>
        </div>
        <div class="cells">
          <p>EXAMINATION DATE</p>
          <h3><?php echo $examDate;?></h3>
        </div>
      </div>
    
    </div>
    
  </div>

  <div class="charts">
    <div class="chart-card">
      <p class="chart-title" >Average Percentile Rank</p>
      <div id="bar-chart"></div>
    </div> 

    <div class="chart-card">
      <p class="chart-title" >Average Percentile Score</p>
      <div id="bar-chart2"></div>
    </div> 
  </div>

  <div class="suggested">
  <?php 

  
  $n = array($A,$B,$C,$D,$E,$F,$G,$H,$I,$J,$K,$L,$M,$N,$O);
  rsort($n);
  $top3 = array_slice($n, 0, 3);
  
  ?>
  <div>

</div>

<script>

  var barChartOptions = {
      series: [{
      data: ['<?php echo $SA?>','<?php echo $RC?>','<?php echo $VA?>','<?php echo $MA?>','<?php echo $LRA?>','<?php echo $GSA?>','<?php echo $CA?>','<?php echo $NVA?>','<?php echo $VMS?>','<?php echo $TVA?>','<?php echo $HUMMS?>','<?php echo $STEM?>','<?php echo $ABM?>','<?php echo $AT?>']
    }],
      chart: {
      type: 'bar',
      width: 450,
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
    dataLabels: {
      enabled: false
    },
    legends:{
        show: false
    },
    
    xaxis: {
      categories: ['SA', 'RC', 'VA', 'MA', 'LRA', 'GSA', 'CA', 'NVA', 'VMS', 'TVA', 'HUMMS', 'STEM', 'ABM', 'AT'],
    },
  
  };

  var barChartOptions2 = {
      series: [{
      data: ['<?php echo $A?>','<?php echo $B?>','<?php echo $C?>','<?php echo $D?>','<?php echo $E?>','<?php echo $F?>','<?php echo $G?>','<?php echo $H?>','<?php echo $I?>','<?php echo $J?>','<?php echo $K?>','<?php echo $L?>','<?php echo $M?>','<?php echo $N?>','<?php echo $O?>',]
    }],
      chart: {
      type: 'bar',
      width: 450,
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
    dataLabels: {
      enabled: false
    },
    legends:{
        show: false
    },
    xaxis: {
      categories: ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O'],
    },
  
  };

    

  var barChart = new ApexCharts(document.querySelector("#bar-chart"), barChartOptions);
  barChart.render();
  var barChart2 = new ApexCharts(document.querySelector("#bar-chart2"), barChartOptions2);
  barChart2.render();
</script>