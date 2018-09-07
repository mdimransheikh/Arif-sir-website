<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>

<?php 
    if(!isset($_GET['editId']) || $_GET['editId']==NULL){
         echo "<script> location.href='listcatagory.php'; </script>";
    }else{
        $editId = $_GET['editId'];
    }
?>
    <div class="span9">
        <div class="content">
        <div class="module">
            <div class="module-head">
                <h3>Your Education Field</h3>
            </div>
            <div class="module-body">
<?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $name = mysqli_real_escape_string($db->link, $_POST['name']);

        if($name == ''){
            echo "<span style='font-size:18px;color:red'>Field must not be empty. !!</span>";
        }else{
            $query = "UPDATE tbl_category
                      SET name='$name'
                        WHERE id='$editId'";
            $updated_rows = $db->update($query);
            if ($updated_rows) {
             echo "<span style='font-size:18px;color:green'>Updated Successfully.
             </span>";
            }else {
             echo "<span style='font-size:18px;color:red'>Opps!! Category is not Updated !!</span>";
            }
            }
        }
?>

            <?php 
                $querySelect = "SELECT * FROM tbl_category WHERE id='$editId'";
                $data = $db->select($querySelect);
                if($data){
                    while($result = $data->fetch_assoc()){
            ?>
                <form class="form-horizontal row-fluid" action="" method="post">
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Category name: </label>
                        <div class="controls">
                            <input type="text" id="name" name="name" value="<?php echo $result['name']; ?>" class="span8">
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