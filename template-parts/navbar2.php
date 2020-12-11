<div class="main">
    <!-- Standard Bootstrap Navigation -->
    <nav class="navbar2 navbar-expand sticky-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php
                        wp_nav_menu([
                            'menu'            => 'secondary',
                            'container'       => 'div',
                            'container_id'    => 'bs4navbar',
                            'container_class' => 'collapse navbar-collapse',
                            'menu_id'         => false,
                            'menu_class'      => 'navbar-nav',
                            'depth'           => 2,
                            'fallback_cb'     => 'bs4navwalker::fallback',
                            'walker'          => new bs4navwalker()
                        ]);
                    ?>
                </div>
            </div>   
        </div>
    </nav>
