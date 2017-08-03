<?php
/**
 * Created by PhpStorm.
 * User: sam
 * Date: 04/08/17
 * Time: 0:20
 */
trait Clearable {

    /**
     * Clearable constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->transform(request()->all());
    }

    /**
     * Function that can be overridden to manipulate the input data before anything
     * happens with it.
     *
     * @param array $data The original data.
     * @return array The new modified data.
     */
    public function transform(array $data)
    {
        return $data;
    }

    /**
     * @param $name
     * @param $parameters
     */
    function __call($name , $parameters)
    {
        if ($name == 'transform') {
            request()->merge($parameters['data']);
        }
    }
}