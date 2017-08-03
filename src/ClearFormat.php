<?php

namespace SamFajar;

/**
 * Created by PhpStorm.
 * User: sam
 * Date: 04/08/17
 * Time: 0:46
 *
 * Class ClearFormat
 * @package Sam
 */
class ClearFormat
{
    /**
     * @param $search
     * @param $string
     * @return mixed
     */
    public function input($string, array $search = [])
    {
        foreach ($search as $stringSearch) {
            $string = str_replace($stringSearch, '', $string);
        }
        return $string;
    }

    public function all()
    {

    }
}