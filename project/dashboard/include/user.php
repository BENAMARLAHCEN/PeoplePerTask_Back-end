
<?php $sql = "SELECT ID_user,user_name FROM users
WHERE ID_user NOT IN (SELECT ID_user FROM freelance);";
$id_u = mysqli_query($con,$sql);

if (!$id_u) {
    die("invaled query: " . mysqli_error($con));
}
                  
while ($row = mysqli_fetch_assoc($id_u)){
    echo "<option value='$row[ID_user]'>id:$row[ID_user] name:$row[user_name]</option>";
}
?>