<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/12
 * Time: 11:04
 */
class Index extends CI_Controller{
    
    function __construct(){
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('index');
    }

    public function the_php_info()
    {
        //$view['info'] = phpinfo();
        //$this->load->view('php_information');
        phpinfo();
    }

    public function test()
    {
        $this->testXdebug();
}

public function testXdebug() {
    $this->requireFile();
}
public function requireFile() {
    require_once('abc.php');
}

}