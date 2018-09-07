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

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta Tag -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- SEO -->
    <meta name="description" content="150 words">
    <meta name="author" content="uipasta">
    <meta name="url" content="http://www.yourdomainname.com">
    <meta name="copyright" content="company name">
    <meta name="robots" content="index,follow">
    <title>Thesis and Projects</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="144x144" type="image/x-icon" href="images/favicon/apple-touch-icon.png">
    
    <!-- All CSS Plugins -->
    <link rel="stylesheet" type="text/css" href="css/plugin.css">
    
    <!-- Main CSS Stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <!-- Google Web Fonts  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700">
  </head>

 <body>
	 <!-- Preloader Start -->
     <div class="preloader">
	   <div class="rounder"></div>
      </div>
      <!-- Preloader End -->
    <div id="main">
        <div class="container">
            <div class="row">
                 <!-- Portfolio (Right Sidebar) Start -->
                 <div class="col-md-12">
                    <div class="col-md-12 page-body">
                    	<div class="row">
                            <div class="col-md-12 content-page">
                              <div class="col-md-12 blog-post">
                                <!-- Intro Start -->
                                <div class="post-title margin-bottom-30">
                                    <h1>Let's take a look on <span class="main-color">My </span><span class="main-color">Projects</span></h1>
                                   </div>
                                   <!-- Intro End -->   
                             <!-- Portfolio Start -->
                             <div>
                               <!-- Portfolio Detail Start -->
                            <?php 
                                $query = "SELECT * FROM tbl_project where year='$year'";
                                $result = $db->select($query);
                                if($result){
                                    while ($data = $result->fetch_assoc()){
                            ?>
                               <div class="row portfolio">
                                 <div class="col-sm-12 custom-pad-2">
                                   <div class="table-responsive">
                                <table class="table table-bordered">
						             <tbody>
                                     <tr>
								      <td><b>Title</b></td>
								      <td><a href="projectDetails.php?id=<?php echo $data['id']; ?>"><?php echo $data['name']; ?></a></td>
							         </tr>
                                     <tr>
								      <td><b>Student</b></td>
								      <td><?php echo $data['student']; ?></td>
							         </tr>
						          </tbody>
					            </table>
                              </div>
                            </div>
                           </div>
                        <?php } } ?>
                           <!-- Portfolio Detail End -->
                         </div>
                         <!-- Portfolio End -->
                                   
                                 
                             </div>  
                                
                               <div class="col-md-12 text-center">
                                 <a href="javascript:void(0)" id="load-more-portfolio" class="load-more-button">Load</a>
                                 <div id="portfolio-end-message"></div>
                                </div>
                                  
                             </div>
                              
                         </div>
                         </div>
                       <!-- Footer Start -->
                       <div class="col-md-12 page-body margin-top-50 footer">
                          <footer>
                          <ul class="menu-link">
                               <li><a href="../index.php">Home</a></li>
                               <li><a href="../index.php">About</a></li>
                               <li><a href="../index.php">Contact</a></li>
                            </ul>
                          <p>© Engr. Md Arif Rahman. All rights reserved</p>
                         </footer>
                       </div>
                       <!-- Footer End -->
                  </div>
                  <!-- Portfolio (Right Sidebar) End -->
            </div>
         </div>
      </div>
    <!-- Back to Top Start -->
    <a href="#" class="scroll-to-top"><i class="fa fa-long-arrow-up"></i></a>
    <!-- Back to Top End -->
    
    <!-- All Javascript Plugins  -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/plugin.js"></script>
    
    <!-- Main Javascript File  -->
    <script type="text/javascript" src="js/scripts.js"></script>

   </body>
 </html>
