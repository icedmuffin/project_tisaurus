<?php get_header();?>
<?php setPostViews(get_the_ID());?>

<body>

    <nav class="navbar navbar-light navbar-expand-md sticky-top" id="custom-nav">
        <div class="custom-desktop">
            <div class="kanan">
                <a href="<?php echo get_home_url();?>" class="h2 front-header">Tisaurus</a>
            </div>
            <div class="kiri">
                <form class="align-self-center" method="get" role="search" action="<?php echo esc_url(home_url('/')); ?>">
                    <div class="input-group">
                        <input type="text" class="form-control"  placeholder="Cari Istilah TI"
                        aria-label="Search"
                        aria-describedby="istilah-ti" 
                        name="s" id="s"
                        value="<?php echo get_search_query(); ?>">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit" id="index-custom-search" value="<?php echo esc_attr_x('Search', 'submit button'); ?>">Cari</button>
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
            </a>

            <div class="full-mobile">

                <h2 class="diplay-5 text-center heading-cari">Cari Isilah TI</h2>


                <form method="get" role="search" action="<?php echo esc_url(home_url('/')); ?>">
                    <div class="input-group">
                        <input type="text" class="form-control"  placeholder="Cari Istilah TI"
                        aria-label="Search"
                        aria-describedby="istilah-ti" 
                        name="s" id="s"
                        value="<?php echo get_search_query(); ?>">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit" id="index-custom-search" value="<?php echo esc_attr_x('Search', 'submit button'); ?>">Cari</button>
                        </div>
                    </div>
                </form>


                <div class="random-box">

                </div>
            </div>



        </div>

    </nav>
    <div class="container konten">

        <article>

            <h1 class="display-5 judul-konten"><?php the_title(); ?></h1>
            <!-- <h2 class="sub-judul-konten">Sub Judul</h2> -->
            <div class="tulisan">
                <?php the_content();?>
            </div>
            
        </article>

    </div>
<?php get_footer();?>