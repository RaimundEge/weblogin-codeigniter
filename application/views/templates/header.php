<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>   
    <title>CSCI 680 - Web Application Frameworks</title>
</head>
<body>
<div>
    <div class="navbar navbar-inverse navbar-static-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <strong class="navbar-brand default" style="color: white !important;">CodeIgniter Demo</strong>
            </div>
            
            <div class="navbar-collapse nav-collapse">
                <ul class="nav navbar-nav">
                    <li class="<?php if ($page == "home") echo 'active' ?>">
                        <a href="<?php echo base_url('home'); ?>">Home</a>
                    </li>
                    <li class="<?php if ($page == "content") echo 'active' ?>">
                        <a href="<?php echo base_url('content'); ?>">Content</a>
                    </li>
                    <?php if (isset($_SESSION['user']) && $_SESSION['user'] == 'root') { ?>
                    <li class="<?php if ($page == "users") echo 'active' ?>">
                        <a href="<?php echo base_url('users'); ?>">User Management</a>
                    </li>
                    <?php } ?>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <?php if (!isset($_SESSION['user'])) { ?>
                    <li>
                        <a href="<?php echo base_url('login'); ?>">
                            <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;Sign in
                        </a>
                    </li>
                    <?php } else { ?>
                    <li>
                        <p class="navbar-text"><?php echo $_SESSION['user'] ?></p>
                    </li>
                    <li>
                        <a href="<?php echo base_url('logout'); ?>">
                            <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Logout
                        </a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>

