<?php include 'inc/header.php'; ?>


<?php 
    if(!isset($_GET['deleteId']) || $_GET['deleteId']==NULL){
        echo "<script> location.href='listcatagory.php'; </script>";
    }else{
        $delid = $_GET['deleteId'];
        $delquery = "DELETE FROM tbl_category WHERE id='$delid'";
        $deldata = $db->delete($delquery);
        if($deldata){
        	echo "<script> location.href='listcatagory.php'; </script>";
        }else{
        	echo "<script> location.href='listcatagory.php'; </script>";
        }
    }
?>