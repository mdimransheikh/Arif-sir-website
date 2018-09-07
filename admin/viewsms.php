<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>

<?php 
    if(!isset($_GET['viewID']) || $_GET['viewID']==NULL){
        header("Location:inbox.php");
    }else{
        $viewID = $_GET['viewID'];
    }
?>
    <div class="span9">
        <div class="content">
        <div class="module">
            <div class="module-head">
                <h3>Sender sms details</h3>
            </div>
            <div class="module-body">

            <?php 
                $querySelect = "SELECT * FROM tbl_contact WHERE id='$viewID'";
                $data = $db->select($querySelect);
                if($data){
                    while($result = $data->fetch_assoc()){
            ?>
                <form class="form-horizontal row-fluid" action="inbox.php">
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Sender's name: </label>
                        <div class="controls">
                            <input type="text" value="<?php echo $result['name']; ?>" class="span8" readonly>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Sender's email: </label>
                        <div class="controls">
                            <input type="text" value="<?php echo $result['email']; ?>" class="span8" readonly >
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Message body: </label>
                        <div class="controls">
                            <textarea class="span12" rows="15" name="details" readonly>
                                <?php echo $result['message']; ?>
                            </textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <button type="submit" class="btn">Ok!</button>
                        </div>
                    </div>
                </form>
            <?php } } ?>
            </div>
        </div>

            
            
        </div><!--/.content-->
    </div><!--/.span9-->
<?php include 'inc/footer.php'; ?>