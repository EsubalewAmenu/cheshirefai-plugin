<!-- ******************** Slider Starts Here ******************* -->



<div class="slider">
    <!-- Set up your HTML -->
    <div class="owl-carousel ">
        <?php foreach ($sliders as $slider) { ?>
            <div class="slider-img">
                <div class="item">
                    <div class="slider-img">
                        <?php $src = wp_get_attachment_image_src(get_post_thumbnail_id($slider->ID), 'thumbnail_size'); ?>
                        <img src="<?php echo $src[0] ?>" alt="">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                                <div class="animated bounceInDown slider-captions">
                                    <h1 class="slider-title"><?php echo $slider->post_title; ?></h1>
                                    <p class="slider-text hidden-xs"><?php $result = substr($slider->post_content, 0, 125);
                                                                        echo strip_tags($result); ?></p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

    </div>
</div>