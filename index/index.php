<?php include '../lib/Database.php'; ?>
<?php include '../lib/Session.php'; ?>
<?php include '../helpers/Format.php'; ?>

<?php 
	$db = new Database();
	$fm = new format();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Engr. Md. Arif Rahman</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Coadunate Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="css/component.css" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<!--web-fonts-->
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
<!--//web-fonts-->
<!--//fonts-->
<!-- js -->
</head>
<body>
<!-- banner -->
	<div class="banner" id="home">
			<!--Slider-->
			<header>
				<div class="top-nav">
					<span class="menu"><img src="images/menu.png" alt=""/></span>
					<nav class="ayanEffects  ayanHoverEffect_3">
						<ul>
							<li><a class="" href="../overview-thesis/index.php"><span>Thesis</span></a></li>
							<li><a class="" href="../overview-project/index.php"><span>Project</span></a></li>
							<li><a class="" href="../research/index.php"><span>Research</span></a></li> 
							<li><a class="scroll" href="#"><span>Laboratory</span></a></li> 
							<li><a class="scroll" href="#"><span>Publication</span></a></li> 
							<li><a class="scroll" href="#"><span>About jessore</span></a></li>
							<li><a class="scroll" href="#about"><span>Resume</span></a></li>
							<li><a class="scroll" href="#contact"><span>Contact</span></a></li>  
						</ul>
					</nav>
				</div>
				<div class="clearfix"> </div>
			</header>	
				<div class="logo">
					<h1><a href="index.php">Engr. Md. Arif Rahman</a></h1>
				</div>
				<div class="callbacks_container">
					<ul class="rslides" id="slider3">
						<li>
							<div class="slider-info">
								  <p>Assistant Professor, Dept. of Computer Science and Engineering </p>
							</div>
						</li>
						<li>
							<div class="slider-info">
							`	<p>Jessore University of Science and Technology</p>
						    </div>
						</li>
					</ul>
				<div class="clearfix"></div>
				</div>
			<div class="clearfix"></div>
		<!--//Slider-->
		<div class="read-more-w3">
			<p class="ayanEffects ayanHoverEffect_12"><a href="#about"  data-toggle="modal" data-target="#myModal"><span>Read More</span></a></p>
		</div>
		<?php 
			$query = "select * from tbl_about where id='1'";
			$data = $db->select($query);
			if($data){
				while($result = $data->fetch_assoc()){
		?>
		<!-- Modal1 -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
			<div class="modal-dialog">
			<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<img src="../admin/<?php echo $result['image']; ?>" alt="" class="img-responsive">
						<p><?php echo $result['me']; ?></p>
					</div>
				</div>
			</div>
		</div>
		<!-- //Modal1 -->
	<?php } } ?>
	</div>
<!-- //banner -->

<!--About-section-->
<div class="about-w3layouts" id="about">
	<div class="container">	
	<h5 class="title-w3"><label></label>About me<label></label></h5>
	<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
						<ul id="myTab" class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#expeditions" id="expeditions-tab" role="tab" data-toggle="tab" aria-controls="expeditions" aria-expanded="true">Who i am ?</a></li>
							<li role="presentation"><a href="#tours" role="tab" id="tours-tab" data-toggle="tab" aria-controls="tours">What i do ?</a></li>
							<li role="presentation"><a href="#tree" role="tab" id="tree-tab" data-toggle="tab" aria-controls="tree">How i work ?</a></li>
							
						</ul>
						<div id="myTabContent" class="tab-content">
			<?php 
				$query = "select * from tbl_about where id='1'";
				$data = $db->select($query);
				if($data){
					while($result = $data->fetch_assoc()){
			?>
					<div role="tabpanel" class="tab-pane fade in active" id="expeditions" aria-labelledby="expeditions-tab">
						<p><?php echo $result['whoiam']; ?></p>
					</div>
			<?php } } ?>

			<?php 
				$query = "select * from tbl_about where id='1'";
				$data = $db->select($query);
				if($data){
					while($result = $data->fetch_assoc()){
			?>
					<div role="tabpanel" class="tab-pane fade" id="tours" aria-labelledby="tours-tab">
						<p><?php echo $result['whatido']; ?></p>
					</div>
			<?php } } ?>

			<?php 
				$query = "select * from tbl_about where id='1'";
				$data = $db->select($query);
				if($data){
					while($result = $data->fetch_assoc()){
			?>
					<div role="tabpanel" class="tab-pane fade" id="tree" aria-labelledby="tree-tab">
						<p><?php echo $result['howiwork']; ?></p>
					</div>
			<?php } } ?>
						</div>
					</div>
				</div>
			</div>
<!--About-section-->

<!--blog-section-->
<div id="blog" class="blog">
<h5 class="title-w3"><label></label>My Blogs<label></label></h5>
<center><a href="#"><p class="title-w3">View All Blogs</p></a></center>
<?php 
	$query = "select * from tbl_post limit 3";
	$data = $db->select($query);
	if($data){
		while($result = $data->fetch_assoc()){
?>
	<div class="col-md-4 blog-grids-w3-agile">
		<div class="blog-info">
			<h6><a href="#"><?php echo $result['author']; ?></a></h6><span>/ <?php echo $result['date']; ?></span>
			<h4><a href="#"  data-toggle="modal" data-target="#myModal<?php echo $result['id']; ?>"><?php echo $result['title']; ?></a></h4>
			<p><?php echo $fm->textShorten($result['body'], 350); ?></p>
			<div class="blog-btm-w3">
				<a href="#" class="blog-read" data-toggle="modal" data-target="#myModal<?php echo $result['id']; ?>">Read more</a>
			<!-- Modal1 -->
						<div class="modal fade" id="myModal<?php echo $result['id']; ?>" tabindex="-1" role="dialog">
							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<img src="../admin/<?php echo $result['image']; ?>" alt=" " class="img-responsive">
										<h5><?php echo $result['title']; ?></h5>
										<p><?php echo $result['body']; ?></p>
									</div>
								</div>
							</div>
						</div>
					<!-- //Modal1 -->
			</div>
		</div>
			<div class="blog-image-agileits-w3layouts">
				<a href="#" data-toggle="modal" data-target="#myModal<?php echo $result['id']; ?>"><img src="../admin/<?php echo $result['image']; ?>" alt="image" height="250px" width="350px"></a>
			</div>
	</div>
	<?php } } ?>

	<div class="clearfix"></div>
</div>
<!--Blog-section-->

<!--Recommandation-section-->
<section class="color ss-style-bigtriangle ">

</section>
			<svg id="bigTriangleColor" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 102" preserveAspectRatio="none">
				<path d="M0 0 L50 100 L100 0 Z" />
			</svg>
 <!--//testimonials-->
	
<!-- Contact -->
<div class="contact" id="contact">
	<div class="container">
	<?php 
		$query ="select * from tbl_profile where id='1'";
		$result = $db->select($query);
		if($result){
			while($data = $result->fetch_assoc()){
	?>
		<div class="left-w3">
			<h3>Contact Information</h3>
			<p><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo $data['iaddress']; ?></p>
			<p><i class="fa fa-phone" aria-hidden="true"></i><?php echo $data['phone']; ?></p>
			<p><i class="fa fa-envelope" aria-hidden="true"></i><a href="#"><?php echo $data['email']; ?></a></p>
		</div>
		<?php } } ?>

		<?php 
			if($_SERVER['REQUEST_METHOD']=="POST"){
            $name    = mysqli_real_escape_string($db->link, $_POST['name']);
            $email   = mysqli_real_escape_string($db->link, $_POST['email']);
            $message = mysqli_real_escape_string($db->link, $_POST['message']);

            $query = "INSERT INTO tbl_contact(name,email,message) VALUES('$name','$email','$message')";
            $result = $db->insert($query);
            if($result != false){
                echo "<span style='font-size:18px;color:green'>Your message is recieved by me, thank you for contact with me!!</span>";
            }
        }
		?>

		<form action="" method="post">
			<div class="left">
				<div class="name">
					<input type="text" name="name" class="name" placeholder="Your Name" required="">
				</div>
				<div class="email">
					<input type="email" name="email" class="email" placeholder="Your Email" required="">
				</div>
				<div class="phone">
					<textarea name="message" placeholder="Your Message" required=""></textarea>
				</div>
				<input type="submit" value="Send">
			</div>
		</form>
	</div>
</div>

<!-- Footer -->
<div class="footer">
	<div class="w3l_social_icons w3l_social_icons1 two">
		<ul>
			<li><a href="https://www.facebook.com/ironhide" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
			<li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
			<li><a href="https://plus.google.com/115691607079332594354" class="google_plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
			<li><a href="#" class="google_plus"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
			<li><a href="#" class="google_plus"><i class="fa fa-tumblr" aria-hidden="true"></i></a></li>
			<li><a href="http://just.edu.bd/just/index.php?option=com_content&view=article&id=92&userid=arif" class="google_plus"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
		</ul>
	</div>
</div>
			<div class="copyright-wthree">
				<p>&copy; Engr. Md. Arif Rahman. All right reserved</p>
			</div>
<!-- //Footer -->



<!-- //smooth scrolling -->

<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
							<script src="js/responsiveslides.min.js"></script>
							<script>
								// You can also use "$(window).load(function() {"
								$(function () {
								  // Slideshow 4
								  $("#slider3").responsiveSlides({
									auto: true,
									pager:true,
									nav:false,
									speed: 500,
									namespace: "callbacks",
									before: function () {
									  $('.events').append("<li>before event fired.</li>");
									},
									after: function () {
									  $('.events').append("<li>after event fired.</li>");
									}
								  });
							
								});
							 </script>
							  <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager:false,
			        nav:true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>

<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
				<script type="text/javascript">
									$(document).ready(function () {
										$('#horizontalTab').easyResponsiveTabs({
											type: 'default', //Types: default, vertical, accordion           
											width: 'auto', //auto or any width like 600px
											fit: true   // 100% fit in a container
										});
									});
									
				</script>





<!-- start-smoth-scrolling -->
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
	



<!-- script-for-menu -->
					<script>					
						$("span.menu").click(function(){
							$(".top-nav ul").slideToggle("slow" , function(){
							});
						});
					</script>
					<!-- script-for-menu -->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
										
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->

<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>

</body>
</html>