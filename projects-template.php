
<?php
// Template Name: Projects Template
get_header();
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 1200, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>

<!--Page Title-->
<?php get_template_part('template-parts/page-title'); ?>
<!--End Page Title-->

<!--Secondary nav-->
<?php get_template_part('template-parts/navbar2'); ?>
<!--End Secondary nav-->

    <!--About Section-->
    <?php
    $about = get_field('about');
    if( $about ): ?>
    <section id="about" class="mb-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 style="margin-bottom:40px;"><?php echo $about['title']; ?> </h3>
                    <?php echo $about['content']; ?> 
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <!--End About Section-->

    <!--Details Section-->
    <section id="details" class="mb-4 mt-5">
        <div class="container">
            <div class="col-md-12">
                <h3><?php the_field('details_title');?></h3>
            </div>
            <?php if (have_rows('add_new_row')): while(have_rows('add_new_row')): the_row();?>
                <div class="row my-5">
                    <div class="col-md-6 details-image">
                        <?php $image = get_sub_field('image');?>
                        <img class="img-fluid" src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>">
                    </div>
                    <div class="col-md-6">
                        <h4><?php the_sub_field('title');?></h4>
                        <p style="line-height:30px;"><?php the_sub_field('text');?></p>
                    </div>
                </div>
            <?php endwhile; endif; ?>
        </div>
    </section>
    <!--End Details Section-->
        
    <!--Prototype/other Section-->
    <section id="other" class="spacer">
        <div class="container">
            <div class="col-md-12 text-center">
                <?php the_field('other_wysiwig');?>
            </div>
        </div>
    </section>
    <!--End Prototype/other Section-->
</div>
<?php get_footer();?>