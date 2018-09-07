<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>
	<div class="span9">
		<div class="content">

		<div class="module">
			<div class="module-head">
				<h3>About me</h3>
			</div>
			    <?php 
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $whoiam = mysqli_real_escape_string($db->link, $_POST['whoiam']);
            $whatido = mysqli_real_escape_string($db->link, $_POST['whatido']);
            $howiwork = mysqli_real_escape_string($db->link, $_POST['howiwork']);
            $me = mysqli_real_escape_string($db->link, $_POST['me']);

            $permited  = array('jpg', 'jpeg', 'png', 'gif');
            $file_name = $_FILES['image']['name'];
            $file_size = $_FILES['image']['size'];
            $file_temp = $_FILES['image']['tmp_name'];

            $div = explode('.', $file_name);
            $file_ext = strtolower(end($div));
            $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
            $uploaded_image = "upload/".$unique_image;

            if($whoiam == '' || $whatido == '' || $howiwork == '' || $me == ''){
                echo "<span style='font-size:18px;color:red'>Field must not be empty. !!</span>";
            }
            if(!empty($file_name)){
                 if (in_array($file_ext, $permited) === false) {
                 echo "<span style='font-size:18px;color:red'>You can upload only:-"
                 .implode(', ', $permited)."</span>";
                }else{
                    move_uploaded_file($file_temp, $uploaded_image);
                    $query = "UPDATE tbl_about
                              SET whoiam='$whoiam',
                                whatido='$whatido',
                                howiwork = '$howiwork',
								image='$uploaded_image',
								me = '$me'
                                WHERE id='1'";
                    $updated_rows = $db->update($query);
                    if ($updated_rows) {
                     echo "<span style='font-size:18px;color:green'>Your about Is Updated Successfully.
                     </span>";
                    }else {
                     echo "<span style='font-size:18px;color:red'>Your about is not Updated !!</span>";
                    }
            }
            }else{
                $query = "UPDATE tbl_about
                          SET whoiam='$whoiam',
                            whatido='$whatido',
                            howiwork = '$howiwork',
							me = '$me'
                            WHERE id='1'";
                $updated_rows = $db->update($query);
                if ($updated_rows) {
                 echo "<span style='font-size:18px;color:green'>Your about Is Updated Successfully.
                 </span>";
                }else {
                 echo "<span style='font-size:18px;color:red'>Your about is not Updated !!</span>";
                }
            }
    }
    ?>
			<div class="module-body">
			<?php 
				$query = "SELECT * FROM tbl_about WHERE id='1'";
				$data = $db->select($query);
				if($data){
					$value = mysqli_fetch_array($data);
			?>
				<form class="form-horizontal row-fluid" action="" method="post" enctype="multipart/form-data">
					<div class="control-group">
						<label class="control-label" for="basicinput">Who i am</label>
						<div class="controls">
							<textarea class="span12" rows="10" name="whoiam">
								<?php echo $value['whoiam']; ?>
							</textarea>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="basicinput">What i do</label>
						<div class="controls">
							<textarea class="span12" rows="10" name="whatido">
								<?php echo $value['whatido']; ?>
							</textarea>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="basicinput">How i work</label>
						<div class="controls">
							<textarea class="span12" rows="10" name="howiwork">
								<?php echo $value['howiwork']; ?>
							</textarea>
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="basicinput">Read More</label>
						<div class="controls">
							<textarea class="span12" rows="10" name="me">
								<?php echo $value['me']; ?>
							</textarea>
						</div>
					</div>

					<div class="control-group">
                        <label class="control-label" for="basicinput">Image: </label>
                        <div class="controls">
                            <img src="<?php echo $result['image']; ?>" width="100px" height="80px" />
                            <input type="file" name="image"/>
                        </div>
                    </div>

					<div class="control-group">
						<div class="controls">
							<button type="submit" name="submit" class="btn">Update!</button>
						</div>
					</div>
				</form>
			<?php } ?>
			</div>
		</div>

			
			
		</div><!--/.content-->
	</div><!--/.span9-->
<?php include 'inc/footer.php'; ?>