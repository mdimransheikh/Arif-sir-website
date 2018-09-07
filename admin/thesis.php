<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>

	<div class="span9">
		<div class="content">
			<div class="module">
				<div class="module-head">
					<h3>Add new thesis</h3>
				</div>
		<div class="module-body">

    <?php 
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $name = mysqli_real_escape_string($db->link, $_POST['name']);
            $student = mysqli_real_escape_string($db->link, $_POST['student']);
            $year = mysqli_real_escape_string($db->link, $_POST['year']);
            $details = mysqli_real_escape_string($db->link, $_POST['details']);
            $type = mysqli_real_escape_string($db->link, $_POST['type']);


            if($name == '' || $student == '' || $year == '' || $details == '' || $type == ''){
                echo "<span class='error'>Field must not be empty. !!</span>";
            }else{
            $query = "INSERT INTO tbl_thesis(name,student,year,details,type) VALUES('$name','$student','$year','$details','$type')";
            $inserted_rows = $db->insert($query);
            if ($inserted_rows) {
             echo "<span style='font-size:18px;color:green'>New thesis is inserted successfully.
             </span>";
            }else {
             echo "<span style='font-size:18px;color:red'>Something went wrong !!</span>";
            }
        }
    }
    ?>

	<form class="form-horizontal row-fluid" action="" method="post" enctype="multipart/form-data">
		<div class="control-group">
			<label class="control-label" for="basicinput">Title : </label>
			<div class="controls">
				<input type="text" name="name" class="span8">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="basicinput">Student: </label>
			<div class="controls">
				<input type="text" name="student" class="span8">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="basicinput">Year of submission: </label>
			<div class="controls">
				<input type="text" name="year" class="span8" placeholder="for exp. 2017">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="basicinput">Thesis details: </label>
			<div class="controls">
				<textarea class="span8" rows="5" name="details"></textarea>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="basicinput">Type: </label>
			<div class="controls">
				<select tabindex="1" data-placeholder="Select One.." name="type" class="span8">
					<option value="">Select here..</option>
					<option value="1">Highlighted</option>
					<option value="0">None</option>
				</select>
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