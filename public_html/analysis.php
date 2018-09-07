<?php
$conn = new mysqli("localhost","root","devg1102","piwik");

    if($conn->connect_error) {
      die("Connection failed:" . $conn->connect_error);
    }
    $result2 = mysqli_query($conn,"select count(*) from matomo_log_link_visit_action");
    while($row = mysqli_fetch_assoc($result2))
    {
        $count1 = $row["count(*)"];
    }


    $result3 = mysqli_query($conn,"select sum(time_spent_ref_action) from matomo_log_link_visit_action");
    while($row = mysqli_fetch_assoc($result3))
    {
        $ttime = $row["sum(time_spent_ref_action)"];
    }
    $result4 = mysqli_query($conn,"select count(DISTINCT idvisitor) from matomo_log_link_visit_action");
    while($row = mysqli_fetch_assoc($result4))
    {
        $ucount = $row["count(DISTINCT idvisitor)"];
    }

    $result5 = mysqli_query($conn,"select count(*) from matomo_log_link_visit_action where time_spent_ref_action > 10");
    while($row = mysqli_fetch_assoc($result5))
    {
        $usages = $row["count(*)"];
    }

    $data = array(
                'hits' => $count1,
                'unique visitors' => $ucount,
                'usages' => $usages
        );
?>
<?php
    $titles = array("Devansh Gupta - Home","Devansh Gupta - About Me","Devansh Gupta - gallery","Devansh Gupta - contact","Devansh Gupta - Analytics");

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
    } 
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Devansh Gupta - Analytics</title>


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
        var data  = google.visualization.arrayToDataTable([
          ['Task', 'count'],
           ['lab1',     11],
           ['lab2',      2],
           ['lab3',  2],
           ['lab 4', 2],
           ['lab 5',    7]
          <?php
         // echo "['hits',".$data['hits']."],";
          //echo "['Usages',".$data['usages']."],";
          //echo "['Unique visitors',".$data['unique visitors']."],";

          ?>
        ]);

        var options = {
          title: 'Comparison between various labs',
       //   is3D: true,   
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Page', 'hits', 'Usages', 'Unique Visitors'],
          <?php
          for($i = 0;$i <5; $i++)
          {
            $x = $i + 1;
          echo "['Experiment ".$x."',".$data[$i]['hits'].",".$data[$i]['usages'].",".$data[$i]['unique visitors']."],";
        }
          ?>
       
        ]);

        var options = {
          chart: {
            title: 'Page wise analysis of lab 1',
            subtitle: 'hits usages and unique visitors from 18-05-2018 till date',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

  </head>
<body>
<!-- <div class="rw-ui-container"></div> -->
<!--This script should be places anywhere on a page you want to see rating box-->
<!-- div style="width:265px;height:20px;overflow:hidden;">
<script type="text/javascript">
var r_obj = {
"Company": { "CompanyId": 6213 },
"RatingboxId": 14232,
"ProductCode": encodeURIComponent(window.location.href),
"SearchText": "",
"SortExpression": "",
"PageIndex": 1,
"MaxpageDisplay": 10,
"PresentationType":2,"RatingboxCss":"https://www.rating-system.com/files/6213/css/14232-20180005.css",
"User": { "UserId": "1" }
};
var r_rspage = "rsaverage";
</script>
<script type="text/javascript" src="https://www.rating-system.com/widget/rsiframe.js"></script>
</div> -->
<div id='pd_rating_holder_39_bottom'></div>
<script language='javascript'>
PDRTJS_settings_39_bottom = {
'id' : '39',
'unique_id' : '39_bottom',
'title' : '',
'permalink' : '',
'item_id' : '_bottom'
}; </script>
<script language='javascript' src='http://i.polldaddy.com/ratings/rating.js'></script>
<!--This script should be places anywhere on a page you want to see rating box-->
<!-- <div style="width:100%;height:430px;">
<script type="text/javascript">
var r_obj = {
"Company": { "CompanyId": 6213 },
"RatingboxId": 14232,
"ProductCode": encodeURIComponent(window.location.href),
"SearchText": "",
"SortExpression": "",
"PageIndex": 1,
"MaxpageDisplay": 10,
"User": { "UserId": "1" }
};
var r_rspage = "rsratingbox";
</script>
<script type="text/javascript" src="https://www.rating-system.com/widget/rsiframe.js"></script>
</div>
<div style='font-size:10px'>Powered by <a href='http://www.rating-system.com' target='_blank' title='Ratings and Reviews are powered by Rating-System.com'>Rating-System.com</a></div><! DO NOT REMOVE THE LAST LINE, please contact us first if you need to do it --> 

  <div id = "login">
  <a href="login.php">Login</a></div>
  <h6 id = "tooltip">*only for developers</h6>

  <div id="donutchart" style="width: 100%; height: 40vw;"></div>

  <div id="columnchart_material" style="width: 100%; height: 40vw;"></div>
 
</body>
</html>
