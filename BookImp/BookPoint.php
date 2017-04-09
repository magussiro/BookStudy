<?php
/**
 * Created by PhpStorm.
 * User: Magus
 * Date: 2017/4/9
 * Time: 下午10:00
 */

namespace Magus\BookStudy;


class BookPoint
{

    var $index;
    private $point;

    function __construct()
    {
    }

    /**
     * @return mixed
     */
    function getIndex()
    {
        return $this->index;
    }

    /**
     * @param mixed $index
     */
    function setIndex($index)
    {
        $this->index = $index;
    }


    /**
     * @return mixed
     */
    public function getPoint()
    {
        return $this->point;
    }

    /**
     * @param mixed $point
     */
    public function setPoint($point)
    {
        $this->point = $point;
    }


}
