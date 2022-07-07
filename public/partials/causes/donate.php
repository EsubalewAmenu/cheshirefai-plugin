<!-- ******************** Services Starts Here ******************* -->

<section class="services container-fluid">
    <div class="container">

        <div class="service-row row">

            <?php foreach ($causes as $cause) { ?>
                <div class="col-md-4">
                    <div class="servic-col">
                        <div class="servic-round">
                            <p>Donate</p>
                        </div>
                        <h4><?php echo $cause->post_title; ?></h4>
                        <?php $result = substr($cause->post_content, 0, 250);
                            echo strip_tags($result); ?> 
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</section>