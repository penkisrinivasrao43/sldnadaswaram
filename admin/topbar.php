<div class="sidebar-overlay" id="sidebar-overlay"></div>
<div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
<div class="mobile-menu-handle"></div>
<header class="header">
    <div class="header-block header-block-collapse d-lg-none d-xl-none">
        <button class="collapse-btn" id="sidebar-collapse-btn">
            <i class="fa fa-bars"></i>
        </button>
    </div>

    <div class="header-block header-block-buttons">
        <a href="#" class="btn btn-sm header-btn">
            <!-- <i class="fa fa-github-alt"></i> -->
            <!-- <img class="img" src="uploads/logo-white.png" style="radius: 50px;" width="100"/> -->
            <span>Hi Welcome Back - <?php echo strtoupper($_SESSION['username']); ?></span>
        </a>
    </div>
     <div class="header-block header-block-nav">
        <ul class="nav-profile">
            <li class="profile dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <!--<img class="img" src="../../media/images/images/SLD-LOGO.pngg" style="radius: 50%;" />-->
                    <i class="fa fa-power-off icon"></i> Logout </a>
                    <span class="name"> <?php //echo strtoupper($_SESSION['login']); ?> </span>
                </a>
                <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1">
                    <a class="dropdown-item" href="logout.php">
                        <i class="fa fa-power-off icon"></i> Logout </a>
                </div>
            </li>
        </ul>
    </div> 
</header>