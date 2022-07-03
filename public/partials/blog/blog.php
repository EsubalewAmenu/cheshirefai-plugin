

     <!--  ************************* Blog Starts Here ************************** -->
     <div class="blog">

<div class="container">
    <div class="row">
       
    <?php foreach ($posts as $filtered_post) { ?>
        <div class="col-md-6 col-sm-12">
            <div class="blog-singe no-margin row">
                <div class="col-sm-5 blog-img-tab">
                <a href="<?php echo esc_url(get_permalink($filtered_post->ID)); ?>">
                    <?php $src = wp_get_attachment_image_src(get_post_thumbnail_id($filtered_post->ID), 'thumbnail_size'); ?>
                    <img src="<?php echo $src ? $src[0] : ds_cheshirefai_PLAGIN_URL . 'assets/img_not_found.png'  ?>" alt="">
                    </a>
                </div>
                <div class="col-sm-7 blog-content-tab">
                    <a href="<?php echo esc_url(get_permalink($filtered_post->ID)); ?>">
                    <h2><?php echo $filtered_post->post_title; ?></h2>
                    <p><i class="fas fa-user"><small><?php echo get_the_author_meta('display_name', $filtered_post->post_author); ?></small></i>  
                    <!-- <i class="fas fa-eye"><small>(12)</small></i>   -->
                    <i class="fas fa-comments"><small>(<?php echo get_comments_number($filtered_post->ID); ?>)</small></i></p>
                    <!-- <p class="blog-desic">Lorem Ipsum, type lorem then press the shortcut. The default keyboard shortcut is the same keyboard shortcut is the </p> -->
                    Read More <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    <?php } ?>


        <!-- <div class="col-md-6 col-sm-12">
            <div class="blog-singe no-margin row">
                <div class="col-sm-5 blog-img-tab">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/blog_02.jpg" alt="">
                </div>
                <div class="col-sm-7 blog-content-tab">
                    <h2>Totam Rem Aperiam</h2>
                    <p><i class="fas fa-user"><small>Admin</small></i>  <i class="fas fa-eye"><small>(12)</small></i>  <i class="fas fa-comments"><small>(12)</small></i></p>
                    <p class="blog-desic">Lorem Ipsum, type lorem then press the shortcut. The default keyboard shortcut is the same keyboard shortcut is the </p>
                    <a href="blog_single.html">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="blog-singe no-margin row">
                <div class="col-sm-5 blog-img-tab">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/blog_04.jpg" alt="">
                </div>
                <div class="col-sm-7 blog-content-tab">
                    <h2>Excepteur sint occaecat</h2>
                    <p><i class="fas fa-user"><small>Admin</small></i>  <i class="fas fa-eye"><small>(12)</small></i>  <i class="fas fa-comments"><small>(12)</small></i></p>
                    <p class="blog-desic">Lorem Ipsum, type lorem then press the shortcut. The default keyboard shortcut is the same keyboard shortcut is the </p>
                    <a href="blog_single.html">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="blog-singe no-margin row">
                <div class="col-sm-5 blog-img-tab">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/blog_03.jpg" alt="">
                </div>
                <div class="col-sm-7 blog-content-tab">
                    <h2>Curabit finibus dui sem.</h2>
                    <p><i class="fas fa-user"><small>Admin</small></i>  <i class="fas fa-eye"><small>(12)</small></i>  <i class="fas fa-comments"><small>(12)</small></i></p>
                    <p class="blog-desic">Lorem Ipsum, type lorem then press the shortcut. The default keyboard shortcut is the same keyboard shortcut is the </p>
                    <a href="blog_single.html">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div> -->

    </div>
</div>
</div>


