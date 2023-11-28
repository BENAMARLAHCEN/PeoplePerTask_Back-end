<?php 
$sql = "SELECT id,subName FROM sub_categories where id_category = $id_c";
$id_c = mysqli_query($con,$sql);

if (!$id_c) {
    die("invaled query: " . mysqli_error($con));
}
                  
while ($row = mysqli_fetch_assoc($id_c)){
    echo "<option value='$row[id]'>$row[subName]</option>";
}
?>