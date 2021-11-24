<?php get_header();?>

    <nav class="navbar navbar-light justify-content-center">
    <a href="<?php echo get_home_url();?>" class="h2 front-header">Tisaurus</a>

    </nav>
    <div class="container ">



        <!-- heading -->
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-8">
                <h1 class="text-center display-4 judul">
                    Ensiklopedia Teknologi Informasi Indonesia
                </h1>


            </div>
        </div>

        <!-- form search -->
        <div class="row justify-content-center pencarian">
            <div class="col-lg-8">
                <form method="get" role="search" action="<?php echo esc_url(home_url('/')); ?>">
                    <div class="input-group mb-3">
                        <input type="text" 
                        class="form-control custom-height" 
                        placeholder="Cari Istilah TI"
                        aria-label="Search"
                        aria-describedby="istilah-ti" 
                        name="s" id="s"
                        value="<?php echo get_search_query(); ?>">

                        <div class="input-group-append">
                            <button class="btn cari" type="submit" id="index-custom-search" value="<?php echo esc_attr_x('Search', 'submit button'); ?>">Cari</button>
                           
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <!-- konten tengah -->
        <!-- apa itu tisaurus -->



    </div>
    <hr>
    <div class="container">

        <h2 class="text-center display-6 judul">
            Hasil Pencarian Kamu :
            <hr>
        </h2>

        <div class="row ">
            <!-- start loop -->
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>

            <div class="col-md-6 col-12">
                <div class="kotak-hasil">
                    <div class="row ">
                        <div class="col-md-4 pencarian-judul">
                            <!-- ini judul post -->
                            <a class="judul-post-pencarian h3" href="<?php the_permalink() ?>">
                            <?php the_title(); ?>
                            </a>
                            <hr class="d-blok d-md-none">
                        </div>
                        <div class="col-md-8">
                            <!-- ini bacaan post -->
                            <p><?php echo get_excerpt(250) ?></p>
                        </div>

                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php else : ?>
            <div class="col">
                <p class="tidak-ada">Istilah Yang kamu cari tidak ada :(</p>
            </div>
           
                <?php endif; ?>
                
                <?php wp_reset_query(); ?>

        <!-- stop loop -->
        <!-- pagination belakangan -->
            

        </div>

    </div>
   
<?php get_footer();?>