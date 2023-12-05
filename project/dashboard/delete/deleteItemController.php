<?php
if (isset($_POST["id"]) && isset($_POST['table'])) {
delete_row($_POST['table'],'id');

}

function delete_row($table_name,$table_id){
        $id=$_POST["id"];
        include('../include/connect.php');
        
        // Delete the row of this id
        $sql = "DELETE FROM $table_name WHERE $table_id = $id";
        $GLOBALS['data'] = $data= mysqli_query($con,$sql); 
        // header('location:../'.$location.'.php');
        // exit;
}
?>