<aside id="sidebar" class="side">
            <div class="h-100">
                <div class="sidebar_logo d-flex align-items-end">
                    <img src="img/logo.svg" alt="">
                    <a href="#" class="nav-link text-white-50">Dashboard</a>
                    <img class="close align-self-start" src="img/close.svg" alt="">
                </div>

                <ul class="sidebar_nav">
                    <li class="sidebar_item <?=$active_overview ?>" style="width: 100%;">
                        <a href="dashboard.html" class="sidebar_link"> <img src="img/1. overview.svg" alt="">Overview</a>
                    </li>
                    <li class="sidebar_item <?=$active_agents ?>">
                        <a href="agents.html" class="sidebar_link"> <img src="img/agents.svg" alt="">Agents</a>
                    </li>
                    <li class="sidebar_item<?=$active_project ?>">
                        <a href="task.html" class="sidebar_link"> <img src="img/task.svg" alt="">Task</a>
                    </li>
                    <li class="sidebar_item<?=$active_contact ?>">
                        <a href="contact.html" class="sidebar_link"><img src="img/agent.svg" alt="">Contact</a>
                    </li>
                    <li class="sidebar_item <?=$active_categorie?>">
                        <a href="#" class="sidebar_link"><img src="img/articles.svg" alt="">Articles</a>
                    </li>

                </ul>
                <div class="line"></div>
                <a href="#" class="sidebar_link"><img src="img/settings.svg" alt="">Settings</a>


            </div>
        </aside>