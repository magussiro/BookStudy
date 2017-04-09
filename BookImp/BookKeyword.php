<?php
/**
 * Created by PhpStorm.
 * User: Magus
 * Date: 2017/4/9
 * Time: 下午10:01
 */

namespace Magus\BookStudy;


class BookKeyword
{
    var $index;
    private $points = [];
    private $keyword;

    function __construct($index)
    {
        $this->index = $index;
    }

    /**
     * @return mixed
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * @param mixed $keyword
     */
    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;
    }

    /**
     * @return array
     */
    public function getPoints()
    {
        return $this->points;
    }

    function initPoint($index)
    {
        $point = new BookPoint();
        $point->setIndex($index);
        array_push($this->points, $point);
    }

    public function addPoint($index, BookPoint $point)
    {
        if ($index > 3) {
            $point->setIndex(sizeof($this->points)+1);
            array_push($this->points, $point);
            return;
        } else {
            $this->points[$index - 1] = $point;
            return;
        }

    }


}
