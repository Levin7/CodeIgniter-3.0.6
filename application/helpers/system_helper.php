<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/6/1
 * Time: 22:37
 */

/**
 * 自动识别返回json格式还是jsonp格式
 *
 * @param array $data  【约定规范】成功时:array('success'=>true, data_1=>... data_2=>... data_n=>...)，失败时:array('success'=>false,'code'=>数字,'debug'=>...,'msg'=>...)
 * @param unknown_type $gzcompress
 */
function json_maker($data) {

    //外网环境强制不显示debug信息
    if(isset($data['debug']) && is_production_env()){
        unset($data['debug']);
    }

    $json_data = json_encode ( $data );

    $CI = & get_instance ();
    $callback = get_post ( 'callback' );
    if ($callback) {
        return $callback . "(" . $json_data . ")";
    } else {
        $gzcompress = $CI->input->get_post ( 'gzcompress' );
        if ($gzcompress) {
            @header('gzcompress: yes');
            return gzcompress ( $json_data ); //大数据用gzcompress压缩下，效果还是非常明显的。
        } else {
            return $json_data;
        }
    }
}

//$_GET $_POST $_COOKIE相关取值函数
function get($index, $xss_clean = false) {
    $CI = & get_instance ();
    return $CI->input->get ( $index, $xss_clean );
}
function post($index, $xss_clean = false) {
    $CI = & get_instance ();
    return $CI->input->post ( $index, $xss_clean );
}
function get_post($index, $xss_clean = false) {
    $CI = & get_instance ();
    return $CI->input->get_post ( $index, $xss_clean );
}
function cookie($index, $xss_clean = false) {
    $CI = & get_instance ();
    return $CI->input->cookie ( $index, $xss_clean );
}