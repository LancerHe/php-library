<?php
namespace LancerHe\Library\Algorithm;

/**
 * Class Unique
 *
 * @package LancerHe\Library\Algorithm
 * @author  Lancer He <lancer.he@gmail.com>
 */
class Unique {
    /**
     * 返回全局唯一标识符GUID
     *
     * @access public
     * @static
     *
     * @return string
     */
    public static function guid() {
        mt_srand((double)microtime() * 10000);//optional for php 4.2.0 and up.
        $charId = strtoupper(md5(uniqid(rand(), true)));
        $hyphen = chr(45);// "-"
        $uuid   = substr($charId, 0, 8) . $hyphen
            . substr($charId, 8, 4) . $hyphen
            . substr($charId, 12, 4) . $hyphen
            . substr($charId, 16, 4) . $hyphen
            . substr($charId, 20, 12);
        return $uuid;
    }
}