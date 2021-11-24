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
    <div class="box-404">
        <div class="container">
            
            <h1 class="custom-404">404</h1>
            <h2 class="keterangan-404">Halaman yang kamu cari tidak ada</h2>


        </div>
    </div>

<?php get_footer();?>