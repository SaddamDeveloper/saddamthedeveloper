<?php require APPROOT . './views/inc/header.php' ?>
        <div class="theme-options dark">
            <div class="toggle-btn">
                <span><i class="fas fa-cog"></i></span>
            </div>
            <div class="theme-menu">
                <div class="page-transitions">
                    <h4>Page Animation</h4>
                    <select class="demo-select form-control" id="anim-type">
                        <option>Choose</option>
                        <option value="0">Random</option>
                    </select>
                </div>
                <div class="theme-color">
                    <h4 class="mt-20">Colors</h4>
                    <ul>
                        <li><a href="<?php echo URLROOT ?>/css/blue-color.css" style="background-color: #00A3E1;;"></a></li>
                        <li><a href="<?php echo URLROOT ?>/css/red-color.css" style="background-color: #E82A2A;"></a></li>
                        <li><a href="<?php echo URLROOT ?>/css/green-color.css" style="background-color: #6ac045;"></a></li>
                        <li><a href="<?php echo URLROOT ?>/css/yellow-color.css" style="background-color: #D1A71D;"></a></li>
                        <li><a href="<?php echo URLROOT ?>/css/pink-color.css" style="background-color: #FF1493;"></a></li>
                        <li><a href="<?php echo URLROOT ?>/css/purple-color.css" style="background-color: #5078FF;"></a></li>
                    </ul>
                </div>
            </div>
        </div>


        <!--Preloader Start-->
        <div class="preloader">
            <div class="loader">
                <!--Your Name-->
                <h4><?php echo APPNAME; ?></h4>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <!--Preloader End-->

        <div id="page">
            <?php require APPROOT . './views/inc/sidebar.php' ?>
             <?php require APPROOT . './views/inc/sidebar-content.php' ?>  
        </div>

        <!--Ajax Portfolio Container Start-->
        <div class="ajax-portfolio-popup" data-simplebar>
            <span class="ajax-loader"></span>
            <div class="navigation-wrap">
                <span class="popup-close"><i class="fas fa-times-circle"></i></span>
            </div>
            <div class="content-wrap">
                <div class="popup-content"></div>
            </div>
        </div>
        <!--Ajax Portfolio Container End-->




<?php require APPROOT . '/views/inc/footer.php' ?>
