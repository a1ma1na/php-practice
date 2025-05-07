<?php
// Q1 変数と文字列
$message = '私の名前は「伊藤です。」';
echo $message;


// Q2 四則演算
$x = 5;
$y = 4;

var_dump($x * $y);
var_dump($x * $y/2);


// Q3 日付操作
$currentDateTime = date("Y年m月d日 H時i分s秒");
{
    echo "現在時刻は、" . $currentDateTime . "です。";
}


// Q4 条件分岐-1 if文
$device = "mac";

if ($device == "windows") {
    echo "使用OSは、windowsです。";
}

if ($device == "mac") {
    echo "使用OSは、macです。";
}

if ($device != "windows" && $device != "mac") {
    echo "どちらでもありません。";
}


// Q5 条件分岐-2 三項演算子

$age = 20; 

echo ($age >= 18) ? "成人です。" : "未成年です。";



// Q6 配列

$kanto = ["東京都", "神奈川県", "栃木県", "千葉県", "埼玉県", "茨城県", "群馬県"];

echo $kanto[2] . "と" . $kanto[3] . "は関東地方の都道府県です。";



// Q7 連想配列-1

$kantoPrefectures = [
    "東京都" => "新宿区",
    "神奈川県" => "横浜市",
    "千葉県" => "千葉市",
    "埼玉県" => "さいたま市",
    "栃木県" => "宇都宮市",
    "群馬県" => "前橋市",
    "茨城県" => "水戸市"
];

foreach ($kantoPrefectures as $prefecture => $capital) {
    echo $capital . "\n";
}


// Q8 連想配列-2
$kantoPrefectures = [
    "東京都" => "新宿区",
    "神奈川県" => "横浜市",
    "千葉県" => "千葉市",
    "埼玉県" => "さいたま市",
    "栃木県" => "宇都宮市",
    "群馬県" => "前橋市",
    "茨城県" => "水戸"
];

if (isset($kantoPrefectures["埼玉県"])) {
    echo "埼玉県の県庁所在地は、" . $kantoPrefectures["埼玉県"] . "です。";
}


// Q9 連想配列-3
$prefectures = [
    "東京都" => "新宿区",
    "神奈川県" => "横浜市",
    "千葉県" => "千葉市",
    "埼玉県" => "さいたま市",
    "栃木県" => "宇都宮市",
    "群馬県" => "前橋市",
    "茨城県" => "水戸市",
    "愛知県" => "名古屋市",
    "大阪府" => "大阪市"
];

$kanto = ["東京都", "神奈川県", "千葉県", "埼玉県", "栃木県", "群馬県", "茨城県"];

foreach ($prefectures as $pref => $capital) {
    if (in_array($pref, $kanto)) {
        echo $pref . "の県庁所在地は、" . $capital . "です。\n";
    } else {
        echo $pref . "は関東地方ではありません。\n";
    }
}


// Q10 関数-1
function hello($name) {
    return $name . "さん、こんにちは。";
}

echo hello("金谷") . "\n";
echo hello("安藤") . "\n";


// Q11 関数-2
function calcTaxInPrice($price) {
    return $price * 1.10;
}

$price = 1000;

$taxInPrice = calcTaxInPrice($price);

echo $price . "円の商品の税込価格は" . $taxInPrice . "円です。";


// Q12 関数とif文
function distinguishNum($num) {
    if ($num % 2 === 0) {
        return $num . "は偶数です。";
    } else {
        return $num . "は奇数です。";
    }
}

echo distinguishNum(11) . "\n";
echo distinguishNum(24) . "\n";


// Q13 関数とswitch文
function evaluateGrade($grade) {
    switch ($grade) {
        case "A":
        case "B":
            return "合格です。";
        case "C":
            return "合格ですが追加課題があります。";
        case "D":
            return "不合格です。";
        default:
            return "判定不明です。講師に問い合わせてください。";
    }
}

echo evaluateGrade("A") . "\n";
echo evaluateGrade("Z") . "\n";


?>