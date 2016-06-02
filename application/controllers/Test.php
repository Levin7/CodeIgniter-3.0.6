<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/31
 * Time: 14:55
 */
class Test extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function keyword()
    {
        $this->load->view('KeywordTest');
    }

    public function cli_test()
    {
        if(is_cli()){
            echo "hello!!!".PHP_EOL;
        }else{
            exit("error");
        }
    }

    public function test()
    {
        $this->load->view('test');
    }
}