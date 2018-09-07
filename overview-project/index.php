<?php include '../lib/Database.php'; ?>
<?php include '../lib/Session.php'; ?>
<?php include '../helpers/Format.php'; ?>

<?php 
	$db = new Database();
	$fm = new format();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Overview of project/thesis</title>
	<!--for-mobile-apps-->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="MRS Mall Responsive Website Template, Web Templates, Flat Web Templates, Android Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!--//for-mobile-apps-->
	
	<!-- Custom-Theme-Files -->
    <!-- Bootstrap-CSS --> 			<link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- JQuery --> 				<script src="js/jquery.min.js"></script>
    <!-- Bootstrap-Main --> 		<script src="js/bootstrap.min.js">		</script>
    <!-- Index-Page-Styling --> 	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
	<!-- Font-awesome-Styling --> 	<link rel="stylesheet" href="css/font-awesome.css" type="text/css" media="all">

	
<!-- Js for Responsive slider -->	
	<script src="js/modernizr.js" type="text/javascript"></script>
	<script src="js/responsiveslides.min.js"></script>
	<script> 
		// You can also use "$(window).load(function() {"
		$(function () {
		  // Slideshow 1
		  $("#slider1").responsiveSlides({
			 auto: true,
			 nav: true,
			 speed: 500,
			 namespace: "callbacks",
		  });
		});
	</script>

	<!--JS for animate-->
	<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
	<script src="js/wow.min.js"></script>
		<script>
			new WOW().init();
		</script>
	<!--//end-animate-->

	<script src="js/jquery.countdown.js"></script>
	<script src="js/script.js"></script>
	<link rel="stylesheet" href="css/jquery.countdown.css" />
	<link rel="stylesheet" href="css/swipebox.css">
</head>

<body>
<div class="h-grid1">
	<div class="container">
			<h2>Highlighted Contents</h2>
			<?php 
				$query = "select * from tbl_thesis where type='1'";
				$data = $db->select($query);
				if($data){
					while($result = $data->fetch_assoc()){
			?>
			<div class="col-md-4 h-grid1-a-w3ls">
				<div class="h-grid1-a1">
					<div class="h-grid1-a-icon">
						<i> </i>
					</div>
					<h4><?php echo $result['name']; ?></h4>
					<p><?php echo $fm->textShorten($result['details'], 200); ?></p>
				</div>
			</div>
			<?php } } ?>
	</div>
</div><!--//h1-grid1-->	
	
<div class="h-grid3"><!--h-grid3-->
	<div class="h-grid3-padding">
	  <h2>Search by year</h2>
			<div class="col-md-2 col-md-offset-1 h-grid3-all scroll wow zoomIn" data-wow-delay="1.5s">
				<i class="fa fa-paper-plane-o" aria-hidden="true"></i>
				<a href="../project/project.php?year=2017"><h4>2017</h4></a>
				<p>Lorem Ipsum is text. Lorem has been Ipsum the industrys standard</p>
			</div>
			<div class="col-md-2 h-grid3-all scroll wow zoomIn" data-wow-delay="1s">
				<i class="fa fa-gift" aria-hidden="true"></i>
				<a href="../project/project.php?year=2016"><h4>2016</h4></a>
				<p>Lorem Ipsum is text. Lorem has been Ipsum the industrys standard</p>
			</div>
			<div class="col-md-2 h-grid3-all scroll wow zoomIn" data-wow-delay="0.4s">
				<i class="fa fa-leaf" aria-hidden="true"></i>
				<a href="../project/project.php?year=2015"><h4>2015</h4></a>
				<p>Lorem Ipsum is text. Lorem has been Ipsum the industrys standard</p>
			</div>
			<div class="col-md-2 h-grid3-all scroll wow zoomIn" data-wow-delay="1s">
				<i class="fa fa-shopping-bag" aria-hidden="true"></i>
				<a href="../project/project.php?year=2014"><h4>2014</h4></a>
				<p>Lorem Ipsum is text. Lorem has been Ipsum the industrys standard</p>
			</div>
			<div class="col-md-2 h-grid3-all scroll wow zoomIn" data-wow-delay="1.5s">
				<i class="fa fa-trello" aria-hidden="true"></i>
				<a href="../project/project.php?year=2013"><h4>2013</h4></a>
				<p>Lorem Ipsum is text. Lorem has been Ipsum the industrys standard</p>
			</div>
		  <div class="clearfix"> </div>
		</div>
</div><!--//h-grid3-->		
	
</body>
</html>