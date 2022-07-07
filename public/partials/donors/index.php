
    <!-- ******************** Upcomming Events Starts Here ******************* --> 

    <section class="upcomming container-flid">
        <div class="container">
            <div class="session-title row">
                <p>KNOW AND COME TO JOIN OUR</p>
                <h2>OUR DONERS</h2>
            </div>
            <div class="events-row row">

<?php foreach ($posts as $post) { ?>
                <div class="col-md-4">
                    <div class="event-card">
                    <?php $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail_size'); ?>
                        <img src="<?php echo $src[0] ?>" alt="">
                        <div class="event-detail">
                            <h4><?php echo $post->post_title; ?></h4>
                            <p><?php $result = substr($post->post_content, 0, 125); echo strip_tags($result); ?></p>

                            <!-- <h6>25 <sup>Th</sup> Mar 2020</h6> -->
                        </div>
                        <!-- <div class="plac-dat row no-margin">
                            <div class="col-7 colplac colplacll">
                                <strong>PLACE:</strong>
                                <p>EASTER COAST HOTEL, CA</p>
                            </div>
                            <div class="col-5 colplac">
                                 <strong>TICKET:</strong>
                                <p>FREE OF COST</p>
                            </div>
                        </div> -->
                    </div>
                </div>
                <?php } ?>

            </div>
        </div>
    </section>
