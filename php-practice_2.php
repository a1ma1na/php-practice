<?php
// Q1 tic-tac問題
echo "1から100までのカウントを開始します\n";

for ($i = 1; $i <= 100; $i++) {
    if ($i % 4 === 0 && $i % 5 === 0) {
        echo "tic-tac\n";
    } else if ($i % 4 === 0) {
        echo "tic\n";
    } else if ($i % 5 === 0) {
        echo "tac\n";
    } else {
        echo $i . "\n";
    }
}


// Q2 多次元連想配列
// 問題１
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];

echo "Bさんの電話番号は" . $personalInfos[1]['tel'] . "です。\n";

// 問題２
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];

foreach ($personalInfos as $index => $info) {
    $number = $index + 1;
    echo "{$number}番目の{$info['name']}のメールアドレスは{$info['mail']}で、電話番号は{$info['tel']}です。\n";
}

// 問題３
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];

$ageList = [25, 30, 18];

foreach ($personalInfos as $index => $info) {
    $personalInfos[$index]['age'] = $ageList[$index];
}

var_dump($personalInfos);

// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
}

$student = new Student(120, '山田');

echo '学籍番号' . $student->studentId . '番の生徒は' . $student->studentName . 'です。';

// Q4 オブジェクト-2
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($subject)
    {
        echo $this->studentName . 'は' . $subject . 'の授業に参加しました。学籍番号：' . $this->studentId;
    }
}

$yamada = new Student(120, '山田');
$yamada->attend('PHP');


// Q5 定義済みクラス
// 問題１
$oneMonthAgo = new DateTime();
$oneMonthAgo->modify('-1 month');

echo $oneMonthAgo->format('Y-m-d');

// 問題２
$today = new DateTime();

$past = new DateTime('1992-04-25');

$diff = $today->diff($past);

echo 'あの日から' . $diff->days . '日経過しました。';