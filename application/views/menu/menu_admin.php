<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    PORTFOLIO MENEGMENT
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="<?php echo site_url('Home/');?>">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('Staff/');?>">
                        <i class="pe-7s-users"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('Student/');?>">
                        <i class="pe-7s-user"></i>
                        <p>Student</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('Catarogy/');?>">
                        <i class="pe-7s-note2"></i>
                        <p>Catarogy skill</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('Computer/');?>">
                        <i class="pe-7s-news-paper"></i>
                        <p>Computer skill</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('Salary/');?>">
                        <i class="pe-7s-science"></i>
                        <p>Salary</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('Strengths/');?>">
                        <i class="pe-7s-map-marker"></i>
                        <p>Strengths</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('Work/');?>">
                        <i class="pe-7s-bell"></i>
                        <p>Work</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('Working_area/');?>">
                        <i class="pe-7s-hammer"></i>
                        <p>Working area</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('Working_goal/');?>">
                        <i class="pe-7s-magic-wand"></i>
                        <p>Working goal</p>
                    </a>
                </li>
				
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo site_url('Home/');?>">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="<?php echo site_url('Login/logout');?>">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>