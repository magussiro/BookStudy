<?php
/**
 * Created by PhpStorm.
 * User: Magus
 * Date: 2017/4/9
 * Time: 下午8:53
 */


namespace Magus\BookStudy;
/**
 * Class Container
 * @package Magus\BookStudy
 *
 *
 */
ini_set("display_errors", 1);

require "BookKeyword.php";
require "BookPoint.php";


abstract class BookContainer
{
    private $bookName;
    private $majorQuestion;
    private $motivation;
    private $keyWords = [];
    private $summary;
    const KEYWORD_NUM = 16;
    const MIN_POINT_NUM = 3;
    const MAX_POINT_NUM = 5;
    const LIMIT_TIME = 30 * 60;
    protected $debug_enable = false;
    protected $echo_enable = true;
    protected $check_enable = true;

//需要特性：直必須填入 否則編譯錯誤

    function __construct()
    {
        for ($i = 1; $i <= self::KEYWORD_NUM; $i++) {
            $keyword = new BookKeyword($i);
            for ($j = 1; $j <= self::MIN_POINT_NUM; $j++)
                $keyword->initPoint($j);
            array_push($this->keyWords, $keyword);
        }
    }

    /**
     * @param mixed $bookName
     */
    public function setBookName($bookName)
    {
        $this->bookName = $bookName;
    }

    /**
     * @param mixed $majorQuestion
     */
    public function setMajorQuestion($majorQuestion)
    {
        $this->majorQuestion = $majorQuestion;
    }

    /**
     * @param mixed $motivation
     */
    public function setMotivation($motivation)
    {
        $this->motivation = $motivation;
    }

    /**
     * @param mixed $summary
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;
    }


    /**
     * @return array
     */
    public function getKeyWords()
    {
        return $this->keyWords;
    }

    public function getKeyword($index)
    {
        return $this->keyWords[$index - 1];
    }

    public function echoKeyword($index)
    {
        if ($this->echo_enable)
            echo $this->keyWords[$index - 1]->getKeyword() . "<BR>";

    }

    public function setKeyPoints($keywordIndex, $points)
    {

        foreach ($points as $pointIndex => $pointString) {

            $this->incKeyPoint($keywordIndex, $pointIndex, $pointString);
        }


    }


    private function incKeyPoint($keywordIndex, $pointIndex, $pointString)
    {

        $point = new BookPoint();
        $point->setIndex($pointIndex);
        $point->setPoint($pointString);
        $this->setPoint($keywordIndex, $point);
    }

    private function setKeyword($index, $keyword)
    {
        $this->keyWords[$index - 1]->setKeyword($keyword);
//        var_dump($this->keyWords[$index - 1]->getKeyword());
//        die;
    }

    public function setKeywords($keywords)
    {
        foreach ($keywords as $keyIndex => $keyword) {

            $this->setKeyword($keyIndex, $keyword);
        }

    }

    private function setPoint($keywordIndex, BookPoint $point)
    {
        $this->keyWords[$keywordIndex - 1]->addPoint($point->getIndex(), $point);
    }


    function checkAllDone()
    {
        if (!isset($this->bookName)) {
            echo "沒有填書名!<BR>";
//            return;
        }
        if (!isset($this->majorQuestion)) {
            echo "沒有填主要問題!<BR>";
//            return;
        }
        if (!isset($this->motivation)) {
            echo "沒有填主要動機!<BR>";
//            return;
        }
        if (!isset($this->summary)) {
            echo "沒有填總結！<BR>";
//            return;
        }

        foreach ($this->keyWords as $keyWord) {

            if (!$keyWord->getKeyword())
                echo "沒有填重點！在第" . $keyWord->index . "重點！<BR>";
            $points = $keyWord->getPoints();


            foreach ($points as $point) {
                if (!$point->getPoint()) {
                    echo "重點沒填完！在第" . $keyWord->index . "關鍵字的第" . $point->index . "個重點！<BR>";

                }


            }


        }

    }

    abstract function main();

    public function execute()
    {
        $this->main();
        if ($this->debug_enable)
            $this->dump();
        if ($this->check_enable)
            $this->checkAllDone();

    }

    public function echoResult()
    {
        $this->echoPre("<H1>書名:" . $this->bookName);
        $this->echoPre("<H1>主要問題:" . $this->majorQuestion);
        $this->echoPre("<H1>動機:" . $this->motivation);

        foreach ($this->keyWords as $keyWord) {
            $this->echoPre("<H4>關鍵" . $keyWord->index . ":" . $keyWord->getKeyword());
            foreach ($keyWord->getPoints() as $point) {
                $this->echoPre("重點" . $point->index . ":" . $point->getPoint());

            }


        }

        for ($i = 1; $i <= self::KEYWORD_NUM; $i++) {


        }
//            var_dump($this->getKeyword($i));
        $this->echoPre("<H2>結論:" . $this->summary);


    }

    public function echoPre($value)
    {

        echo "<pre>$value</pre>";


    }

    function dump()
    {
        var_dump("bookName:", $this->bookName);
        var_dump("majorQuestion:", $this->majorQuestion);
        var_dump("motivation:", $this->motivation);
        var_dump("summary:", $this->summary);
        for ($i = 1; $i <= self::KEYWORD_NUM; $i++)
            var_dump($this->getKeyword($i));
    }


}



