<?php include('include/connect.php')?>
                        <?php $sql = "SELECT * FROM ville";
                        $ville = mysqli_query($con,$sql);

                        if (!$ville) {
                        die("invaled query: " . mysqli_error());
                        }
                  
                        while ($row = mysqli_fetch_assoc($ville)){
                        echo "<option value='$row[id]'>$row[ville]</option>";
                        }