
 <a id="click-to-top" href="#" class="btn btn-light btn-lg click-to-top" role="button"><i class="fa fa-chevron-up"></i></a>
  <script src="js/jquery.min.js"></script>
  <script src="js/owl.carousel.js"></script>
 <script src="js/bootstrap.bundle.js"></script>
  <script src="js/wow.min.js"></script>
 <script src="js/jquery.dataTables.min.js"></script>
 <script src="js/dataTables.bootstrap4.min.js"></script>
<script src="js/dataTables.responsive.min.js"></script>
<script src="js/custom.js"></script>
 <script src="js/perfect-scrollbar.jquery.min.js"></script>
<script src="js/dashboard-function.js" type="text/javascript"></script> 
<script src="js/raphael-min.js" type="text/javascript"></script> 
<script src="js/morris.min.js" type="text/javascript"></script> 

<script type="text/javascript">
  $(document).ready(function() {
  barChart();
  lineChart();
  areaChart();
  donutChart();

  $(window).resize(function() {
    window.barChart.redraw();
    window.lineChart.redraw();
    window.areaChart.redraw();
    window.donutChart.redraw();
  });
});

function barChart() {
  window.barChart = Morris.Bar({
    element: 'bar-chart',
    data: [
      { y: '2006', a: 100, b: 90 },
      { y: '2007', a: 75,  b: 65 },
      { y: '2008', a: 50,  b: 40 },
      { y: '2009', a: 75,  b: 65 },
      { y: '2010', a: 50,  b: 40 },
      { y: '2011', a: 75,  b: 65 },
      { y: '2012', a: 100, b: 90 }
    ],
    xkey: 'y',
    ykeys: ['a', 'b'],
    labels: ['Series A', 'Series B'],
    lineColors: ['#1e88e5','#ff3321'],
    lineWidth: '3px',
    resize: true,
    redraw: true
  });
}

function lineChart() {
  window.lineChart = Morris.Line({
    element: 'line-chart',
    data: [
      { y: '2006', a: 100, b: 90 },
      { y: '2007', a: 75,  b: 65 },
      { y: '2008', a: 50,  b: 40 },
      { y: '2009', a: 75,  b: 65 },
      { y: '2010', a: 50,  b: 40 },
      { y: '2011', a: 75,  b: 65 },
      { y: '2012', a: 100, b: 90 }
    ],
    xkey: 'y',
    ykeys: ['a', 'b'],
    labels: ['Series A', 'Series B'],
    lineColors: ['#1e88e5','#ff3321'],
    lineWidth: '3px',
    resize: true,
    redraw: true
  });
}

function areaChart() {
  window.areaChart = Morris.Area({
    element: 'area-chart',
    data: [
      { y: '2006', a: 100, b: 90 },
      { y: '2007', a: 75,  b: 65 },
      { y: '2008', a: 50,  b: 40 },
      { y: '2009', a: 75,  b: 65 },
      { y: '2010', a: 50,  b: 40 },
      { y: '2011', a: 75,  b: 65 },
      { y: '2012', a: 100, b: 90 }
    ],
    xkey: 'y',
    ykeys: ['a', 'b'],
    labels: ['Series A', 'Series B'],
    lineColors: ['#1e88e5','#ff3321'],
    lineWidth: '3px',
    resize: true,
    redraw: true
  });
}

function donutChart() {
  window.donutChart = Morris.Donut({
  element: 'donut-chart',
  data: [
    {label: "Download Sales", value: 50},
    {label: "In-Store Sales", value: 25},
    {label: "Mail-Order Sales", value: 5},
    {label: "Uploaded Sales", value: 10},
    {label: "Video Sales", value: 10}
  ],
  resize: true,
  redraw: true
});
}

function pieChart() {
  var paper = Raphael("pie-chart");
paper.piechart(
  100, // pie center x coordinate
  100, // pie center y coordinate
  90,  // pie radius
   [18.373, 18.686, 2.867, 23.991, 9.592, 0.213], // values
   {
   legend: ["Windows/Windows Live", "Server/Tools", "Online Services", "Business", "Entertainment/Devices", "Unallocated/Other"]
   }
 );
}
</script>

</body>
</html>