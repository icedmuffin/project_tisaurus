<br>
    <footer class="footer">

        <div class="container">
            <div class="row text-md-left text-center">
                <div class="col-sm-4">
                    <div class="footer-container">
                        <h2 class="footer-header-nav">Tentang Tisaurus</h2>
                        <p class="footer-nav">
                        <?php
                        $id=22; 
                        $post = get_post($id); 
                        $content = apply_filters('the_content', $post->post_content); 
                        echo $content;  
                        ?>
                        </p>
                        <a href="<?php echo get_home_url(); ?>/tentang-tisaurus/" class="link">
                            Pelajari lebih dalam
                        </a>

                    </div>

                </div>

                <div class="col-sm-4">
                    <div class="footer-container">
                        <h2 class="footer-header-nav">Kontak Kami</h2>
                        <p class="footer-nav">
                            Kontak kami melalui email berikut. <br><br>
                            tisaurus.indonesia@gmail.com<br>
                            

                        </p>
                    </div>

                </div>
                <div class="col-sm-4">
                    <div class="footer-container">
                        <h2 class="footer-header-nav">Sitemap</h2>
                        <a href="<?php echo get_home_url(); ?>/core-sitemap/" class="link">
                            Tisaurus Sitemap
                        </a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="copyright">
                <p class="text-center copyright">Copyright Tisaurus 2021</p>
            </div>
        </div>
    </footer>

</body>

</html>