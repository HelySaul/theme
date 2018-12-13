<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="../common/style.css">

<nav>
    <div class="social-networks">
        <a href="#" class="social-network"><i class="fab fa-twitter"></i></a>
        <a href="#" class="social-network"><i class="fab fa-facebook-f"></i></i></a>
        <a href="#" class="social-network"><i class="fab fa-youtube"></i></i></a>
        <a href="#" class="social-network"><i class="fab fa-linkedin-in"></i></a>
    </div>
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
    </div>
</nav>
<div class='banner booster-bar'>
</div>