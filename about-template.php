<?php
// Template Name: About Page
get_header();
?>

<!--Hero Section-->
<section id="title">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="text">
                    <h2>About Me</h2>
                    <p>Hello, my name is Verna.</p>
                    <p>Technology has always been a passion of mine. As I learn more about it every day, 
                        I learn there is a much bigger world of technology than I can even imagine.</p>
                    <p>I am a born problem solver that 
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

<!--Degree Section-->
<section id="degree">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-4">
                <h3>My Degrees</h3>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card" >
                    <div class="card-body text-center">
                        <h5 class="card-title">Masters of Science in Human Computer Interaction</h5>
                        <h6 class="card-subtitle mb-2 text-muted">May 2020</h6>
                        <p class="card-text">Indiana University-Purdue University Indianapolis</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card" >
                    <div class="card-body text-center">
                        <h5 class="card-title">Bachelors of Science in Informatics</h5>
                        <h6 class="card-subtitle mb-2 text-muted">May 2019</h6>
                        <p class="card-text">Indiana University-Purdue University Indianapolis</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card" >
                    <div class="card-body text-center">
                        <h5 class="card-title">Certificate in Human Computer Interaction</h5>
                        <h6 class="card-subtitle mb-2 text-muted">May 2019</h6>
                        <p class="card-text">Indiana University-Purdue University Indianapolis</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Degree Section-->


<!--Extra Section-->
<section class="extra">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php the_field('about_wysiwig');?>
            </div>
        </div>
    </div>
</section>
<!--End Extra Section-->


<?php get_footer();?>