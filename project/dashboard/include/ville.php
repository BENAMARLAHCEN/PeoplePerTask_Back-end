<?php include('include/connect.php')?>

<?php $sql = "SELECT * FROM ville";
$villes = mysqli_query($con,$sql);

if (!$villes) {
    die("invaled query: " . mysqli_error($con));
}
                  
while ($row = mysqli_fetch_assoc($villes)){
    $selected = '';
    if ($row['id'] == $ville) {
        $selected = 'selected';
    }
    echo "<option ".$selected." value='$row[id]'>$row[ville]</option>";
}
?>