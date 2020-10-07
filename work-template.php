<?php
// Template Name: Work Page
get_header();
?>


<!--Hero Section-->
<section id="title" style="background-color: #0c0c0c; padding-top: 260px;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="text">
                    <h1>Verna Schwartz</h1>
                    <h2>About Me</h2>
                    <p>Hello, my name is Verna. Technology has always been a passion of mine. As I learn more about it every day, 
                        I learn there is a much bigger world of technology than I can even imagine. I am a born problem solver that 
                        being said when I see a problem, I strive to solve it even if it doesn't affect me. With the big world of 
                        technology there are many problems to solve and I am up for the challenge!</p>
                </div>
            </div>
            <div class="col-md-6">
            <img src="<?php bloginfo('template_directory'); ?>/img/verna2.jpg" height="502.8px" width="505.05px" alt="Verna headshot">

            </div>
        </div>
    </div>
</section>
<!--End Hero Section-->

<!--Work Section-->
<section id="work" class="spacer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>My Work</h2>
            </div>
            <div class="col-md-6" >
                <div class="content" style="margin-bottom:50px;">
                    <a href="https://sprowlfuneral.com/" target="_blank">
                        <div class="content-overlay"></div>
                        <img class="content-image" src="<?php bloginfo('template_directory'); ?>/img/sprowl background.png">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title">Sprowl</h3>
                            
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
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
            <div class="col-md-6">
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
            <div class="col-md-6">
                <div class="content" style="margin-bottom:50px;">
                    <a href="https://faculty.medicine.iu.edu/relocation/" target="_blank">
                        <div class="content-overlay"></div>
                        <img class="content-image" src="<?php bloginfo('template_directory'); ?>/img/SOM background.png">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title">Relocation Services IU School of Medicine</h3>
                        </div>
                    </a>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="content" style="margin-bottom:50px;">
                    <a href="https://verna.hatchetmarketing.com/bulletin.html" target="_blank">
                        <div class="content-overlay"></div>
                        <img class="content-image" src="<?php bloginfo('template_directory'); ?>/img/user dashboard.PNG">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title">Bulletin Board Wireframes</h3>
                        </div>
                    </a>
                </div>
            </div> 

        </div>
    </div>
</section>
<!--End Work Section-->

<!--Skills Section-->
<section id="skills"  style="background: linear-gradient(rgba(0,0,0,.8),rgba(0,0,0,.7)), url('<?php bloginfo('template_directory'); ?>/img/computercode.jpg') no-repeat center center;
background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>My Skills</h2>
            </div>
            <div class="col-md-3" style="text-align:center;">
                <p>PHP</p>
            </div>
            <div class="col-md-3" style="text-align:center;">
                <p>MYSQL</p>
            </div>
            <div class="col-md-3" style="text-align:center;">
                <p>JAVASCRIPT</p>
            </div>
            <div class="col-md-3" style="text-align:center;">
                <p>CSS</p>
            </div>
            <div class="col-md-3" style="text-align:center;">
                <p>SASS</p>
            </div>
            <div class="col-md-3" style="text-align:center;">
                <p>WordPress</p>
            </div>
            <div class="col-md-3" style="text-align:center;">
                <p>Bootstrap</p>
            </div>
            <div class="col-md-3" style="text-align:center;">
                <p>Github</p>
            </div>
            <div class="col-md-3" style="text-align:center;">
                <p>Adobe XD</p>
            </div>
            <div class="col-md-3" style="text-align:center;">
                <p>CSS Grid</p>
            </div>
            <div class="col-md-3" style="text-align:center;">
                <p>Prototyping</p>
            </div>
            <div class="col-md-3" style="text-align:center;">
                <p>Wireframing</p>
            </div>
        </div>
    </div>
</section>
<!--End Skills Section-->



<?php get_footer();?>