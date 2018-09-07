<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>

<?php 
    if(!isset($_GET['replyID']) || $_GET['replyID']==NULL){
        echo "<script> location.href='inbox.php'; </script>";
    }else{
        $replyID = $_GET['replyID'];
    }
?>
    <div class="span9">
        <div class="content">
        <div class="module">
        <?php 
            if($_SERVER['REQUEST_METHOD'] =='POST'){
                $to = $fm->validation($_POST['toEmail']);
                $from = $fm->validation($_POST['fromEmail']);
                $subject = $fm->validation($_POST['subject']);
                $message = $fm->validation($_POST['message']);
                $sendEmail = mail($to, $subject, $message);
                if($sendEmail){
                    echo "<span style='font-size:18px;color:green'>Your email is successfully sent !!</span>";
                }else{
                    echo "<span style='font-size:18px;color:red'>Your email can not be sent !!</span>";
                }
            }
        ?>
            <div class="module-head">
                <h3>Reply to the sender</h3>
            </div>
            <div class="module-body">

            <?php 
                $querySelect = "SELECT * FROM tbl_contact WHERE id='$replyID'";
                $data = $db->select($querySelect);
                if($data){
                    while($result = $data->fetch_assoc()){
            ?>
                <form class="form-horizontal row-fluid" action="" method="POST">
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Reciever's email: </label>
                        <div class="controls">
                            <input type="text" name="toEmail" value="<?php echo $result['email']; ?>" class="span8" readonly >
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">My Email: </label>
                        <div class="controls">
                            <input type="text" name="fromEmail" class="span8">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Email's subject: </label>
                        <div class="controls">
                            <input type="text" name="subject" class="span8">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Message body: </label>
                        <div class="controls">
                            <textarea class="span12" rows="15" name="message">
                            </textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <button type="submit" name="submit" class="btn">Send!</button>
                        </div>
                    </div>
                </form>
            <?php } } ?>
            </div>
        </div>

            
            
        </div><!--/.content-->
    </div><!--/.span9-->
<?php include 'inc/footer.php'; ?>