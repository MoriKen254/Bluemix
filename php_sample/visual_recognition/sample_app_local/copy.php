<?php

//リクエストパラメータ
$positive1 = $_REQUEST['positive1'];
$negative = $_REQUEST['negative'];

$positive1_arr = explode(",", $positive1);
$negative_arr = explode(",", $negative);

// 引数確認用ログ
$file = 'log.txt';
$split = '_';
$test =  $positive1.$split.$negative.$split.$positive1_arr[0].$split.$positive1_arr[1];
// 結果をファイルに書き出します
file_put_contents($file, $test);

$width = 300;
$pos_dir = 'positive/';
$neg_dir = 'negative/';
$newfile_pos1 = $pos_dir . $positive1_arr[0];
$newfile_pos2 = $pos_dir . $positive1_arr[1];
$newfile_neg1 = $neg_dir . $negative_arr[0];
$newfile_neg2 = $neg_dir . $negative_arr[1];

if (!copy($positive1_arr[0], $newfile_pos1)) {
	echo "failed to copy $file...\n";
}
if (!copy($positive1_arr[1], $newfile_pos2)) {
	echo "failed to copy $file...\n";
}
if (!copy($negative_arr[0], $newfile_neg1)) {
	echo "failed to copy $file...\n";
}
if (!copy($negative_arr[1], $newfile_neg2)) {
	echo "failed to copy $file...\n";
}
?>

