<?php
$conn = new mysqli("localhost","root","devg1102","piwik");

    if($conn->connect_error) {
      die("Connection failed:" . $conn->connect_error);
    }
      $titles = array();
      $idactions = array();
    $result0 = mysqli_query($conn,"select name,idaction from matomo_log_action where type = 4");
    while($row = mysqli_fetch_assoc($result0))
    {
        array_push($titles,$row["name"]);
        array_push($idactions,$row["idaction"]);
    }
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Devansh Gupta - Admin</title>


<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//10.2.56.91/piwik/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', '1']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<style>
a{
    display: inline-block;

}
a:link{
  color:white;
  text-decoration: none;
}
a:visited {
  color:white;
}

  #login {
    border-radius: 10vw;
    display: block;
    background-color: black;
    color:white;
    text-align: center;
    position: absolute;
    top: 3vw;
    z-index: 2;
    width: 10vw;
    right: 3vw;
    padding-right: 1vw;
    padding-left: 1vw;
    padding-top: 0.3vw;
    padding-bottom: 0.3vw; 
  }
  table,th,td {
    border-collapse: collapse;
    border: 1px white;
    border-radius: 3vw;
    border-color: white;
  }
  th,td{
    padding: 3vw;
    text-align: left;
  }
  ul {
    list-style-type: circle;
    margin-left: 10 vw;
  }
  li{
    border: 1px;
    color: white;
    padding: 1vw;
    border-radius: 5px;
    background-color: black;
  }
 #tooltip {
    position: absolute;
    font-size: 1vw;
    top: 4vw;
    z-index: 3;
    right: 2vw;
  }
</style>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Page', 'percentage'],
          <?php
          $resultc = mysqli_query($conn,"select  count(*) from matomo_log_link_visit_action a , (select idvisit,MAX(distinct server_time) as server_time from matomo_log_link_visit_action group by idvisit) b where a.server_time = b.server_time");
          while($row = mysqli_fetch_assoc($resultc))
          {
            $totalv = $row["count(*)"];
          }
          for($i = 0 ; $i < count($idactions); $i ++)
           {
              $resc = mysqli_query($conn,"select  count(*) from matomo_log_link_visit_action a , (select idvisit,MAX(distinct server_time) as server_time from matomo_log_link_visit_action group by idvisit) b where a.server_time = b.server_time and a.idaction_name = $idactions[$i]");
          //   // echo "['hits',".$data['hits']."],";
            // echo "['Usages',".$data['usages']."],";
            // echo "['Unique visitors',".$data['unique visitors']."],";
             while($row = mysqli_fetch_assoc($resc))
             {
               echo"['".$titles[$i]."',".$row["count(*)"]."],";
             }
          } 
          ?>
         
        ]);

        var options = {
          title: 'Bounce Rate',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>

</head>
<body>
    <div id="donutchart" style="width: 900px; height: 500px;"></div>

<?php     
    echo"<ul>";
    for($i = 0;$i<count($titles);$i++){

        $title = $titles[$i];
        $result = mysqli_query($conn,"select * from matomo_log_action where name = '$title'");

        while($row = mysqli_fetch_assoc($result)) {
            $id = $row["idaction"];
        }
        $result2 = mysqli_query($conn,"select count(*) from matomo_log_link_visit_action where idaction_name = $id");
        while($row = mysqli_fetch_assoc($result2))
        {
            $count1 = $row["count(*)"];
        }


        $result3 = mysqli_query($conn,"select sum(time_spent_ref_action) from matomo_log_link_visit_action where idaction_name_ref = $id");
        while($row = mysqli_fetch_assoc($result3))
        {
            $ttime = $row["sum(time_spent_ref_action)"];
        }
        $result4 = mysqli_query($conn,"select count(DISTINCT idvisitor) from matomo_log_link_visit_action where idaction_name = $id");
        while($row = mysqli_fetch_assoc($result4))
        {
            $ucount = $row["count(DISTINCT idvisitor)"];
        }

        $result5 = mysqli_query($conn,"select count(*) from matomo_log_link_visit_action where idaction_name_ref = $id and time_spent_ref_action > 10");
        while($row = mysqli_fetch_assoc($result5))
        {
            $usages = $row["count(*)"];
        }

        $data[$i] = array(
                    'title' => $title,
                    'hits' => $count1,
                    'unique visitors' => $ucount,
                    'usages' => $usages
            );
        echo"<li>Experiment ".($i + 1)."</li>";
        echo"<div class = 'data'>";
        echo"<table>";
        echo"<tr> <th>Total Visits(hits)</th>";
        echo"<th>".$count1."</th></tr>";
        echo"<tr><th>Unique Visitors</th>";
        echo"<th>".$ucount."</th></tr>";
        echo"<tr><th>Usages(when visitor spends more than 10 seconds on the page)</th>";
        echo"<th>".$usages."</th></tr>";
        echo"<tr><th>Total time spent(in seconds)</th>";
        echo"<th>".$ttime."</th></tr>";
        echo"</table>";
        echo"</div>";
    } 

    echo "</ul>";
    mysqli.close($conn);
?>
</body>
</html>
