<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>

<?php 
    if(!isset($_GET['editId']) || $_GET['editId']==NULL){
        echo "<script>location.href = 'listproject.php';</script>";
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
        $student = mysqli_real_escape_string($db->link, $_POST['student']);
        $year = mysqli_real_escape_string($db->link, $_POST['year']);
        $details = mysqli_real_escape_string($db->link, $_POST['details']);
        $type = mysqli_real_escape_string($db->link, $_POST['type']);

        if($name == '' || $student == '' || $year == '' || $details == '' || $type == ''){
            echo "<span style='font-size:18px;color:red'>Field must not be empty. !!</span>";
        }else{
            $query = "UPDATE tbl_thesis
                      SET name='$name',
                        student='$student',
                        year='$year',
                        type='$type',
                        details = '$details'
                        WHERE id='$editId'";
            $updated_rows = $db->update($query);
            if ($updated_rows) {
             echo "<span style='font-size:18px;color:green'>Thesis is updated Successfully
             </span>";
            }else {
             echo "<span style='font-size:18px;color:red'>Something went wrong !!</span>";
            }
        }
    }
?> 
            <div class="module-head">
                <h3>Edit your thesis data</h3>
            </div>
            <div class="module-body">
            <?php 
                $querySelect = "SELECT * FROM tbl_thesis WHERE id='$editId'";
                $data = $db->select($querySelect);
                if($data){
                    while($result = $data->fetch_assoc()){
            ?>
                <form class="form-horizontal row-fluid" action="" method="post" enctype="multipart/form-data">
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Name : </label>
                        <div class="controls">
                            <input type="text" id="name" name="name" value="<?php echo $result['name']; ?>" class="span8">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Student : </label>
                        <div class="controls">
                            <input type="text" id="student" name="student" value="<?php echo $result['student']; ?>" class="span8">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Year: </label>
                        <div class="controls">
                            <input type="text" id="sesson" name="year" value="<?php echo $result['year']; ?>" class="span8">
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
                        <label class="control-label" for="basicinput">Type: </label>
                        <div class="controls">
                            <select tabindex="1" name="type" class="span8">
                                <option value="1">Highlighted</option>
                                <option value="0">None</option>
                            </select>
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