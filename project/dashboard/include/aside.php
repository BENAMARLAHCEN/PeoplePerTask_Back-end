<aside id="sidebar" class="side">
    <div class="h-100">
        <div class="sidebar_logo d-flex align-items-end">
            <img src="<?= $place ?>img/logo.svg" alt="">
            <a href="<?= $place ?>dashboard.php" class="nav-link text-white-50">Dashboard</a>
            <img class="close align-self-start" src="<?= $place ?>img/close.svg" alt="">
        </div>

        <ul class="sidebar_nav">
            <?php
            if ($_SESSION['role'] == "admin") {
            ?>
                <li class="sidebar_item" style="width: 100%;">
                    <a href="<?= $place ?>dashboard.php" class="sidebar_link"> <img src="<?= $place ?>img/1. overview.svg" alt="">Overview</a>
                </li>
                <li class="sidebar_item">
                    <a href="<?= $place ?>users.php" class="sidebar_link"> <img src="<?= $place ?>img/agent.svg" alt="">Users</a>
                </li>
                <li class="sidebar_item">
                    <a href="<?= $place ?>freelance.php" class="sidebar_link"> <img src="<?= $place ?>img/agents.svg" alt="">Freelances</a>
                </li>
                <li class="sidebar_item">
                    <a href="<?= $place ?>categories.php" class="sidebar_link"><img src="<?= $place ?>img/articles.svg" alt="">Categories</a>
                </li>
                <li class="sidebar_item">
                    <a href="<?= $place ?>skills&tags.php" class="sidebar_link"><img src="<?= $place ?>img/articles.svg" alt="">Skill&Tag</a>
                </li>
            <?php
            }
            ?>
            <li class="sidebar_ite">
                <a href="<?= $place ?>projects.php" class="sidebar_link"> <img src="<?= $place ?>img/task.svg" alt="">projects</a>
            </li>
            <li class="sidebar_ite">
                <a href="<?= $place ?>testimonials.php" class="sidebar_link"><img src="<?= $place ?>img/articles.svg" alt="">testimonials</a>
            </li>

            


        </ul>
        <div class="line"></div>
        <a href="<?= $place ?>profile.php" class="sidebar_link"><img src="<?= $place ?>img/settings.svg" alt="">Settings</a>


    </div>
</aside>