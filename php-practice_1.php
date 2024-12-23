<?php
$name = "";
echo "私の名前は「" . $name . "」です。\n\n";

$num = 5 * 4;
echo $num . "\n";

$num = $num / 2 . "\n\n";
echo $num;

$date = date("y年m月d日 h時i分s秒");
echo "現在時刻は、" . $date . "です。\n\n";

$device = "mac"; 
if ($device == "windows") {
	echo "使用OSは、windowsです。\n\n";
} else {
	if ($device == "mac") {
		echo "使用OSは、macです。\n\n";
	} else {
		echo "どちらでもありません。\n\n";
	}
}

$age = 20;
echo ($age < 18) ? "未成年です。\n\n" : "成人です。\n\n";

$kanto = ['東京都', '神奈川県', '栃木県', '千葉県', '茨城県', '埼玉県', '群馬県', '山梨県'];
echo $kanto[2] . "と" . $kanto[3] . "は関東地方の都道府県です。\n\n";

$kanto = [
	'東京都' => '新宿区',
	'神奈川県' => '横浜市',
	'千葉県' => '千葉市',
	'埼玉県' => 'さいたま市',
	'栃木県' => '宇都宮市',
	'群馬県' => '前橋市',
	'茨城県' => '水戸市',
	'山梨県' => '甲府市'
];

foreach ($kanto as $capital) {
	echo $capital . "\n";
}

echo "\n";

$kanto = [
	'東京都' => '新宿区',
	'神奈川県' => '横浜市',
	'千葉県' => '千葉市',
	'埼玉県' => 'さいたま市',
	'栃木県' => '宇都宮市',
	'群馬県' => '前橋市',
	'茨城県' => '水戸市',
	'山梨県' => '甲府市'
];

$target = '埼玉県';

if (array_key_exists($target, $kanto)) {
	echo $target . 'の県庁所在地は、' . $kanto[$target] . 'です。' . "\n\n";
}

$kanto = [
	'東京都' => '新宿区',
	'神奈川県' => '横浜市',
	'千葉県' => '千葉市',
	'埼玉県' => 'さいたま市',
	'栃木県' => '宇都宮市',
	'群馬県' => '前橋市',
	'茨城県' => '水戸市'
];

$other = [
	'愛知県' => '名古屋市',
	'大阪府' => '大阪市'
];

$allPrefectures = array_merge($kanto, $other);

foreach ($allPrefectures as $pref => $capital) {
	if (array_key_exists($pref, $kanto)) {
		echo $pref . 'の県庁所在地は、' . $capital . 'です。' . "\n";
	} else {
		echo $pref . 'は関東地方ではありません。' . "\n";
	}
}

echo "\n";

function hello($name) {
	return $name . 'さん、こんにちは。';
}

echo hello('金谷') . "\n";
echo hello('安藤') . "\n\n";

function calcTaxInPrice($price) {
	return $price * 1.1;
}

$price = 1000;
$taxInPrice = calcTaxInPrice($price);

echo $price . '円の商品の税込価格は' . $taxInPrice . '円です。' . "\n\n";

function distinguishNum($num) {
	if ($num % 2 == 0) {
		return $num . 'は偶数です。';
	} else {
		return $num . 'は奇数です。';
	}
}

echo distinguishNum(11) . "\n";
echo distinguishNum(24) . "\n\n";

function evaluateGrade($grade) {
	switch ($grade) {
		case 'A':
		case 'B':
			return '合格です。';
		case 'C':
			return '合格ですが追加課題があります。';
		case 'D':
			return '不合格です。';
		default:
			return '判定不明です。講師に問い合わせてください。';
	}
}

echo evaluateGrade('A') . "\n";
echo evaluateGrade('E') . "\n";

?>