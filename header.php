<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script/jquery-3.7.1.min.js"></script>
    <title>Radobargh</title>
    <style>
        .search-input{
            border: none;
            outline: none;
        }
        .footer-text-header{
            padding: 5px;
            border-bottom: 3px solid green;
        }
    </style>
    <?php wp_head(); ?>
</head>
<body>
    <nav class="header navbar navbar-expand-lg">
        <div class="container-fluid">
            <?php 
            if(get_theme_mod('logoSelector') != NULL){
                ?>
                <img class="logo" src="<?php echo get_theme_mod('logoSelector'); ?>" alt="logo">
                <?php
            }
            else{
                ?>
                <a class="navbar-brand" href="#">Radobargh</a>
                <?php
            }
            ?>
            <div class="collapse navbar-collapse mr-50" id="navbarSupportedContent">
                <?php
                    wp_nav_menu(array(
                        'theme_location'        => 'header-menu',
                        'depth'                 => 1,
                        'container'             => 'div',
                        'container_class'       => 'collapse navbar-collapse',
                        'container_id'          => 'navbarSupportedContent',
                        'menu_class'            => 'nav navbar-nav',
                        'fallback_cb'           => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'                => new WP_Bootstrap_Navwalker()
                    ));
                ?>
            </div>
            <?php if(get_theme_mod('searchTypeSelector') == 'simple'){ ?>
                <form role="search" method="get" action="<?php echo home_url('/'); ?>">
                    <input class="search-input rounded p-2 bg-theme mt-3" type="text" name="s" placeholder="<?php echo get_theme_mod('placeholderSearchText'); ?>">
                </form>
            <?php } 
            else if(get_theme_mod('searchTypeSelector') == 'modern'){
            ?>
            <form role="search" method="get" action="<?php echo home_url('/'); ?>" class="search-bar-container active">
                <img src="<?php echo get_template_directory_uri().'/img/search.svg'; ?>" alt="" class="magnifier">
                <input name="s" type="text" class="search-input-type2" placeholder="<?php echo get_theme_mod('placeholderSearchText'); ?>">
            </form>
            <?php } ?>
            <button type="button" class="btn bg-theme m-3">حساب کاربری</button>
        </div>
    </nav>
