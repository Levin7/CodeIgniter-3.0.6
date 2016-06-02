<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/12
 * Time: 11:30
 */

$this->load->view('include/header')
?>

<div id="wrap">

    <!-- Header
    ================================================== -->
    <div id="nav-bar" class="">
        <div class="pull-left">
            <div id="header-container">
                <h5>Levin's Tool Bar</h5>
                <div class="dropdown">
                    <a class="header-dropdown dropdown-toggle accent-color" data-toggle="dropdown">
                        Tools
                    </a>
                </div>
            </div>
        </div>
        <div class="pull-right">
            <div id="top-info" class="pull-right">
                <a id="settings" href="#" class="win-command pull-right">
                    <span class="win-commandicon win-commandring icon-cog-3"></span>
                </a>
                <a id="logged-user" href="#" class="win-command pull-right">
                    <span class="win-commandicon win-commandring icon-user"></span>
                </a>
                <div class="pull-left">
                    <h3>FirstName</h3>
                    <h4>LastName</h4>
                </div>
            </div>
        </div>
    </div>

    <!--<div id="metro-container" class="-container">-->
    <!--<div class="row">-->
    <!--<div id="hub" class="metro">-->
    <div class="metro panorama">
        <div class="panorama-sections">

            <div class="panorama-section tile-span-4">

                <h2>Information</h2>

                <a class="tile app bg-color-blue" href="/index/the_php_info">
                    <div class="image-wrapper">
                        <span class="icon  icon-info-3"></span>
                    </div>
                    <div class="app-label">phpinfo</div>
<!--                    <div class="app-count">12</div>-->
                </a>


            </div>

<!--            <div class="panorama-section tile-span-4">-->
<!---->
<!--                <h2>Group two</h2>-->
<!---->
<!--                <a class="tile wide imagetext bg-color-blue" href="#">-->
<!--                    <div class="image-wrapper">-->
<!--                        <span class="icon icon-music-3"></span>-->
<!--                    </div>-->
<!--                    <div class="column-text">-->
<!--                        <div class="text">Top 10</div>-->
<!--                        <div class="text">Favorites</div>-->
<!--                        <div class="text">Best choices</div>-->
<!--                    </div>-->
<!--                    <span class="app-label">MUSIC</span>-->
<!--                </a>-->
<!---->
<!--                <a class="tile wide imagetext bg-color-blueDark" href="./base-css.html">-->
<!--                    <div class="image-wrapper">-->
<!--                        <img src="--><?php //echo STATIC_URL; ?><!--BootMatro/img/Coding app.png" />-->
<!--                    </div>-->
<!--                    <div class="column-text">-->
<!--                        <div class="text">Typography</div>-->
<!--                        <div class="text">Tables</div>-->
<!--                        <div class="text">Forms</div>-->
<!--                        <div class="text">Buttons</div>-->
<!--                    </div>-->
<!--                    <span class="app-label">BASE CSS</span>-->
<!--                </a>-->
<!---->
<!--                <a class="tile app bg-color-orange" href="#">-->
<!--                    <div class="image-wrapper">-->
<!--                        <img src="--><?php //echo STATIC_URL; ?><!--BootMatro/img/RegEdit.png" alt="" />-->
<!--                    </div>-->
<!--                    <span class="app-label">COMPONENTS</span>-->
<!--                </a>-->
<!---->
<!--                <a class="tile app bg-color-red" href="./javascript.html">-->
<!--                    <div class="image-wrapper">-->
<!--                        <img src="--><?php //echo STATIC_URL; ?><!--BootMatro/img/Devices.png" alt="" />-->
<!--                    </div>-->
<!--                    <span class="app-label">JAVASCRIPT</span>-->
<!--                </a>-->
<!---->
<!--            </div>-->

        </div>
    </div>
    <a id="panorama-scroll-prev" href="#"></a>
    <a id="panorama-scroll-next" href="#"></a>
    <div id="panorama-scroll-prev-bkg"></div>
    <div id="panorama-scroll-next-bkg"></div>
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->

</div>
<?php
    $this->load->view("include/footer")
?>

