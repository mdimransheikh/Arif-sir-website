<?php include 'inc/header.php'; ?>


<?php 
    if(!isset($_GET['deleteId']) || $_GET['deleteId']==NULL){
        echo "<script> location.href='listresearch.php'; </script>";
    }else{
        $deleteId = $_GET['deleteId'];
        $delquery = "DELETE FROM tbl_research WHERE id='$deleteId'";
        $deldata = $db->delete($delquery);
        if($deldata){
        	echo "<script> location.href='listresearch.php'; </script>";
        }else{
        	echo "<script> location.href='listresearch.php'; </script>";
        }
    }
?>