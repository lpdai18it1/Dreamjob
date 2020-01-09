<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin</title>
	<link href="lumino/css/bootstrap.min.css" rel="stylesheet">
	<link href="lumino/css/font-awesome.min.css" rel="stylesheet">
	<link href="lumino/css/datepicker3.css" rel="stylesheet">
	<link href="lumino/css/styles.css" rel="stylesheet">
	<script src="//cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<style type="text/css">
		.form-control{
			width: 50%;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#"><span>Dream</span>Job</a>
				<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-envelope"></em><span class="label label-danger">33</span>
					</a>
						<ul class="dropdown-menu dropdown-messages">
							<li>
								<div class="dropdown-messages-box"><a href="#" class="pull-left">
									<img alt="image" class="img-circle" id="image" src="./image/author.jpg">
									</a>
									<div class="message-body"><small class="pull-right">50 phút trước</small>
										<a href="#"><strong>Nguyên</strong> đã đổi <strong>Gấu bông</strong>.</a>
									<br /><small class="text-muted">12:24 - 25/12/2019</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="dropdown-messages-box"><a href="#" class="pull-left">
									<img alt="image" class="img-circle" id="image" src="./image/author.jpg">
									</a>
									<div class="message-body"><small class="pull-right">50 phút trước</small>
										<a href="#">Sự cố mới từ <strong>Nguyên</strong>.</a>
									<br /><small class="text-muted">12:27 - 25/12/2019</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="all-button"><a href="#">
									<em class="fa fa-inbox"></em> <strong>Hiện tất cả thông báo</strong>
								</a></div>
							</li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-bell"></em><span class="label label-info">13</span>
					</a>
						<ul class="dropdown-menu dropdown-alerts">
							<li><a href="#">
								<div><em class="fa fa-envelope"></em> 1 phản hồi mới
									<span class="pull-right text-muted small">3 phút trước</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-user"></em> 12 lượt đăng ký
									<span class="pull-right text-muted small">4 phút trước</span></div>
							</a></li>	
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	
		@yield('content')		

	  

	<script src="lumino/js/jquery-1.11.1.min.js"></script>
	<script src="lumino/js/bootstrap.min.js"></script>
	<script src="lumino/js/chart.min.js"></script>
	<script src="lumino/js/chart-data.js"></script>
	<script src="lumino/js/easypiechart.js"></script>
	<script src="lumino/js/easypiechart-data.js"></script>
	<script src="lumino/js/bootstrap-datepicker.js"></script>
	<script src="lumino/js/custom.js"></script>
	<script>
	window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
	var chart2 = document.getElementById("bar-chart").getContext("2d");
	window.myBar = new Chart(chart2).Bar(barChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
	var chart3 = document.getElementById("doughnut-chart").getContext("2d");
	window.myDoughnut = new Chart(chart3).Doughnut(doughnutData, {
	responsive: true,
	segmentShowStroke: false
	});
	var chart4 = document.getElementById("pie-chart").getContext("2d");
	window.myPie = new Chart(chart4).Pie(pieData, {
	responsive: true,
	segmentShowStroke: false
	});
	var chart5 = document.getElementById("radar-chart").getContext("2d");
	window.myRadarChart = new Chart(chart5).Radar(radarData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.05)",
	angleLineColor: "rgba(0,0,0,.2)"
	});
	var chart6 = document.getElementById("polar-area-chart").getContext("2d");
	window.myPolarAreaChart = new Chart(chart6).PolarArea(polarData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	segmentShowStroke: false
	});
};
	</script>	
</body>
</html>
