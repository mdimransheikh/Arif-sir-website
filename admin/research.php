<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>
	<div class="span9">
		<div class="content">

		<div class="module">
			<div class="module-head">
				<h3>Add new research</h3>
			</div>

	<?php 
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $name = mysqli_real_escape_string($db->link, $_POST['name']);
            $details = mysqli_real_escape_string($db->link, $_POST['details']);
            $dat = mysqli_real_escape_string($db->link, $_POST['dat']);

            $permited  = array('jpg', 'jpeg', 'png', 'gif');
            $file_name = $_FILES['image']['name'];
            $file_size = $_FILES['image']['size'];
            $file_temp = $_FILES['image']['tmp_name'];

            $div = explode('.', $file_name);
            $file_ext = strtolower(end($div));
            $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
            $uploaded_image = "upload/".$unique_image;

            if($name == '' || $details == '' || $dat == ''){
                echo "<span class='error'>Field must not be empty. !!</span>";
            }elseif (in_array($file_ext, $permited) === false) {
             echo "<span class='error'>You can upload only:-"
             .implode(', ', $permited)."</span>";
            }else{
            move_uploaded_file($file_temp, $uploaded_image);
            $query = "INSERT INTO tbl_research(name,image,dat,details) VALUES('$name','$uploaded_image','$dat','$details')";
            $inserted_rows = $db->insert($query);
            if ($inserted_rows) {
             echo "<span style='font-size:18px;color:green'>Research is inserted successfully.
             </span>";
            }else {
             echo "<span style='font-size:18px;color:red'>Something went wrong !!</span>";
            }
        }
    }
    ?>
	<div class="module-body">
		<form class="form-horizontal row-fluid" action="" method="post" enctype="multipart/form-data">
			<div class="control-group">
				<label class="control-label" for="basicinput">Name: </label>
				<div class="controls">
					<input type="text" name="name" class="span8">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="basicinput">Image: </label>
				<div class="controls">
					<input type="file" name="image" />
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="basicinput">Research Details: </label>
				<div class="controls">
					<textarea class="span8" rows="5" name="details"></textarea>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="basicinput">Date: </label>
				<div class="controls">
					<input type="date" name="dat" class="span4">
				</div>
			</div>

			<div class="control-group">
				<div class="controls">
					<button type="submit" class="btn">Upload!</button>
				</div>
			</div>
		</form>
	</div>
	</div>

		</div><!--/.content-->
	</div><!--/.span9-->
<?php include 'inc/footer.php'; ?>