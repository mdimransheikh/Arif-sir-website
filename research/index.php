<?php include '../lib/Database.php'; ?>
<?php include '../lib/Session.php'; ?>
<?php include '../helpers/Format.php'; ?>

<?php 
	$db = new Database();
	$fm = new format();
?>


<!DOCTYPE HTML>
<html>
<head>
<title>Research page</title>
<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
<meta name="keywords" content="FeedLive iphone web template, Andriod web template, Smartphone web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<link href='http://fonts.googleapis.com/css?family=Merriweather+Sans' rel='stylesheet' type='text/css'>
</head>
<body>
<!---start-wrap---->
<div class="wrap">
	<div class="left-sidebar">
			<div class="logo">
				<h1>Research pages and files</h1>
			</div>
			<div class="top-nav">
				<ul>
					<li><a href="../index.php">Home</a></li>
					<li><a href="../project/project.php">Thesis</a></li>
					<li><a href="../project/project.php">Projects</a></li>
				</ul>
			</div>
	</div>
<div class="content">
	<div class="grids">
		<?php 
			$query = "select * from tbl_research";
			$data = $db->select($query);
			if($data){
				while($result = $data->fetch_assoc()){
		?>
		<div class="grid box">
			<div class="grid-header">
				<h3><?php echo $result['name']; ?></h3>
				<ul>
				<li><span>Published By <?php echo "Engr. Md. Arif Rahman"; ?> on <?php echo $result['dat']; ?></span></li>
				</ul>
			</div>
			<div class="grid-img-content">
				<a href="singlepage.php?id=<?php echo $result['id']; ?>"><img src="../admin/<?php echo $result['image']; ?>" height="150px" weidth="200px"/></a>
				<p><?php echo $fm->textShorten($result['details'], 400); ?><a href="singlepage.php?id=<?php echo $result['id']; ?>">...</a></p>
				<div class="clear"> </div>
			</div>
			<div class="comments">
			<ul>
				<li><a class="readmore" href="singlepage.php?id=<?php echo $result['id']; ?>">ReadMore</a></li>
			</ul>
			</div>
		</div>
			<div class="clear"> </div>
		<?php } } ?>
	</div>
			<div class="clear"> </div>
		<div class="content-pagenation">
						<li><a href="#">Frist</a></li>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><span>....</span></a></li>
						<li><a href="#">Last</a></li>
						<div class="clear"> </div>
					</div>
					<div class="clear"> </div>
					<div class="footer">
						<p>&copy; Engr. Md. Arif Rahman. All right reserved</p>
					</div>
					<div class="clear"> </div>
					
			</div>
		</div>
		<!---end-wrap---->
		<div class="right-sidebar">
				<div class="search-bar">
					<form>
			    		<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" />
			    		<input type="submit" value="" />
			    	</form>
				</div>
				<div class="clear"> </div>
				<div class="featured-Videos">
				<div class="popular-post">
				<h3>Recent-research</h3>
				<?php 
					$query = "select * from tbl_research";
					$data = $db->select($query);
					if($data){
						while($result = $data->fetch_assoc()){
				?>
					<div class="post-grid">
						<a href="singlepage.php?id=<?php echo $result['id']; ?>"><img src="images/videos.jpg" title="post1"></a>
						<p><?php echo $result['name']; ?><a href="singlepage.php?id=<?php echo $result['id']; ?>">...</a></p>
						<div class="clear"> </div>
					</div>
				<?php } } ?>
				</div>
				<div class="clear"> </div>
			</div>
	</body>
</html>

