<div class="col-xl-10">

    <div id="piechart"></div>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Danh Mục', 'Số Lượng sản phẩm'],
  <?php
  $tongdm=count($listthongke);
  $i=1;
  foreach($listthongke as $thongke){
    extract($thongke);
    if($i==$tongdm) $dauphay=""; else $dauphay=",";
    echo"  ['".$thongke['tendm']."',".$thongke['countsp']." ]".$dauphay;
    $i+=1;
  }
  ?>

]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Thống Kê Sản Phẩm theo danh mục', 'width':1100, 'height':800};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>
<a href="index.php?act=listtk"><button type="button"  class="btn btn-primary" >Danh sách</button></a> 
</div>