<aside id="sidebar" class="side">
            <div class="h-100">
                <div class="sidebar_logo d-flex align-items-end">
                    <img src="<?=$place?>img/logo.svg" alt="">
                    <a href="<?=$place?>dashboard.php" class="nav-link text-white-50">Dashboard</a>
                    <img class="close align-self-start" src="<?=$place?>img/close.svg" alt="">
                </div>

                <ul class="sidebar_nav">
                    <li class="sidebar_item <?=$active_overview ?>" style="width: 100%;">
                        <a href="<?=$place?>dashboard.php" class="sidebar_link"> <img src="<?=$place?>img/1. overview.svg" alt="">Overview</a>
                    </li>
                    <li class="sidebar_item <?=$active_users ?>">
                        <a href="<?=$place?>users.php" class="sidebar_link"> <img src="<?=$place?>img/agent.svg" alt="">Users</a>
                    </li>
                    <li class="sidebar_item <?=$active_freelances ?>">
                        <a href="<?=$place?>freelance.php" class="sidebar_link"> <img src="<?=$place?>img/agents.svg" alt="">Freelances</a>
                    </li>
                    <li class="sidebar_item <?=$active_testimonials?>">
                        <a href="<?=$place?>testimonials.php" class="sidebar_link"><img src="<?=$place?>img/articles.svg" alt="">testimonials</a>
                    </li>
                    <li class="sidebar_item <?=$active_project?>">
                        <a href="<?=$place?>projects.php" class="sidebar_link"> <img src="<?=$place?>img/task.svg" alt="">projects</a>
                    </li>
                    <li class="sidebar_item <?=$active_contact ?>">
                        <a href="<?=$place?>contact.php" class="sidebar_link"><img src="<?=$place?>img/agent.svg" alt="">Contact</a>
                    </li>
                    <li class="sidebar_item <?=$active_categorie?>">
                        <a href="<?=$place?>categories.php" class="sidebar_link"><img src="<?=$place?>img/articles.svg" alt="">Categories</a>
                    </li>

                </ul>
                <div class="line"></div>
                <a href="<?=$place?>settings.php" class="sidebar_link"><img src="<?=$place?>img/settings.svg" alt="">Settings</a>


            </div>
        </aside>