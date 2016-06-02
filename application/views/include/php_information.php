<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/30
 * Time: 10:45
 */
?>

<!-- Header
   ================================================== -->
<header id="nav-bar" class="container">
    <div class="row">
        <div class="span12">
            <div id="header-container">
                <a id="backbutton" class="win-backbutton" href="./hub.html"></a>
                <h5>BootMetro</h5>
                <div class="dropdown">
                    <a class="header-dropdown dropdown-toggle accent-color" data-toggle="dropdown" href="#" >
                        Wizard
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="./metro-layouts.html">Metro Layouts</a></li>
                        <li><a href="./hub.html">Hub</a></li>
                        <li><a href="./tiles-templates.html">Tile Templates</a></li>
                        <li><a href="./listviews.html">ListViews</a></li>
                        <li><a href="./appbar-demo.html">App-Bar Demo</a></li>
                        <li><a href="./table.html">Table Demo</a></li>
                        <li><a href="./wizard.html">Wizard</a></li>
                        <li><a href="./icons.html">Icons</a></li>
                        <li><a href="./toast.html">Toast Notifications</a></li>
                        <li><a href="./pivot.html">Pivot</a></li>
                        <li><a href="./metro-components.html">Metro Components</a></li>
                        <li class="divider"></li>
                        <li><a href="./scaffolding.html">Bootstrap Scaffolding</a></li>
                        <li><a href="./base-css.html">Bootstrap Base CSS</a></li>
                        <li><a href="./components.html">Bootstrap Components</a></li>
                        <li><a href="./javascript.html">Bootstrap Javascript</a></li>
                        <li class="divider"></li>
                        <li><a href="./index.html">Home</a></li>
                    </ul>
                </div>
            </div>
            <div id="top-info" class="pull-right">
                <a id="settings" href="#" class="win-command pull-right">
                    <span class="win-commandicon win-commandring icon-settings"></span>
                </a>
            </div>
        </div>
    </div>
</header>

<div class="container">
<div class="row wizard">
    <div class="span3">
        <div id="wizard-steps-container">
            <h2>phpinfo</h2>

            <ul id="wizard-steps">
                <li>
                    <a>phpinfo</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="span9">
        <section id="wizard-step-content">
            <?php echo $info; ?>
        </section>
    </div>
</div>
</div>

<footer class="win-ui-dark win-commandlayout navbar-fixed-bottom">
    <div class="container">
        <div class="row">
            <div class="span12 align-right">

                <button class="win-command">
                    <span class="win-commandimage win-commandring">&#xe1cd;</span>
                    <span class="win-label">Previous</span>
                </button>

                <button class="win-command">
                    <span class="win-commandimage win-commandring">&#xe1ca;</span>
                    <span class="win-label">Next</span>
                </button>

            </div>

        </div>
    </div>
</footer>
