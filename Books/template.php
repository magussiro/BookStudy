<?php
/**
 * Created by PhpStorm.
 * User: Magus
 * Date: 2017/4/9
 * Time: 下午10:07
 */
ini_set("display_errors", 1);
require "../BookImp/bootstrap.php";
use \Magus\BookStudy\BookContainer;

/**
 * Class BookExecute
 * Step 1 ：找出你最想问这本书的一个问题
 * 请你下载这个 A4 模版，每次读书的时候，就写上
 * 书名
 * 你最想要在书中得到的一个解答
 * 你提出这个问题的动机
 *
 * Step 2 ：限时 30 分钟快速摘出 16 个关键字
 * 然后开始「快速读书」
 * 我指的「快速读书」是指开始快速翻阅这本书，看到你认为「最相关的关键字、段落」就记进去
 * 总共有 16 格，填下你观察到的关键字
 * 记得读书时，旁边放一个计时器，严格限制最多只能读 30 分钟
 *
 * Step 3 ：针对这 16 个关键字，整理出 3-5 个重点
 * 看着这 16 个关键字，整理出你认为的 3-5 个重点
 * 这 16 个关键字，你会发现其实都在讲同样的几件事，而且他们可以浓缩成 3-5 个重点或一系列的动作
 *
 * Step 4 ：复述心得
 * 拿着这张 A4 笔记，马上复述给朋友听，你在这本书得到的心得。
 */
class BookTemplate extends BookContainer
{
    function main()
    {
        /**
         * 設定
         *
         */
//        $this->debug_enable =true;
        $this->echo_enable = false;
        $this->check_enable = false;

        $this->setBookName("SOFT SKILLS :: The Software Developer's Life Manual");
        $this->setMajorQuestion("如何精進自己寫程式的能力？");
        $this->setMotivation("可以到更好的工作 創造更好的產品");


//        for ($i = 0; $i < self::KEYWORD_NUM; $i++)
//            $this->setKeyword($i + 1, "123");
        /**
         * 限时 30 分钟快速摘出 16 个关键字
         */
        $keywords = [
            1 => "",
            2 => "",
            3 => "",
            4 => "",
            5 => "",
            6 => "",
            7 => "",
            8 => "",
            9 => "",
            10 => "",
            11 => "",
            12 => "",
            13 => "",
            14 => "",
            15 => "",
            16 => "",

        ];
        $this->setKeywords($keywords);
        /**
         * 针对这 16 个关键字，整理出 3-5 个重点
         */
        $keywordIndex = 1;
        $this->echoKeyword($keywordIndex);
        $points = [
            1 => "",
            2 => "",
            3 => "",
        ];
        $this->setKeyPoints($keywordIndex, $points);


        $keywordIndex = 2;
        $this->echoKeyword($keywordIndex);
        $points = [
            1 => "",
            2 => "",
            3 => "",
            4 => "",
            5 => "",
        ];
        $this->setKeyPoints($keywordIndex, $points);

        /**
         * 拿着这张 A4 笔记，马上复述给朋友听，你在这本书得到的心得。
         */
        $this->setSummary("待補");

    }


}

$book = new BookTemplate();
$book->execute();