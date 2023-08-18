<?php 
    include_once('connect.php');
    if(isset($_REQUEST['id']) and $_REQUEST['id']!=""){
        $id = $_GET['id'];
        $sql = "DELETE FROM tbLogin WHERE id = '$id'";
        if($conn->query($sql) === TRUE){
            header("location: admin.php");
        } else{
            echo "Error" .$conn->error;
        }
        mysqli_close($conn);
    }
    

?>