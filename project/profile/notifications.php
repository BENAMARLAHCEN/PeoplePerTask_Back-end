<?php
require_once 'controller/sessionController.php';
require_once '../dashboard/include/connect.php';
require_once 'controller/proposalController.php';
?>
<!DOCTYPE html>
<html lang="en">

<?php require_once 'include/head.php'  ?>



<body>
    <div class="container-xl px-4 mt-4">

        <?php require_once 'include/nav.php'  ?>

        <div class="container py-9 py-lg-11 position-relative z-index-1">
            <div id="massege">

            </div>
            <div class="row">
                <?php afficheProposal() ?>
            </div>
        </div>
    </div >
    <script>
        function assigner(projectid,freelancerid) {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("massege").innerHTML = this.responseText;
                    }
                };
                xhttp.open("POST", "http://localhost/test/project/profile/controller/proposalController.php", true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send(`projectid=${projectid}&freelanceid=${freelancerid}`);
        }
    </script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    </script>
</body>

</html>