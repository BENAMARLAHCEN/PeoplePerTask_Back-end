<?php 
$sql = "SELECT id,CategoryName FROM categories";
$id_c = mysqli_query($con,$sql);

if (!$id_c) {
    die("invaled query: " . mysqli_error($con));
}
                  
while ($row = mysqli_fetch_assoc($id_c)){
    $selected = '';
                if ($row['id'] == $cat_id) {
                  $selected = 'selected';
                }
    echo "<option " . $selected . "  value='$row[id]'>$row[CategoryName]</option>";
}
?>
