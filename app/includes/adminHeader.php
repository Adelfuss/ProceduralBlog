<header class="clearfix">
    <a class="logo" href="<?=BASE_URL;?>">
<!--         <img src="../../assets/images/logo-placeholder.png" alt="Logo">-->
        <h1 class="logo-text"><span>Awa</span>Inspires</h1>
    </a>
    <div class="fa fa-reorder menu-toggle"></div>
    <nav>
        <ul>
            <?php if (isset($_SESSION['username'])): ?>
            <li><a href="#">Home</a></li>
            <li>
                <a href="#" class="userinfo">
                    <i class="fa fa-user"></i>
                    <?=$_SESSION['username'];?>
                    <i class="fa fa-chevron-down"></i>
                </a>
                <ul class="dropdown">
                    <li><a href="<?=BASE_URL . "logout.php";?>" class="logout">logout</a></li>
                </ul>
            </li>
            <?php endif; ?>
        </ul>
    </nav>
</header>
