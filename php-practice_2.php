<?php

#Q1
echo "1から100までのカウントを開始します\n\n";

for ($i = 1; $i <= 100; $i++) {
	if ($i % 4 === 0 and $i % 5 === 0) {
		echo "tic-tac\n";
	} elseif ($i % 4 === 0) {
		echo "tic\n";
	} elseif ($i % 5 === 0) {
		echo "tac\n";
	} else {
		echo "$i\n";
	}
}

echo "\n";

#Q2
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

#問題1
echo "{$personalInfos[1]['name']}の電話番号は{$personalInfos[1]['tel']}です。\n\n";

#問題2
$count = 1;

foreach ($personalInfos as $info) {
	echo "{$count}番目の{$info['name']}のメールアドレスは{$info['mail']}で、電話番号は{$info['tel']}です。\n";
	$count++;
}
echo "\n";

#問題3
$ageList = [25, 30, 18];

foreach ($personalInfos as $index => $info) {
	$personalInfos[$index]['age'] = $ageList[$index];
}

var_dump($personalInfos);
echo "\n";

#Q3
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
echo '学籍番号' . $student->studentId . '番の生徒は' . $student->studentName . 'です。' . PHP_EOL . PHP_EOL;

#Q4
class Student2
{
	public $studentId2;
	public $studentName2;

	public function __construct($id2, $name2)
	{
		$this->studentId2 = $id2;
		$this->studentName2 = $name2;
	}

	public function attend($subject2)
	{
		echo $this->studentName2 . 'は' . $subject2 . 'の授業に参加しました。学籍番号：' . $this->studentId2 . PHP_EOL . PHP_EOL;
	}
}

$yamada = new Student2(120, '山田');
$yamada->attend('PHP');

#Q5
#問題1
$date = new DateTime();
$date->modify('-1 month');
echo $date->format('Y-m-d') . PHP_EOL . PHP_EOL;

#問題2
$today = new DateTime();
$pastDate = new DateTime('1992-04-25');
$diff = $today->diff($pastDate);
echo "あの日から" . $diff->days . "日経過しました。";

?>

/*
■Q1
・forは繰り返しの命令
・$iは変数(iはただの変数の名前)
・$i = 1は変数iに1を代入、つまりこのforの初期値が1であるという意味
・$i <= 100は$iは100以下、つまりこのforが繰り返しの条件が100以下であるという意味
・$i++はインクリメント、つまり変数の値を1加算するという意味
・%はモジュロ演算子、(変数) % (割る数) === (余り)の形で割り算を行うもの

■Q2
・$personalInfosは配列を格納している変数。
	$から始まるものは全て変数であり、変数には文字列、数値、配列、オブジェクトなどさまざまな値が収納できる(personalInfosはただの変数の名前)
・配列は[]で区切る事により複数の配列を1つの配列に収納できる
・配列はキーと値をセットで管理する連想配列という形を作る事ができ、'(キーの名前)' => '(値)'の形でそれぞれを結び付けている
□問1
・$(配列を格納している変数の名前)[(配列のインデックス番号、0からスタート)]['(キーの名前)']という形で中の値を取り出す事ができる
・foreachは配列やオブジェクトの全ての要素を取り出して順番に繰り返させる命令
	foreach ($(配列の名前) as $(キー) => $(値))の形で指定する
	{$(配列の名前)['キー']}の形で値を取り出す事ができる
