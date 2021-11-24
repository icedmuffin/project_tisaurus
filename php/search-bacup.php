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
            <div class="col-lg-6">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari Istilah TI" aria-label="Istilah TI"
                        aria-describedby="istilah-ti">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" id="index-custom-search" type="button"
                            id="istilah-ti">Cari</button>
                    </div>
                </div>
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
                <?php endif; ?>
                
                <?php wp_reset_query(); ?>

        <!-- stop loop -->
        <!-- pagination belakangan -->
            

        </div>

    </div>
   
<?php get_footer();?>

<div class="test-ajah">

            <?php 
            // the query
            $the_query = new WP_Query( array(
                'category_name' => 'uncategorized',
                'posts_per_page' => 2,
            )); 
            ?>

            <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <a href="<?php echo get_permalink(); ?>" class="h2"><?php the_title(); ?></a>
                <?php the_excerpt(); ?>
                

            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>

            <?php else : ?>
            <p><?php __('No News'); ?></p>
            <?php endif; ?>

    </div>