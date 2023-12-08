<?php
include '../dashboard/include/connect.php';
if (isset($_POST['catigoryid'])) {
    $catID = $_POST['catigoryid'];
    $sql = "SELECT * from sub_categories where id_category = $catID";
    $result = mysqli_query($con,$sql);
    while($row = mysqli_fetch_assoc($result)){
        echo "<option value='$row[id]'>$row[subName]</option>" ;
    }
}

if (isset($_POST['regionid'])) {
    $region = $_POST['regionid'];
    $ville = $_POST['ville'];
    $sql = "SELECT * from ville where region = $region";
    $result = mysqli_query($con,$sql);
    while($row = mysqli_fetch_assoc($result)){
        $selected = '';
        if ($row['id'] == $ville) {
            $selected = 'selected';
        }
        echo "<option ".$selected." value='$row[id]'>$row[ville]</option>" ;
    }
}
?>
