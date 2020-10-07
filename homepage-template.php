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
<section id="mywork" class="spacer" >
    <div class="container" >
        <div class="row">
            <div class="col-md-12">
                <h2>My Work</h2>
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Design Work
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="col-md-6">
                                    <div class="content" style="margin-bottom:50px; text-align:center;">
                                        <a href="<?php echo esc_url( home_url('/')); ?>/" target="_blank">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="<?php bloginfo('template_directory'); ?>/img/main page jag study.PNG">
                                            <div class="content-details fadeIn-bottom">
                                                <h3 class="content-title">Jag Study</h3>
                                            </div>
                                        </a>
                                    </div>
                                </div> 
                                <div class="col-md-6">
                                    <div class="content" style="margin-bottom:50px; text-align:center;">
                                        <a href="<?php echo esc_url( home_url('/')); ?>/" target="_blank">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="<?php bloginfo('template_directory'); ?>/img/user dashboard.PNG">
                                            <div class="content-details fadeIn-bottom">
                                                <h3 class="content-title">User Dashboard</h3>
                                            </div>
                                        </a>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Development Work
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="col-md-6" >
                                        <div class="content" style="margin-bottom:50px;">
                                            <a href="https://www.apluswindowcoverings.com/" target="_blank">
                                                <div class="content-overlay"></div>
                                                <img class="content-image" src="<?php bloginfo('template_directory'); ?>/img/aplusbackground.png">
                                                <div class="content-details fadeIn-bottom">
                                                    <h3 class="content-title">A+ Blinds</h3> 
                                                </div>
                                            </a>
                                        </div>
                                    </div> 
                                </div>
                                <div class="col-md-6 ">
                                    <div class="content" style="margin-bottom:50px;">
                                        <a href="https://get-thrive.com/" target="_blank">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="<?php bloginfo('template_directory'); ?>/img/thrive.PNG">
                                            <div class="content-details fadeIn-bottom">
                                                <h3 class="content-title">Thrive Security</h3>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 design" >
                                    <div class="content" style="margin-bottom:50px;">
                                        <a href="<?php echo esc_url( home_url('/')); ?>/" target="_blank">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="<?php bloginfo('template_directory'); ?>/img/SOM background.png">
                                            <div class="content-details fadeIn-bottom">
                                                <h3 class="content-title">Relocation Services IU School of Medicine</h3>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <div class="content" style="margin-bottom:50px; ">
                                        <a href="" target="_blank">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="<?php bloginfo('template_directory'); ?>/img/sprowl background.png">
                                            <div class="content-details fadeIn-bottom">
                                                <h3 class="content-title">Sprowl Funeral Home</h3>
                                            </div>
                                        </a>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
                

                <!-- <div class="col-md-6 design" >
                    <div class="content" style="margin-bottom:50px;">
                        <a href="<?php echo esc_url( home_url('/')); ?>/" target="_blank">
                            <div class="content-overlay"></div>
                            <img class="content-image" src="<?php bloginfo('template_directory'); ?>/img/SOM background.png">
                            <div class="content-details fadeIn-bottom">
                                <h3 class="content-title">Relocation Services IU School of Medicine</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="content" style="margin-bottom:250px; float: left;">
                        <p>Some Text</p>
                        <a href="">Learn More</a>
                    </div>
                </div>
                
                <div class="col-md-6 design" >
                    <div class="content" style="margin-bottom:50px; text-align:center;">
                        <a href="<?php echo esc_url( home_url('/')); ?>/endress" target="_blank">
                            <div class="content-overlay"></div>
                            <img class="content-image" src="<?php bloginfo('template_directory'); ?>/img/user dashboard.PNG">
                            <div class="content-details fadeIn-bottom">
                                <h3 class="content-title">Endress + Hauser</h3>
                            </div>
                        </a>
                    </div>
                </div> 
                <div class="col-md-6">
                    <div class="content" style="margin-bottom:250px; float: left;">
                        <p>Some Text</p>
                        <a href="">Learn More</a>
                    </div>
                </div>

                <div class="col-md-6 design" >
                    <div class="content" style="margin-bottom:50px; text-align:center;">
                        <a href="" target="_blank">
                            <div class="content-overlay"></div>
                            <img class="content-image" src="<?php bloginfo('template_directory'); ?>/img/user dashboard.PNG">
                            <div class="content-details fadeIn-bottom">
                                <h3 class="content-title">IUPUI Library</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="content" style="margin-bottom:250px; float: left;">
                        <p>Some Text</p>
                        <a href="">Learn More</a>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</section>
<!--End My Work Section-->


<?php get_footer();?>