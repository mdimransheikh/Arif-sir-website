<?php include '../lib/Database.php'; ?>
<?php include '../helpers/Format.php'; ?>

<?php 
    $db = new Database();
    $fm = new format();
?>

<?php 
    if(!isset($_GET['year']) || $_GET['year']==NULL){
        header("Location:../index.php");
    }else{
        $year = $_GET['year'];
    }
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Thesis</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
 <!-- Custom Theme files -->
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <meta name="keywords" content="Preface Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<!-- webfonts -->
	<link href='//fonts.googleapis.com/css?family=Asap:400,700,400italic' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
<!-- webfonts -->
 <!---- start-smoth-scrolling---->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
 <!---- start-smoth-scrolling---->
</head>
	<body>
		<div class="service-head text-center">
			<h3>MY all <span>THESIS</span> on <?php echo $year; ?> </h3>
			<span class="border one"></span>
		</div>
		<?php 
            $query = "SELECT * FROM tbl_thesis where year='$year'";
            $result = $db->select($query);
            if($result){
                while ($data = $result->fetch_assoc()){
    	?>

    	<div>
			    <div class="col-md-6 news-text">
					<p>Title : <?php echo $data['name']; ?></p>
					<a href="#" data-toggle="modal" data-target="#<?php echo $data['id']; ?>" class="read hvr-shutter-in-horizontal">Abstruct view</a>
				</div>

			<div class="modal ab fade" id="<?php echo $data['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog about" role="document">
					<div class="modal-content about">
						<div class="modal-header">
							<button type="button" class="close ab" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body about">
							<div class="about">
								  <div class="about-inner">
									     <h4 class="tittle"><?php echo $data['name']; ?></h4>
									     <h5 class="student">Students : <?php echo $data['student']; ?></h5>
									   <p><?php echo $data['details']; ?></p>
								  </div>			
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php } } ?>

<a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!--start-smooth-scrolling-->
						<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
								<!--end-smooth-scrolling-->
<!-- //for bootstrap working -->
	<script src="js/bootstrap.js"></script>
	

	</body>
</html>

