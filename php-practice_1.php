<?php
// Q1 変数と文字列

<?php

$name = '関根';

echo '私の名前は「' . $name . '」です。';

?>

// Q2 四則演算

<?php

$num = 5 * 4;

echo $num . "\n";

echo $num / 2;

?>

// Q3 日付操作

<?php

echo '現在時刻は、' . date("Y年m月d日 H時i分s秒") . 'です。';

?>

// Q4 条件分岐-1 if文

<?php

$device = 'windows';

if ($device === 'windows' || $device === 'mac') {
    
    echo '使用OSは、' . $device . 'です。';
    
} else {
    
    echo 'どちらでもありません。';
}

?>

// Q5 条件分岐-2 三項演算子

<?php

$age = 17;

$message = ($age >= 18) ? '成人です。' : '未成年です。';

echo $message;

?>

// Q6 配列

<?php

$prefectures = ['東京都','神奈川県','埼玉県','栃木県','千葉県','群馬県','茨城県'];

echo $prefectures[3] . 'と' . $prefectures[4] . 'は関東地方の都道府県です。';

?>

// Q7 連想配列-1

<?php

$prefectures = ['東京都' => '新宿区','神奈川県' => '横浜市','埼玉県' => 'さいたま市','栃木県' => '宇都宮市','千葉県' => '千葉市','群馬県' => '前橋市','茨城県' => '水戸市'];

echo $prefectures['東京都'] . "\n";

echo $prefectures['神奈川県'] . "\n";

echo $prefectures['千葉県'] . "\n";

echo $prefectures['埼玉県'] . "\n";

echo $prefectures['栃木県'] . "\n";

echo $prefectures['群馬県'] . "\n";

echo $prefectures['茨城県'] . "\n";

?>

// Q8 連想配列-2

<?php

$location = ['東京都' => '新宿区','神奈川県' => '横浜市','埼玉県' => 'さいたま市','栃木県' => '宇都宮市','千葉県' => '千葉市','群馬県' => '前橋市','茨城県' => '水戸市'];

foreach ($location as $key => $value) {
 
 if ($key === '埼玉県') {
    
    echo $key . 'の県庁所在地は、' . $value . 'です。';
    
 }
}

?>

// Q9 連想配列-3

<?php

$location = ['東京都' => '新宿区','神奈川県' => '横浜市','埼玉県' => 'さいたま市','栃木県' => '宇都宮市','千葉県' => '千葉市','群馬県' => '前橋市','茨城県' => '水戸市','愛知県' => '名古屋市','大阪府' => '大阪市'];

foreach ($location as $key => $value) {
    
    if ($key === '愛知県' || $key === '大阪府') {
        
        echo $key . 'は関東地方ではありません。' . "\n";
        
    } else {
        
        echo $key . 'の県庁所在地は、' . $value . 'です。' . "\n";
        
    }
    
}

?>

// Q10 関数-1

<?php

function hello($name) {
    
    echo $name . 'さん、こんにちは。' . "\n";
    
}

hello('鈴木');

hello('町田');

?>

// Q11 関数-2

<?php

$price = 1000;

function calcTaxInPrice($price) {
    
    return $price + $price * 0.1;
    
}

$taxInPrice = calcTaxInPrice($price);

echo $price . '円の商品の税込み価格は' . $taxInPrice . '円です。'

?>

// Q12 関数とif文

<?php

function distinguishNum($num) {
    
    if ($num % 2 == 0) {
        
        echo $num . 'は偶数です。' . "\n";
        
    } else {
        
        echo $num . 'は奇数です。' . "\n";
    }
    
}

distinguishNum(11);

distinguishNum(24);

?>

// Q13 関数とswitch文

<?php

function evaluateGrade($grade) {
    
    switch ($grade) {
        case 'A':
            
            echo '合格です。' . "\n";
            
            break;
            
        case 'B':
            
            echo '合格です。' . "\n";
        
            break;
            
        case 'C':
            
            echo '合格ですが追加課題があります。' . "\n";
            
            break;
            
        case 'D':
            
            echo '不合格です。' . "\n";
            
            break;
            
        default:
            
            echo '判定不明です。講師に問い合わせてください。' . "\n";
            
            break;
    }
    
}

evaluateGrade('A');

evaluateGrade('G');

?>