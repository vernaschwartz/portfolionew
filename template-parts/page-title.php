<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
<section id="page-title" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center" style="margin:auto;">
                <h1><?php the_title();?></h1>
                <?php the_field('page_title_text');?>
            </div>
            <div class="col-md-6 text-center">
                <img style="max-width:100%;" src="<?php echo $thumb[0]; ?>" alt="">
            </div>
        </div>
    </div>
</section>