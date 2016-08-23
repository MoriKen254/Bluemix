<?php

//リクエストパラメータ
$positive1 = $_REQUEST['positive1'];
$negative = $_REQUEST['negative'];

$positive1_arr = explode(",", $positive1);
$negative_arr = explode(",", $negative);

//// 引数確認用ログ
//$file = 'log.txt';
//$split = '_';
//$test =  $positive1.$split.$negative.$split.$positive1_arr[0].$split.$positive1_arr[1];
//// 結果をファイルに書き出します
//file_put_contents($file, $test);

$pos_dir = 'positive/';
$neg_dir = 'negative/';
$newfile_pos1 = $pos_dir . $positive1_arr[0];
$newfile_pos2 = $pos_dir . $positive1_arr[1];
$newfile_neg1 = $neg_dir . $negative_arr[0];
$newfile_neg2 = $neg_dir . $negative_arr[1];

$zip = new ZipArchive();

if ($zip->open('positive.zip', ZipArchive::CREATE) === true) {
	$zip->addFile($newfile_pos1);
	$zip->addFile($newfile_pos2);
	$zip->close();
} else {
	exit('open error.');
}

if ($zip->open('negative.zip', ZipArchive::CREATE) === true) {
	$zip->addFile($newfile_neg1);
	$zip->addFile($newfile_neg2);
	$zip->close();
} else {
	exit('open error.');
}

?>

