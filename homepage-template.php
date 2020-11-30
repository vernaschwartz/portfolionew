<?php
// Template Name: Home Page
get_header();
?>

<!--Hero Section-->
<section id="hero" style=" background: linear-gradient(rgba(0,0,0,.8),rgba(0,0,0,.8)), 
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
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body text-center">
                                <div class="col-md-6"style="float:left; margin-bottom: 20px;">
                                    <div class="content card-img-top text-center">
                                        <a href="<?php echo esc_url( home_url('/')); ?>/" target="_blank">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="<?php bloginfo('template_directory'); ?>/img/main page jag study.PNG">
                                            <div class="content-details fadeIn-bottom">
                                                <h3 class="content-title">Jag Study</h3>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="text-center">
                                        <a href="<?php echo esc_url( home_url('/')); ?>/" class="a-black" target="_blank">
                                            <h2 class="card-text">Jag Study</h2>
                                        </a>
                                        <p class="card-text">An IUPUI Library Room Reservation System redesign.</p>
                                    </div>
                                </div>
                                <div class="col-md-6" style="float:right; margin-bottom: 20px;">
                                    <div class="content card-img-top text-center">
                                        <a href="<?php echo esc_url( home_url('/')); ?>/" target="_blank">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="<?php bloginfo('template_directory'); ?>/img/user dashboard.PNG">
                                            <div class="content-details fadeIn-bottom">
                                                <h3 class="content-title">User Dashboard</h3>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="text-center">
                                        <a href="<?php echo esc_url( home_url('/')); ?>/" class="a-black" target="_blank">
                                            <h2 class="card-text">User Dashboard</h2>
                                        </a>
                                        <p class="card-text">A Homebase Digital Message Center redesign of the 2008 Audiovox.</p>
                                    </div>
                                </div>
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
                                <div class="col-md-6" style="float:left; margin-bottom: 20px;">
                                    <div class="content card-img-top text-center">
                                        <a href="https://www.apluswindowcoverings.com/" target="_blank">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="<?php bloginfo('template_directory'); ?>/img/aplusbackground.png">
                                            <div class="content-details fadeIn-bottom">
                                                <h3 class="content-title">A+ Blinds</h3> 
                                            </div>
                                        </a>
                                    </div>
                                    <div class="text-center">
                                        <a href="https://www.apluswindowcoverings.com/" class="a-black" target="_blank">
                                            <h2 class="card-text">A+ Blinds</h2>
                                        </a>
                                        <p class="card-text">Brand new website built with WordPress.</p>
                                    </div>
                                </div>

                                <div class="col-md-6" style="float:right; margin-bottom: 20px;">
                                    <div class="content card-img-top text-center">
                                        <a href="https://get-thrive.com/" target="_blank">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="<?php bloginfo('template_directory'); ?>/img/thrive.PNG">
                                            <div class="content-details fadeIn-bottom">
                                                <h3 class="content-title">Thrive</h3> 
                                            </div>
                                        </a>
                                    </div>
                                    <div class="text-center">
                                        <a class="a-black" href="https://get-thrive.com/" target="_blank">
                                            <h2 class="card-text">Thrive Security</h2>
                                        </a>
                                        <p class="card-text">Brand new website built with WordPress.</p>
                                    </div>
                                </div>

                                <div class="col-md-6" style="float:left; margin-bottom: 20px;">
                                    <div class="content card-img-top text-center">
                                        <a href="https://faculty.medicine.iu.edu/relocation/" target="_blank">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="<?php bloginfo('template_directory'); ?>/img/SOM background.png">
                                            <div class="content-details fadeIn-bottom">
                                                <h3 class="content-title">Relocation Services IU School of Medicine</h3> 
                                            </div>
                                        </a>
                                    </div>
                                    <div class="text-center">
                                        <a class="a-black" href="https://faculty.medicine.iu.edu/relocation/" target="_blank">
                                            <h2 class="card-text">Relocation Services IU School of Medicine</h2>
                                        </a>
                                            <p class="card-text">Brand new website built with WordPress.</p>
                                    </div>
                                </div>
                                
                                <div class="col-md-6" style="float:right; margin-bottom: 20px;">
                                    <div class="content card-img-top text-center">
                                        <a href="<?php echo esc_url( home_url('/')); ?>/" target="_blank">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="<?php bloginfo('template_directory'); ?>/img/sprowl background.png">
                                            <div class="content-details fadeIn-bottom">
                                                <h3 class="content-title">Sprowl Funeral Home</h3> 
                                            </div>
                                        </a>
                                    </div>
                                    <div class="text-center">
                                        <a class="a-black" href="<?php echo esc_url( home_url('/')); ?>/" target="_blank">
                                            <h2 class="card-text">Sprowl Funeral Home</h2>
                                        </a>
                                        <p class="card-text">Brand new website built with WordPress.</p>
                                    </div>
                                </div>
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