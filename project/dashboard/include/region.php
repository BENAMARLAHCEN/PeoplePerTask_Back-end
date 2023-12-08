
<?php 
function region($region){
global $con;
$sql = "SELECT * FROM region";
$region = mysqli_query($con,$sql);

if (!$region) {
    die("invaled query: " . mysqli_error($con));
}                
while ($row = mysqli_fetch_assoc($region)){
    $selected = '';
    if ($row['id'] == $region) {
        $selected = 'selected';
    }
    echo "<option ".$selected." value='$row[id]'>$row[region]</option>";
}
}
?>