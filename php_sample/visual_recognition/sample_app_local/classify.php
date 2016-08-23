<?php

//リクエストパラメータ
//-- 分類対象ファイルのパスを取得
$img_url = $_REQUEST['img_url'];

// 引数確認用ログ
$file = 'log.txt';
$split = '_';
$test =  $img_url;
// 結果をファイルに書き出します
file_put_contents($file, $test);

// httpコマンドを生成
$api_url='https://gateway-a.watsonplatform.net/visual-recognition/api/v3/';
$api_type='classify';
$classifier_id='dogs_1474036614';
$api_key='eff6ee0aaf5980914180ba2df0a8e220fd854b7c';
$version='2016-05-20';

$url = $api_url.$api_type.'?api_key='.$api_key.'&version='.$version;

file_put_contents($file, $url);

$ch = curl_init($url);

//オプション
curl_setopt($ch, CURLOPT_URL, $url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//postするデータの配列
$classifier_setting_file = 'myparams.json';
$post_data = array(
	'images_file' => $img_url ,
	'parameters' => $classifier_setting_file);

// POSTに指定
curl_setopt($ch, CURLOPT_POST, true);

//データの配列を設定する
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));

// bluemix APIに分類コマンド送信
// curl 実行
$html =  curl_exec($ch);

// 結果確認用ログ
$file2 = 'result.txt';
// 結果をファイルに書き出します
file_put_contents($file2, $html);

var_dump($html);

curl_close($ch);

?>

