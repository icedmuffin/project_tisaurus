<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bar atas -->
    <title><?php wp_title(); ?></title>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/icon.png">

    <!-- untuk boostrap, js dan google font -->
    <?php wp_head(); ?>

</head>

<body>

    <nav class="navbar navbar-light navbar-expand-lg sticky-top" id="custom-nav">
        <div class="custom-desktop">
            <div class="kanan">
                <a href="<?php echo get_site_url() ?>" class="h2">Tisaurus</a>
            </div>
            <div class="kiri">
                <form class="align-self-center" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                    <div class="input-group">
                        <input type="search" class="form-control" placeholder="Cari Istilah TI" aria-label="Istilah TI"
                            aria-describedby="istilah-ti" value="<?php echo get_search_query(); ?>" name="s" id="s">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary"  id="searchsubmit" type="submit"
                                id="istilah-ti" value="<?php echo esc_attr_x('Search', 'submit button'); ?>">Cari</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>




        <botton class="navbar-toggler" data-toggle="collapse" data-target="#expandme">
            <span class="navbar-toggler-icon"></span>
        </botton>
        <div class="collapse navbar-collapse " id="expandme">
            <a href="#" class="navbar-nav">
                <!-- <a href="#" class="nav-item nav-link">Home</a>
                <a href="#" class="nav-item nav-link">About</a>
                <a href="#" class="nav-item nav-link">Contact</a> -->

            </a>

            <div class="full-mobile">

                <h2 class="diplay-5 text-center heading-cari">Cari Isilah TI</h2>


                <form class="align-self-center" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                    <div class="input-group">
                        <input type="search" class="form-control" placeholder="Cari Istilah TI" aria-label="Istilah TI"
                            aria-describedby="istilah-ti" value="<?php echo get_search_query(); ?>" name="s" id="s">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary"  id="searchsubmit" type="submit"
                                id="istilah-ti" value="<?php echo esc_attr_x('Search', 'submit button'); ?>">Cari</button>
                        </div>
                    </div>
                </form>


                <div class="random-box">

                </div>
            </div>



        </div>

    </nav>