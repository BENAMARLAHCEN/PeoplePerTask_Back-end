<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['projectid']) && isset($_POST['freelanceid'])) {
    require_once '../../dashboard/include/connect.php';
    $ptoid = $_POST['projectid'];
    $freeid = $_POST['freelanceid'];
    $sql = "SELECT * from projects where id = ?";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, 'i', $ptoid);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);
    // 
    $sql = "SELECT * from projects where freelance_id = ? and id = ?";

    $stmt = mysqli_prepare($con, $sql);

    mysqli_stmt_bind_param($stmt, 'ii', $freeid, $ptoid);
    mysqli_stmt_execute($stmt);

    $result2 = mysqli_stmt_get_result($stmt);
    if (mysqli_num_rows($result2) > 0) {
        echo "you already send a proposal to this freelance";
    } else {

        if (mysqli_num_rows($result) == 0) {
            echo "you have some error query";
        } else {
            $row = mysqli_fetch_assoc($result);
            if ($row['status'] == 'Y') {
                echo "you are already give a proposal to another freelancer";
            } else {

                $sql = "UPDATE projects
                SET freelance_id = ?,
                status = 'Y'
                WHERE id = ?";

                $stmt = mysqli_prepare($con, $sql);

                mysqli_stmt_bind_param($stmt, 'ii', $freeid, $ptoid);

                $result = mysqli_stmt_execute($stmt);
                if ($result) {
                    echo "your assigner is sending";
                } else {
                    echo "we have some error";
                }
            }
        }
    }
}

function proposallist($id, $con)
{
    $sql = "SELECT * FROM proposal left join users on users.ID_user = proposal.freelance_id WHERE project_id = $id";
    $result2 = mysqli_query($con, $sql);
    while ($proposal = mysqli_fetch_assoc($result2)) {
        echo "<li class='d-flex flex-column flex-md-row py-4'>
        <span class='flex-shrink-0 width-13x me-md-4 d-block mb-3 mb-md-0 small text-muted'>$proposal[sendDate]</span>
        <div class='flex-grow-1 ps-4 border-start border-3'>
            <h4>$proposal[user_name]</h4>
            <p class='mb-0'>
             $proposal[biography]
            </p>
            <div class='d-flex'>
            <a class='btn btn-primary' href='http://localhost/test/project/profile.php?un=$proposal[user_name]'>View profile</a>
            <button onclick='assigner($id,$proposal[ID_user])' class='btn btn-primary'>Accept</button>
            </div>
        </div>
    </li>";
    }
}
function afficheProposal()
{
    global $id;
    global $con;
    $sql = "SELECT * FROM projects WHERE ID_user = $id and status = 'N'";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) == 0) {
        echo "<div class='alert alert-danger'>
		      <strong class='default'><i class='fa fa-hdd-o'></i> Server </strong> you are not have active project
		      <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
		    </div>";
    } else {
        $index = 1;
        echo "<div class='col-lg-5 mb-5 mb-lg-0'>
        <h5 class='mb-4 text-info aos-init aos-animate' data-aos='fade-up'>Project and Proposals</h5>
        <div class='nav nav-pills flex-column aos-init aos-animate' id='myTab' role='tablist' data-aos='fade-up'>
            ";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<button class='nav-link px-4 text-start mb-3 ";
            if ($index == 1) {
                echo "active";
            }
            echo "' id='d$index-tab' data-bs-toggle='tab' data-bs-target='#day$index' type='button' role='tab' aria-controls='day$index' aria-selected='true'>
            <span class='d-block fs-5 fw-bold'>Project:    # $row[id]</span>
            <span class='small'>post in :  $row[creationDate]</span>
        </button>";
            $index += 1;
        }
        $index = 1;
        echo " </div>
        </div>
        <div class='col-lg-7 col-xl-6'>
        <div data-aos='fade-up' class='tab-content aos-init aos-animate' id='myTabContent'>";
        $sql = "SELECT * FROM projects WHERE ID_user = $id and status = 'N'";
        $result = mysqli_query($con, $sql);
        while ($bow = mysqli_fetch_assoc($result)) {
            echo "<div class='tab-pane fade ";
            if ($index == 1) {
                echo "active show";
            }
            echo " show' id='day$index' role='tabpanel' aria-labelledby='d$index-tab'>
                            <ul class='pt-4 list-unstyled mb-0'>";
            proposallist($bow['id'], $con);

            echo "</ul>
        </div>
        ";
            $index += 1;
        }
        echo "</div>
        </div>";
    }
}
