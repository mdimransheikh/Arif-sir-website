<?php include 'inc/header.php'; ?>


<?php 
    if(!isset($_GET['deleteId']) || $_GET['deleteId']==NULL){
        echo "<script> location.href='inbox.php'; </script>";
    }else{
        $deleteId = $_GET['deleteId'];
        $delquery = "DELETE FROM tbl_contact WHERE id='$deleteId'";
        $deldata = $db->delete($delquery);
        if($deldata != false){
        	echo "<script> location.href='inbox.php'; </script>";
        }else{
        	echo "<script> location.href='inbox.php'; </script>";
        }
    }
?>