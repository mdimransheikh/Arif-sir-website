<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>

<?php 
    if(!isset($_GET['editId']) || $_GET['editId']==NULL){
        echo "<script>location.href = 'listresearch.php';</script>";
    }else{
        $editId = $_GET['editId'];
    }
?>

    <div class="span9">
        <div class="content">
        <div class="module">
<?php 
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $name = mysqli_real_escape_string($db->link, $_POST['name']);
        $dat = mysqli_real_escape_string($db->link, $_POST['dat']);
        $details = mysqli_real_escape_string($db->link, $_POST['details']);

        $permited  = array('jpg', 'jpeg', 'png', 'gif');
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_temp = $_FILES['image']['tmp_name'];

        $div = explode('.', $file_name);
        $file_ext = strtolower(end($div));
        $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
        $uploaded_image = "upload/".$unique_image;

        if($name == '' || $dat == '' || $details == ''){
            echo "<span style='font-size:18px;color:red'>Field must not be empty. !!</span>";
        }
        if(!empty($file_name)){
             if (in_array($file_ext, $permited) === false) {
             echo "<span style='font-size:18px;color:red'>You can upload only:-"
             .implode(', ', $permited)."</span>";
            }else{
                move_uploaded_file($file_temp, $uploaded_image);
                $query = "UPDATE tbl_research
                          SET name='$name',
                            image='$uploaded_image',
                            dat='$dat',
                            details = '$details'
                            WHERE id='$editId'";
            $updated_rows = $db->update($query);
            if ($updated_rows) {
             echo "<span style='font-size:18px;color:green'>Research is updated Successfully
             </span>";
            }else {
             echo "<span style='font-size:18px;color:red'>Something went wrong !!</span>";
            }
        }
        }else{
            $query = "UPDATE tbl_research
                      SET name='$name',
                        dat='$dat',
                        details='$details'
                        WHERE id='$editId'";
            $updated_rows = $db->update($query);
            if ($updated_rows) {
             echo "<span style='font-size:18px;color:green'>Research is updated successfully.
             </span>";
            }else {
             echo "<span style='font-size:18px;color:red'>Something went wrong !!</span>";
            }
        }
    }
?> 
            <div class="module-head">
                <h3>Edit my research data</h3>
            </div>
            <div class="module-body">
            <?php 
                $querySelect = "SELECT * FROM tbl_research WHERE id='$editId'";
                $data = $db->select($querySelect);
                if($data){
                    while($result = $data->fetch_assoc()){
            ?>
                <form class="form-horizontal row-fluid" action="" method="post" enctype="multipart/form-data">
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Name of the research: </label>
                        <div class="controls">
                            <input type="text" id="year" name="name" value="<?php echo $result['name']; ?>" class="span8">
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
                        <label class="control-label" for="basicinput">Details: </label>
                        <div class="controls">
                            <textarea class="span12" rows="15" name="details">
                                <?php echo $result['details']; ?>
                            </textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Year: </label>
                        <div class="controls">
                            <input type="text" id="year" name="dat" value="<?php echo $result['dat']; ?>" class="span8">
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <button type="submit" name="submit" class="btn">Update!</button>
                        </div>
                    </div>
                </form>
            <?php } } ?>
            </div>
        </div>

            
            
        </div><!--/.content-->
    </div><!--/.span9-->
<?php include 'inc/footer.php'; ?>