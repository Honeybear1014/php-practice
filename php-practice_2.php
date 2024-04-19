<?php
// Q1 tic-tac問題

<?php

for ($i = 1; $i < 101; $i++) {
    
    if ($i % 4 === 0 && $i % 5 === 0) {
        
        echo 'tic-tac' . "\n";
        
    } elseif ($i % 4 === 0) {
        
        echo 'tic' . "\n";
        
    } elseif ($i % 5 === 0) {
        
        echo 'tac' . "\n";
        
    } else {
        
        echo $i . "\n";
        
    }
    
}

?>

// Q2 多次元連想配列

//　問題1

<?php

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

    echo $personalInfos[1]['name'] . 'の電話番号は' . $personalInfos[1]['tel'] . 'です。';

?>

// 問題2

<?php

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

    foreach ($personalInfos as $x => $val) {
        
        echo ($x +1) . '番目の' . $val['name'] . 'のメールアドレスは' . $val['mail'] . 'で、電話番号は' . $val['tel'] . 'です。' . "\n";
        
    }

?>

// 問題3

<?php

$ageList = [25, 30, 18];

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

    foreach ($ageList as $x => $val) {
        
       $personalInfos[$x]['age'] = $val;
        
    }
    
    var_dump($personalInfos)

?>

// Q3 オブジェクト-1

<?php

class Student{
    
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

$yamada = new Student('999','山田');

    echo '学籍番号' . $yamada -> studentId . '番の生徒は' . $yamada -> studentName . 'です。'

?>

// Q4 オブジェクト-2

<?php

class Student{
    
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($curriculum)
    {
        echo $this -> studentName. 'は' . $curriculum . 'の授業に出席しました。学籍番号：' . $this -> studentId;
    }
}

$yamada = new Student('999','山田');

  $yamada -> attend('PHP');

?>

// Q5 定義済みクラス

// 問題1

<?php

$time = new DateTime();
$time -> modify('-1 month');

    echo $time -> format('Y-m-d');

?>

// 問題2

<?php

$today = new DateTime();

$day = new DateTime('1992-04-25');

$diff = $day -> diff($today);

echo 'あの日から' . $diff -> format('%a') . '日経過しました。';

?>