
    <!-- ******************** Upcomming Events Starts Here ******************* --> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tingle/0.8.4/tingle.css" integrity="sha512-ZKliQ0+hD8CfDJ2v8kzEzNxT5Y4EnmG5cFV6oFvswCDyckUCRG+1p6nyMMlLgi1vM5srVpX+6YkxiUoF2tOfRw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    
    <script  src="https://cdnjs.cloudflare.com/ajax/libs/tingle/0.8.4/tingle.min.js" integrity="sha512-SxopZNPB/jzFpgtGdR6lI7dK8EbbheOZVLNDI0FsMNM0NAqNkJyVoT83C72esOJCTdPVfDb8miZ3whsW4o/+fA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <section class="upcomming container-flid">
        <div class="container">
            <div class="session-title row">
                <p>KNOW AND COME TO JOIN OUR</p>
                <h2>OUR DONERS</h2>
            </div>
            <div class="events-row row">

<?php foreach ($donors as $donor) { ?>
                <div class="col-md-4" data-custom-open>
                    <div class="event-card" id="donor<?php echo $donor->ID ?>">
                    <?php $src = wp_get_attachment_image_src(get_post_thumbnail_id($donor->ID), 'thumbnail_size'); ?>
                        <img src="<?php echo $src[0] ?>" alt="">
                        <div class="event-detail">
                            <h4><?php echo $donor->post_title; ?></h4>
                            <p><?php $result = substr($donor->post_content, 0, 125); echo strip_tags($result); ?></p>
                                Read More <i class="fas fa-arrow-right"></i>
                            
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
                
<script >

var modal<?php echo $donor->ID?> = new tingle.modal({
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
modal<?php echo $donor->ID?>.setContent(`<?php echo $donor->post_content ?>`);

modal<?php echo $donor->ID?>.open();

// close modal
modal<?php echo $donor->ID?>.close();
var card = document.querySelector('#donor<?php echo $donor->ID?>')


    card.addEventListener('click',()=>{
        modal<?php echo $donor->ID?>.open()
    })

</script>
                <?php } ?>

            </div>
        </div>
    </section>
