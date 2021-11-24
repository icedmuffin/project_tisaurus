
<?php get_header();?>
    <nav class="navbar navbar-light justify-content-center">
        <h2 class="logo">Tisaurus</h2>

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
        <div class="row justify-content-center index-pembukaan">
            <div class="col-lg-8 text-center">
                <h2>Apa itu Tisaurus</h2>
                <p>
                    <?php get_konten(17)?>
                </p>
            </div>
        </div>
        <!-- istilah populer -->
        <div class="row justify-content-center index-pembukaan">
            <div class="col-lg-8 text-center">
                <h2>Istilah TI yang Populer di 2021</h2>
                <p>
                    <?php get_konten(19)?>
                </p>
            </div>
        </div>


        <!-- sementara masih post terbaru-->
        <div class="container">
            <div class="row">
                <!-- start loop -->
                <?php 
                    // the query
                    $the_query = new WP_Query( array(
                        'category_name' => 'uncategorized',
                        'posts_per_page' => 3,
                    )); 
                    $nomer = 1;
                ?>
                <?php if ( $the_query->have_posts() ) : ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="col-sm-4 istilah-populer text-center">
                    <div class="bone">
                        <h2 class="diplay-5 popular-number">
                            <!-- nomer -->
                            <?php echo $nomer?>
                        </h2>
                        <hr>
                        <h3 class="judul-istilah-populer">
                            <!-- judul post -->
                            <a href="<?php echo get_permalink(); ?>" class="popular-header"><?php the_title(); ?></a>
                
                        </h3>
                        <hr>
                        <p>
                            <!-- tulisan post -->
                            <?php echo get_excerpt(200); ?>
                        </p>
                    </div>
                </div>
                <?php $nomer=$nomer+1;?>
                <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>

            <?php else : ?>
            <p><?php __('No News'); ?></p>
            <?php endif; ?>
            </div>
        </div>


    </div>

    <!-- trial error -->


    <?php get_footer();?>