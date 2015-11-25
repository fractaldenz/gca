<!DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css" />
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arimo:400,700" />
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700,300" />
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="header-wrap">
    <div class="container">
        <div class="row">
            <div class="header">
                <div class="col-md-3">
                    <div class="logo">
                        <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="search">
                        <div class="pull-right">
                            <form method="post" class="pull-right">
                                <?php if( !is_user_logged_in() ){ ?>
                                <p>
                                    <input type="text" name="login_email" class="search-input" placeholder="Email Address" />
                                    <input type="submit" name="login" class="submit" value="Login" />
                                </p>
                                <?php } ?>
                                <div class="clearfix"></div>
                            </form>
                            <form method="post" class="pull-right">
                                <p>
                                    <input type="text" class="search-input" placeholder="Enter Keyword" />
                                    <input type="submit" id="search-submit" class="hidden" />
                                    <label for="search-submit" class="submit"><span class="fa fa-search"></span></label>
                                </p>
                                <div class="clearfix"></div>
                            </form>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="topmenu">
                        <div class="navbar navbar-default">
                            <div class="container-fluid">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <?php wp_nav_menu(array('menu'=>'topmenu','menu_class' => 'nav navbar-nav','walker'=>new wp_bootstrap_navwalker())); ?>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>