<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>

    <div class="span9">
        <div class="content">
            <div class="module message">
                <div class="module-head">
                    <h3>Message</h3>
                </div>
                <div class="module-body table">
                    <table class="table table-message">
                        <tbody>
                            <tr class="heading">
                                <td class="cell-author hidden-phone hidden-tablet">
                                    Sender
                                </td>
                                <td class="cell-title">
                                    Email
                                </td>
                                <td class="cell-title">
                                    Message
                                </td>
                                <td class="cell-time align-right">
                                    Date
                                </td>
                                <td class="cell-title">
                                    Action
                                </td>
                            </tr>

                        <?php 
                            $query = "select * from tbl_contact";
                            $result = $db->select($query);
                            if($result){
                                while($data = $result->fetch_assoc()){
                        ?>
                            <tr class="unread">
                                <td class="cell-author hidden-phone hidden-tablet">
                                    <?php echo $data['name']; ?>
                                </td>
                                <td class="cell-title">
                                    <?php echo $data['email']; ?>
                                </td>
                                <td class="cell-title">
                                    <?php echo $fm->textShorten($data['message'], 250); ?>
                                </td>
                                <td class="cell-title">
                                    18:24
                                </td>
                                <td class="cell-title">
                                    <a href="viewsms.php?viewID=<?php echo $data['id']; ?>">View</a>
                                    
                                    <a href="replysms.php?replyID=<?php echo $data['id']; ?>">Reply</a>
                                    <a onclick="return confirm('Are you sure to delete?');"  href="deletesms.php?deleteId=<?php echo $data['id']; ?>">Delete</a>
                                </td>
                            </tr>
                        <?php } } ?>
                        </tbody>
                    </table>
                </div>
                <div class="module-foot">
                </div>
            </div>
        </div>
        <!--/.content-->
    </div>
                    
<?php include 'inc/footer.php'; ?>