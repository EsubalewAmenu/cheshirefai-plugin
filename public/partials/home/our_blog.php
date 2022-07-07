    <!--  ************************* Blog Starts Here ************************** -->
    <div class="blog">

        <div class="container">
            <div class="row session-title">
                <h2>Our Blog</h2>
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
            </div>
            <div class="row blog-row">

                <?php foreach ($posts as $filtered_post) { ?>
                    <div class="col-md-6 col-sm-12">
                        <div class="blog-singe no-margin row">
                            <a href="<?php echo esc_url(get_permalink($filtered_post->ID)); ?>">
                                <div class="col-sm-5 blog-img-tab">
                                    <?php $src = wp_get_attachment_image_src(get_post_thumbnail_id($filtered_post->ID), 'thumbnail_size'); ?>
                                    <img src="<?php echo $src ? $src[0] : ds_cheshirefai_PLAGIN_URL . 'assets/img_not_found.png'  ?>" alt="">
                            </a>
                        </div>
                        <div class="col-sm-7 blog-content-tab">
                            <a href="<?php echo esc_url(get_permalink($filtered_post->ID)); ?>">
                                <h2><?php echo $filtered_post->post_title; ?></h2>
                                <p><i class="fas fa-user"><small><?php echo get_the_author_meta('display_name', $filtered_post->post_author); ?></small></i>
                                    <!-- <i class="fas fa-eye"><small>(12)</small></i>   -->
                                    <i class="fas fa-comments"><small>(<?php echo get_comments_number($filtered_post->ID); ?>)</small></i>
                                </p>
                                <p class="blog-desic"><?php $result = substr($filtered_post->post_content, 0, 125); echo strip_tags($result); ?> </p>
                                Read More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
            </div>
        <?php } ?>

        </div>
    </div>
    </div>