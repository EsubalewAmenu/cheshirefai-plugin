<!-- ******************** Slider Starts Here ******************* -->



<div class="slider">
    <!-- Set up your HTML -->
    <div class="owl-carousel ">
        <?php foreach ($sliders as $slider) { ?>
            <div class="slider-img">
                <div class="item">
                    <div class="slider-img">
                        <?php $src = wp_get_attachment_image_src(get_post_thumbnail_id($slider->ID), 'thumbnail_size'); ?>
                        <img src="<?php echo $src[0] ?>" alt="" height="550px">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                                <div class="animated bounceInDown slider-captions">
                                    <h4 class="slider-title"><?php echo $slider->post_title; ?></h4>
                                    <h5 class="slider-title"><?php echo $slider->post_content; ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

    </div>
</div>