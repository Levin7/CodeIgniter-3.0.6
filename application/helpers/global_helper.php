<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/6/1
 * Time: 16:01
 */

/**
 * 写文件
 * @param array $file
 * ['name'] 文件名
 * ['path'] 文件路径
 * ['data'] 写入数据
 * ['flags']见file_put_contents的flags参数
 *
 * @return mixed 返回字节数或者失败为false
 */
function WriteFile($file){
    $file['path'] = empty($file['path']) ? APP_URL."cache/tmp" : $file['path'];
    $file['flags'] = empty($file['flags']) ? FILE_USE_INCLUDE_PATH : $file['flags'];

    if(!is_dir($file['path'])){
        mkdir($file['path'], 0777, true);
    }
    $byte = file_put_contents($file['path'].'/'.$file['name'], $file['data'], $file['flags']);
    return $byte;
}
