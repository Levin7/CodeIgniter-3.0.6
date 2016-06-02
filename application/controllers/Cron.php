<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/6/1
 * Time: 11:23
 */
class Cron extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function cli_test()
    {
        if(is_cli()){
            echo "hello!!!".PHP_EOL;
        }else{
            exit("error");
        }
    }

    /**
     * 定时脚本运行该方法，测试写入文件
     */
    public function timing_script()
    {
        if(is_cli()) {
            $file = array(
                'name' => "timing.txt",
                'path' => "D:/wamp/www/CodeIgniter-3.0.6/application/cache/tmp",
                'data' => "当前时间" . date("Y-m-d h:i") . "。写入。" . PHP_EOL,
                'flags' => FILE_APPEND,
            );
            if (WriteFile($file)) {
                echo json_maker(array('statusCode' => 200, 'message' => '成功！'));
                exit();
            } else {
                echo json_maker(array('statusCode' => 300, 'message' => '失败'));
                exit();
            }
        }else{
            echo json_maker(array('statusCode' => 300, 'message' => '非法访问！'));
            exit();
        }
    }
}