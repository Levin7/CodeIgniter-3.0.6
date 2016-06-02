<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/30
 * Time: 10:32
 */
?>
<div id="charms" class="win-ui-dark slide">

    <div id="theme-charms-section" class="charms-section">
        <div class="charms-header">
            <a href="#" class="close-charms win-backbutton"></a>
            <h2>Settings</h2>
        </div>

        <div class="row-fluid">
            <div class="span12">

                <form class="">
                    <label for="win-theme-select">Change theme:</label>
                    <select id="win-theme-select" class="">
                        <option value="metro-ui-light">Light</option>
                        <option value="metro-ui-dark">Dark</option>
                    </select>
                </form>

            </div>
        </div>
    </div>

</div>

<script src="<?php echo STATIC_URL; ?>BootMatro/js/jquery-1.10.0.min.js"></script>

<script type="text/javascript" src="<?php echo STATIC_URL; ?>BootMatro/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo STATIC_URL; ?>BootMatro/js/bootmetro-panorama.js"></script>
<script type="text/javascript" src="<?php echo STATIC_URL; ?>BootMatro/js/bootmetro-pivot.js"></script>
<script type="text/javascript" src="<?php echo STATIC_URL; ?>BootMatro/js/bootmetro-charms.js"></script>
<script type="text/javascript" src="<?php echo STATIC_URL; ?>BootMatro/js/bootstrap-datepicker.js"></script>

<script type="text/javascript" src="<?php echo STATIC_URL; ?>BootMatro/js/jquery.mousewheel.min.js"></script>
<script type="text/javascript" src="<?php echo STATIC_URL; ?>BootMatro/js/jquery.touchSwipe.min.js"></script>

<script type="text/javascript" src="<?php echo STATIC_URL; ?>BootMatro/js/holder.js"></script>
<!--<script type="text/javascript" src="<?php echo STATIC_URL; ?>BootMatro/js/perfect-scrollbar.with-mousewheel.min.js"></script>-->
<script type="text/javascript" src="<?php echo STATIC_URL; ?>BootMatro/js/demo.js"></script>


<script type="text/javascript">

    $('.panorama').panorama({
        //nicescroll: false,
        showscrollbuttons: true,
        keyboard: true,
        parallax: true
    });

    //      $(".panorama").perfectScrollbar();

    $('#pivot').pivot();

</script>
</body>
</html>
