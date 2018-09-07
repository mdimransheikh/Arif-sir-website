<?php include 'inc/header.php'; ?>


<?php 
    if(!isset($_GET['deleteId']) || $_GET['deleteId']==NULL){
        echo "<script> location.href = 'listthesis.php'; </script>";
    }else{
        $deleteId = $_GET['deleteId'];
        $delquery = "DELETE FROM tbl_thesis WHERE id='$deleteId'";
        $deldata = $db->delete($delquery);
        if($deldata != false){
        	echo "<script> location.href = 'listthesis.php'; </script>";
        }else{
        	echo "<script> location.href = 'listthesis.php'; </script>";
        }
    }
?>