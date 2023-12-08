<?php
include '../dashboard/include/connect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['projectid']) && isset($_POST['freelanceid'])) {
    $ptoid = $_POST['projectid'];
    $freeid = $_POST['freelanceid'];
    $sql = "SELECT * from projects where id = ?";

    $stmt = mysqli_prepare($con, $sql);

    mysqli_stmt_bind_param($stmt, 'i', $ptoid);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);
    // 
    $sql = "SELECT * from proposal where freelance_id = ? and project_id = ?";

    $stmt = mysqli_prepare($con, $sql);

    mysqli_stmt_bind_param($stmt, 'ii', $freeid, $ptoid);
    mysqli_stmt_execute($stmt);

    $result2 = mysqli_stmt_get_result($stmt);
    if (mysqli_num_rows($result2) > 0) {
        echo "you already send a proposal to this project";
    } else {

        if (mysqli_num_rows($result) == 0) {
            echo "you have some error query";
        } else {
            $row = mysqli_fetch_assoc($result);
            if ($row['status'] == 'Y') {
                echo "his project is already a proposal with another freelancer";
            } else {
                
                $sql = "INSERT INTO proposal (project_id,freelance_id) values (?,?)";

                $stmt = mysqli_prepare($con, $sql);

                mysqli_stmt_bind_param($stmt, 'ii', $ptoid, $freeid);

                $result = mysqli_stmt_execute($stmt);
                if ($result) {
                    echo "your proposal is sending";
                } else {
                    echo "we have some error";
                }
            }
        }
    }
} else {
    echo "your action is not valid";
}
