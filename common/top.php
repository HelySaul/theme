<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
      integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
      rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="../common/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

<header class="<?php echo $ACTIVE_TAB === 0 ? 'home-banner' : '' ?>">
    <nav>
<!--        <div class="social-networks">-->
<!--            <a href="#" class="social-network"><i class="fab fa-twitter"></i></a>-->
<!--            <a href="#" class="social-network"><i class="fab fa-facebook-f"></i></i></a>-->
<!--            <a href="#" class="social-network"><i class="fab fa-youtube"></i></i></a>-->
<!--            <a href="#" class="social-network"><i class="fab fa-linkedin-in"></i></a>-->
<!--        </div>-->
        <div class="menu">
            <div class="logo">
                <img src="../assets/img/logo.png">
            </div>
            <div class="nav-tabs">
                <a href="../home/" class="tabs-content <?php echo $ACTIVE_TAB == 0 ? 'active' : '' ?>">
                    Home
                </a>
                <a href="../toolsuite/" class="tabs-content <?php echo $ACTIVE_TAB == 1 ? 'active' : '' ?>">
                    Toolsuite
                    <span class="menu-item-description">CRM</span>
                </a>
                <a href="../booster/" class="tabs-content <?php echo $ACTIVE_TAB == 2 ? 'active' : '' ?>">
                    Booster Bar
                </a>
                <a href="../pricing/" class="tabs-content <?php echo $ACTIVE_TAB == 3 ? 'active' : '' ?>">
                    Pricing
                </a>
                <a href="../contact/" class="tabs-content <?php echo $ACTIVE_TAB == 4 ? 'active' : '' ?>">
                    Contact Us
                </a>
                <a href="../investors/" class="tabs-content <?php echo $ACTIVE_TAB == 5 ? 'active' : '' ?>">
                    Investors
                </a>
                <a href="../about-us/" class="tabs-content <?php echo $ACTIVE_TAB == 6 ? 'active' : '' ?>">
                    About Us
                </a>
                <div class="button-box">
                    <button class="button">Free Account</button>
                </div>
            </div>
            <i class="fas fa-bars menu-icon"></i>
        </div>
    </nav>
    <?php
    $banner = '';
    switch ($ACTIVE_TAB) {
        case 0:
            $banner = '';
            break;
        case 1:
            $banner = '../assets/banners/crm-banner.png';
            break;
        case 2:
            $banner = '../assets/banners/booster-bar.png';
            break;
        case 3:
            $banner = '../assets/banners/pricing-banner.png';
            break;
        case 4:
            $banner = '../assets/banners/contact-banner.png';
            break;
        case 5:
            $banner = '../assets/banners/investors-banner.png';
            break;
        case 6:
            $banner = '../assets/banners/about-banner.png';
            break;
    }
    ?>
    <?php if($banner) { ?><img class="banner-img" src="<?php echo $banner?>" alt=""> <?php }?>
    <?php if(!$banner) { ?><div class='banner'></div> <?php }?>
    <?php if(!$banner) { ?> <div class="wrapper">
        <div class="after"></div>
        <div class="options first-option
			  ">
            <img src="https://smashtechnology.com/wp-content/themes/storefront-child-theme-master/assets/img/menu-topo/contactmanager.png">
            Contact Manager
        </div>
        <div class="options">
            <img src="https://smashtechnology.com/wp-content/themes/storefront-child-theme-master/assets/img/menu-topo/supercalendar.png">
            Super Calendar
        </div>
        <div class="options">
            <img src="https://smashtechnology.com/wp-content/themes/storefront-child-theme-master/assets/img/menu-topo/taskmanager.png">
            Task Manager
        </div>
        <div class="options">
            <img src="https://smashtechnology.com/wp-content/themes/storefront-child-theme-master/assets/img/menu-topo/eventmanager.png">
            Event Manager
        </div>
        <div class="options">
            <img src="https://smashtechnology.com/wp-content/themes/storefront-child-theme-master/assets/img/menu-topo/virtualassistant.png">
            Virtual Assistant
        </div>
        <div class="options">
            <img src="https://smashtechnology.com/wp-content/themes/storefront-child-theme-master/assets/img/menu-topo/videoemail.png">
            Video Email
        </div>
        <div class="options">
            <img src="https://smashtechnology.com/wp-content/themes/storefront-child-theme-master/assets/img/menu-topo/buzzwall.png">
            Buzz Wall
        </div>
        <div class="options last-option">
            <img src="https://smashtechnology.com/wp-content/themes/storefront-child-theme-master/assets/img/menu-topo/smashpages.png">
            Smash Pages
        </div>
        <div class="before"></div>
    </div><?php }?>
</header>