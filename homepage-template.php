<?php
// Template Name: Home Page
get_header();
?>

<!--Hero Section-->
<section id="hero" style="background: linear-gradient(rgba(0,0,0,.8),rgba(0,0,0,.8)), 
url('<?php bloginfo('template_directory'); ?>/img/header background.jpg')no-repeat center center; 
background-size: cover ">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text">
                    <h1>Verna Schwartz</h1>
                    <p>Web Developer/UX Designer</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Hero Section-->

<!--My Work Section-->
<section id="mywork" class="spacer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>My Work</h2>
                <div class="accordion" id="accordionExample">
                    <!--Design Dropdown-->
                    <div class="card">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <div class="card-header" id="headingOne">
                                <h3 class="mb-0">Design</h3>
                                                               
                            </div>
                        </button>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body text-center">

                            <?php if (have_rows('add_new_design_project')): while(have_rows('add_new_design_project')): the_row();?>
                                <div class="col-md-6" style="float:left; margin-bottom:20px;">
                                    <div class="content card-img-top text-center">
                                        <a href="<?php the_sub_field('link'); ?>" target="_blank">
                                            <div class="content-overlay"></div>
                                            <?php $image = get_sub_field('image');?>
                                            <img class="content-image" src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>">
                                            <div class="content-details fadeIn-bottom">
                                                <h3 class="content-title"><?php the_sub_field('fade_title');?></h3>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="text-center">
                                        <a href="<?php the_sub_field('link'); ?>" class="a-black" target="_blank">
                                            <h2 class="card-text"><?php the_sub_field('title');?></h2>
                                        </a>
                                        <p class="card-text"><?php the_sub_field('text');?></p>
                                    </div>
                                </div>
                                

                                <div class="col-md-6" style="float:right; margin-bottom: 20px;">
                                    <div class="content card-img-top text-center">
                                        <a href="<?php the_sub_field('link2'); ?>" target="_blank">
                                            <div class="content-overlay"></div>
                                            <?php $image2 = get_sub_field('image2');?>
                                            <img class="content-image" src="<?php echo $image2['url'];?>" alt="<?php echo $image2['alt'];?>">
                                            <div class="content-details fadeIn-bottom">
                                                <h3 class="content-title"> <?php the_sub_field('fade_title2');?></h3>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="text-center">
                                        <a href="<?php the_sub_field('link2'); ?>" class="a-black" target="_blank">
                                            <h2 class="card-text"><?php the_sub_field('title2');?></h2>
                                        </a>
                                        <p class="card-text"><?php the_sub_field('text2');?></p>
                                    </div>
                                </div>
                                <?php endwhile; endif; ?>
                            </div>
                        </div>
                    </div>
                    <!--End Design Dropdown-->

                    <!--Development Dropdown-->
                    <div class="card">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">    
                            <div class="card-header" id="headingTwo">
                                <h3 class="mb-0">Development</h3>
                            </div>
                        </button>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body text-center">
                            <?php if (have_rows('add_new_dev_project')): while(have_rows('add_new_dev_project')): the_row();?>
                                <div class="col-md-6" style="float:left; margin-bottom: 20px;">
                                    <div class="content card-img-top text-center">
                                        <a href="<?php the_sub_field('link'); ?>" target="_blank">
                                            <div class="content-overlay"></div>
                                            <?php $image = get_sub_field('image');?>
                                            <img class="content-image" src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>">
                                            <div class="content-details fadeIn-bottom">
                                                <h3 class="content-title"><?php the_sub_field('fade_title');?></h3> 
                                            </div>
                                        </a>
                                    </div>
                                    <div class="text-center">
                                        <a href="<?php the_sub_field('link'); ?>" class="a-black" target="_blank">
                                            <h2 class="card-text"><?php the_sub_field('title');?></h2>
                                        </a>
                                        <p class="card-text"><?php the_sub_field('text');?></p>
                                    </div>
                                </div>

                                <div class="col-md-6" style="float:right; margin-bottom: 20px;">
                                    <div class="content card-img-top text-center">
                                        <a href="<?php the_sub_field('link2'); ?>" target="_blank">
                                            <div class="content-overlay"></div>
                                            <?php $image2 = get_sub_field('image2');?>
                                            <img class="content-image" src="<?php echo $image2['url'];?>" alt="<?php echo $image2['alt'];?>">
                                            <div class="content-details fadeIn-bottom">
                                                <h3 class="content-title"><?php the_sub_field('fade_title2');?></h3> 
                                            </div>
                                        </a>
                                    </div>
                                    <div class="text-center">
                                        <a class="a-black" href="<?php the_sub_field('link2'); ?>" target="_blank">
                                            <h2 class="card-text"><?php the_sub_field('title2');?></h2>
                                        </a>
                                        <p class="card-text"><?php the_sub_field('text2');?></p>
                                    </div>
                                </div>
                                <?php endwhile; endif; ?>
                            </div>
                        </div>
                    </div>
                    <!-- End Development Dropdown -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--End My Work Section-->


<?php get_footer();?>