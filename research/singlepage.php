<?php include '../lib/Database.php'; ?>
<?php include '../lib/Session.php'; ?>
<?php include '../helpers/Format.php'; ?>

<?php 
	$db = new Database();
	$fm = new format();
?>

<?php 
    if(!isset($_GET['id']) || $_GET['id']==NULL){
        echo "<script>location.href = 'index.php';</script>";
    }else{
        $id = $_GET['id'];
    }
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Research paper</title>
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
		                $querySelect = "SELECT * FROM tbl_research WHERE id='$id'";
		                $data = $db->select($querySelect);
		                if($data){
		                    while($result = $data->fetch_assoc()){
		            ?>
					<div class="grid box">
						<div class="grid-header">
						<h3><?php echo $result['name']; ?></h3>
						<ul>
							<li><span>Published By <?php echo "Enrg. Md. Arif Rahman"; ?> on <?php echo $result['dat']; ?></span></li>
						</ul>
						</div>
						<div class="singlepage">
							<a href="#"><img src="../admin/<?php echo $result['image']; ?>" /></a>
							<p><?php echo $result['details']; ?></p>
							<div class="clear"> </div>
						</div>
					</div>
					<?php } } ?>
					<div class="clear"> </div>
					</div>
					<div class="clear"> </div>

					<div class="footer">
						<p>&copy; Engr. Md. Arif Rahman. All Rights Reserved  </p>
					</div>
					<div class="clear"> </div>
					
			</div>
			<div class="right-sidebar">
				<div class="search-bar">
					<form>
			    		<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" />
			    		<input type="submit" value="" />
			    	</form>
				</div>
				<div class="clear"> </div>
				<div class="popular-post">
					<h3>popular-posts</h3>
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
					<div class="view-all">
						<a href="index.php">ViewAll</a>
					</div>
				</div>
				<div class="clear"> </div>
			</div>
		</div>
	</body>
</html>

