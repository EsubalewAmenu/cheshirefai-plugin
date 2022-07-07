<!-- ******************** Services Starts Here ******************* -->


<section class="container-fluid causes">
    <div class="container">
        <div class="session-title row">
            <p>Learn more about our</p>
            <h2>RECENT CAUSES</h2>
        </div>
        <div class="cuses-row row">

<?php foreach ($recent_causes as $recent_cause) { ?>
            <div class="col-md-4">
                <div class="causen-ccover">


                    <div class="caus-img">
                    <?php $src = wp_get_attachment_image_src(get_post_thumbnail_id($recent_cause->ID), 'thumbnail_size'); ?>
                        <img src="<?php echo $src[0] ?>" alt="">
                    </div>
                    <div class="caus-info row no-margin">
                        <span class="left-info col-6">
                            RAISED: $764
                        </span>
                        <span class="rit-info text-right col-6">
                            TARGET: $1500
                        </span>
                    </div>
                    <div class="caus-detail">
                            <h4><?php echo $recent_cause->post_title; ?></h4>
                        <p><?php $result = substr($recent_cause->post_content, 0, 125); echo strip_tags($result); ?></p>
                    </div>

                    <div class="donat-btn">
                        <button class="btn btn-danger"><i class="fas fa-hand-holding-usd"></i> Donate</button>
                    </div>

                </div>

            </div>
            <?php } ?>

        </div>
    </div>
</section>