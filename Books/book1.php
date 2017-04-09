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
class BookExecute extends BookContainer
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
        $this->setMotivation("可以找到更好的工作 創造更好的產品");


//        for ($i = 0; $i < self::KEYWORD_NUM; $i++)
//            $this->setKeyword($i + 1, "123");
        /**
         * 限时 30 分钟快速摘出 16 个关键字
         */
        $keywords = [
            1 => "思考未來：你的目標是什麼？P10",
            2 => "成為專業人士：P42",
            3 => "十步學習法：P130",
            4 => "尋找導師：找出你的尤達：P145",
            5 => "一切始於專注：P167",
            6 => "對自己負責:P187",
            7 => "職業倦怠的解藥：P195",
            8 => "時間怎麼被浪費掉的：P200",
            9 => "形成慣例的重要性：P205",
            10 => "培養習慣：刷新你的代碼：P209",
            11 => "分解任務：如何吃掉一頭大象：P214",
            12 => "努力工作的價值：P219",
            13 => "心靈如何影響身體：P321",
            14 => "擁有正確的心態：重新啟動：P325",
            15 => "規劃你的大腦：P330",
            16 => "積極面對失敗：P344",
        ];
        $this->setKeywords($keywords);
        /**
         * 针对这 16 个关键字，整理出 3-5 个重点
         */
        $keywordIndex = 1;
        $this->echoKeyword($keywordIndex);
        $points = [
            1 => "設定第一個大目標",
            2 => "分解成小目標",
            3 => "寫在每天都看得到的地方",
        ];
        $this->setKeyPoints($keywordIndex, $points);


        $keywordIndex = 2;
        $this->echoKeyword($keywordIndex);
        $points = [
            1 => "省視自己是否為專業人士",
            2 => "省視自己的習慣",
            3 => "分成好習慣跟壞習慣",
            4 => "定治好習慣養成計畫",
            5 => "如何說不",
        ];
        $this->setKeyPoints($keywordIndex, $points);


        $keywordIndex = 3;
        $this->echoKeyword($keywordIndex);
        $points = [
            1 => "確認自己是否真的熟練某項技術：如何使用,應用",
            2 => "確認自己知道的20%可以發揮80%的效用",
            3 => "1~6只做一次",
            4 => "7~10不斷的網副詞續作",
            5 => "定學習計劃實際演練1~10",
        ];
        $this->setKeyPoints($keywordIndex, $points);

        $keywordIndex = 4;
        $this->echoKeyword($keywordIndex);
        $points = [
            1 => "問自己要導師幫你解決什麼",
            2 => "希望獲得什麼",
            3 => "列出所有可當的人",
            4 => "請別人在你的列表上列出他們認識的人",
            5 => "你能提供什麼給他",
        ];
        $this->setKeyPoints($keywordIndex, $points);

        $keywordIndex = 5;
        $this->echoKeyword($keywordIndex);
        $points = [
            1 => "問自己極度專注的經驗",
            2 => "選一項需要半小時以上的任務",
            3 => "記住並體驗當下專注的感覺",
        ];
        $this->setKeyPoints($keywordIndex, $points);

        $keywordIndex = 6;
        $this->echoKeyword($keywordIndex);
        $points = [
            1 => "你想如何度過一生",
            2 => "花時間確立自己的規則 確保自己是在正確的方向",
            3 => "創建自己的責任制度 嚴格執行",
        ];
        $this->setKeyPoints($keywordIndex, $points);

        $keywordIndex = 7;
        $this->echoKeyword($keywordIndex);
        $points = [
            1 => "興趣",
            2 => "動機",
            3 => "成果",
            4 => "設定規則及約束條件，強迫自己穿過",
            5 => "想像終究會獲得回報，想像收穫",
        ];
        $this->setKeyPoints($keywordIndex, $points);

        $keywordIndex = 8;
        $this->echoKeyword($keywordIndex);
        $points = [
            1 => "戒掉電視",
            2 => "跟蹤時間 ",
            3 => "獲取精確數字",
        ];
        $this->setKeyPoints($keywordIndex, $points);

        $keywordIndex = 9;
        $this->echoKeyword($keywordIndex);
        $points = [
            1 => "檢視目前慣例",
            2 => "選擇目標 以工作日為單位",
            3 => "計算如果每天都做 會取得多少成就",
        ];
        $this->setKeyPoints($keywordIndex, $points);

        $keywordIndex = 10;
        $this->echoKeyword($keywordIndex);
        $points = [
            1 => "找出影響墜大的壞習慣",
            2 => "挑選一個壞習慣是者轉成好習慣",
            3 => "在腦海設想成果",
        ];
        $this->setKeyPoints($keywordIndex, $points);

        $keywordIndex = 11;
        $this->echoKeyword($keywordIndex);
        $points = [
            1 => "找出自己放棄的project",
            2 => "選出目前面零的問題",
            3 => "試圖分解其微小任務",
        ];
        $this->setKeyPoints($keywordIndex, $points);

        $keywordIndex = 12;
        $this->echoKeyword($keywordIndex);
        $points = [
            1 => "哪些會不喜歡",
            2 => "找出一項馬上去作",
            3 => "找出會拖延的工作",
        ];
        $this->setKeyPoints($keywordIndex, $points);


        $keywordIndex = 13;
        $this->echoKeyword($keywordIndex);
        $points = [
            1 => "找出自己的體驗中如何帶來積極的影響",
            2 => "最近的巨大成功體驗是什麼？",
            3 => "最近的重大挫敗是什麼？",
        ];
        $this->setKeyPoints($keywordIndex, $points);


        $keywordIndex = 14;
        $this->echoKeyword($keywordIndex);
        $points = [
            1 => "捕捉想法 紀錄以幫助你理解腦袋在想什麼",
            2 => "省視思維日記",
            3 => "試著換出更多積極的想法",
        ];
        $this->setKeyPoints($keywordIndex, $points);


        $keywordIndex = 15;
        $this->echoKeyword($keywordIndex);
        $points = [
            1 => "想想如何認知自己，別人又如何認知你，列出清單",
            2 => "查看這份清單是否真的無法改變",
            3 => "假裝自己能成功",
        ];
        $this->setKeyPoints($keywordIndex, $points);

        $keywordIndex = 16;
        $this->echoKeyword($keywordIndex);
        $points = [
            1=>"跌倒七次爬起來八次",
            2 => "想想對失敗的恐懼，他是如何讓你退縮的？",
            3 => "想想生活中由於猶豫或自尊而沒有去做的事",
            4 => "承諾至少作一件因為害怕而一直迴避的事情",
            5 => "沒有真正的嘗試過才是真失敗",
        ];
        $this->setKeyPoints($keywordIndex, $points);


        //unfinished
        /**
         * 拿着这张 A4 笔记，马上复述给朋友听，你在这本书得到的心得。
         */
        $this->setSummary("待補");

    }


}

$book = new BookExecute();
$book->execute();
$book->echoResult();