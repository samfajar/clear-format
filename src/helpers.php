<?php
/**
 * Created by PhpStorm.
 * User: sam
 * Date: 03/08/17
 * Time: 23:56
 */

/**
 * Function for clear format by bulk format array search
 */
if (!function_exists('clear_fromat')) {

    /**
     * @param string $string
     * @param array $search
     * @return mixed|string
     */
    function clear_fromat($string, array $search = []) {
        return (new \Sam\ClearFormat())->input($string, $search);
    }
}