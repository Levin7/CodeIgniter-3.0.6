<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/31
 * Time: 14:56
 */
$this->load->view('include/header')
?>
    <form action="http://seoltw.work.83830.com/api.php?c=keyword&m=ajaxAdd" method="get">
        <input type="hidden" name="channel" value="10003" />
        <input type="hidden" name="keyword" value="VR跳舞,VRMV,VR岛国" />
        <input type="submit" />
    </form>
<?php
    $this->load->view("include/footer")
?>