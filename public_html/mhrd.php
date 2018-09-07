<?php
$conn = new mysqli("localhost","root","devg1102","piwik");

    if($conn->connect_error) {
      die("Connection failed:" . $conn->connect_error);
    }
    $count1 = $count2 =$count3 = $count4 = 0;
    $result2 = mysqli_query($conn,"select count(*) from matomo_log_visit where referer_type = 1");
    while($row = mysqli_fetch_assoc($result2))
    {
        $count1 = $row["count(*)"];
    }


    $result3 = mysqli_query($conn,"select count(*) from matomo_log_visit where referer_type = 2");
    while($row = mysqli_fetch_assoc($result3))
    {
        $ttime = $row["count(*)"];
    }
    $result4 = mysqli_query($conn,"select count(*) from matomo_log_visit where referer_type = 3");
    while($row = mysqli_fetch_assoc($result4))
    {
        $ucount = $row["count(*)"];
    }

    $result5 = mysqli_query($conn,"select count(*) from matomo_log_visit where referer_type = 6");
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
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Analytics Page - MHRD</title>


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
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data  = google.visualization.arrayToDataTable([
          ['Task', 'count'],
          ['Direct Entry',     11],
          ['Search Engines',      2],
          ['Other Websites',  2],
          ['Campaigns', 2],
          //['Sleep',    7]
          <?php
          // echo "['Direct Entry',".$data['hits']."],";
          // echo "['Search Engines',".$data['usages']."],";
          // echo "['Other Websites',".$data['unique visitors']."],";

          ?>
        ]);

        var options = {
          title: 'Analysis of Visitors referers',
       //   is3D: true,   
          pieHole: 0.4,
           slices: {  2: {offset: 0.1},
                    3: {offset: 0.1},
                    14: {offset: 0.1},
                    15: {offset: 0.1},
          },

        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {
        'packages':['geochart'],
        // Note: you will need to get a mapsApiKey for your project.
        // See: https://developers.google.com/chart/interactive/docs/basic_load_libs#load-settings
        'mapsApiKey': 'AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY'
      });
      google.charts.setOnLoadCallback(drawRegionsMap);

      function drawRegionsMap() {
        var data = google.visualization.arrayToDataTable([
          ['Country', 'Usages'],
          ['Germany', 200],
          ['United States', 300],
          ['Brazil', 400],
          ['Canada', 500],
          ['India', 60000],
          ['ru', 7000],
          ['China',200]
        ]);

        var options = {
          chart: {
            title: 'locations Of the users',
          }
        };

        var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

        chart.draw(data, options);
      }
    </script>
    </head>
<body>
  <div id="donutchart" style="width: 100%; height: 40vw;"></div>

  <h2>Location of the users</h2>
      <div id="regions_div" style="width: 100%; height: 40vw;"></div>
</body>
</html>
