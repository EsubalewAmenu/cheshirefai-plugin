<!-- ******************** Services Starts Here ******************* -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tingle/0.8.4/tingle.css" integrity="sha512-ZKliQ0+hD8CfDJ2v8kzEzNxT5Y4EnmG5cFV6oFvswCDyckUCRG+1p6nyMMlLgi1vM5srVpX+6YkxiUoF2tOfRw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    
    <script  src="https://cdnjs.cloudflare.com/ajax/libs/tingle/0.8.4/tingle.min.js" integrity="sha512-SxopZNPB/jzFpgtGdR6lI7dK8EbbheOZVLNDI0FsMNM0NAqNkJyVoT83C72esOJCTdPVfDb8miZ3whsW4o/+fA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    

<section class="container-fluid causes">
    <div class="container">
        <div class="session-title row">
            <p>Learn more about our</p>
            <h2>RECENT CAUSES</h2>
        </div>
        <div class="cuses-row row">

            <?php foreach ($recent_causes as $recent_cause) { ?>
                <div class="col-md-4">
                    <div class="causen-ccover" id="recent_cause<?php echo $recent_cause->ID ?>">


                        <div class="caus-img">
                            <?php $src = wp_get_attachment_image_src(get_post_thumbnail_id($recent_cause->ID), 'thumbnail_size'); ?>
                            <img src="<?php echo $src[0] ?>" alt="">
                        </div>
                        <!-- <div class="caus-info row no-margin">
                        <span class="left-info col-6">
                            RAISED: $764
                        </span>
                        <span class="rit-info text-right col-6">
                            TARGET: $1500
                        </span>
                    </div> -->
                        <div class="caus-detail">
                            <h4><?php echo $recent_cause->post_title; ?></h4>
                            <p><?php $result = substr($recent_cause->post_content, 0, 125);
                                echo strip_tags($result); ?></p>
                        </div>

                        <div class="donat-btn">
                            <button class="btn btn-danger">
                                <a href="<?php echo home_url('/donation') ?>">
                                    <i class="fas fa-hand-holding-usd"></i> Donate
                                </a>
                            </button>
                        </div>

                    </div>

                </div>
<script >

var modal<?php echo $recent_cause->ID?> = new tingle.modal({
    footer: true,
    stickyFooter: false,
    closeMethods: ['overlay', 'button', 'escape'],
    closeLabel: "Close",
    cssClass: ['custom-class-1', 'custom-class-2'],
    onOpen: function() {
        console.log('modal open');
    },
    onClose: function() {
        console.log('modal closed');
    },
    beforeClose: function() {
        // here's goes some logic
        // e.g. save content before closing the modal
        return true; // close the modal
        return false; // nothing happens
    }
});

// set content
modal<?php echo $recent_cause->ID?>.setContent(`<?php echo $recent_cause->post_content ?>`);

modal<?php echo $recent_cause->ID?>.open();

// close modal
modal<?php echo $recent_cause->ID?>.close();
var card = document.querySelector('#recent_cause<?php echo $recent_cause->ID?>')


    card.addEventListener('click',()=>{
        modal<?php echo $recent_cause->ID?>.open()
    })

</script>
                <?php } ?>

            </div>
        </div>
    </section>
