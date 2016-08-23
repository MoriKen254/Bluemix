<?php

//リクエストパラメータ
//-- zipファイルのパスを取得
$positive1_zip = 'positive1.zip'
$negative_zip = 'negative.zip'

// curlコマンドを生成
$api_url='https://gateway-a.watsonplatform.net/visual-recognition/api/v3/';
$api_type='classifiers';
$api_key='your_api_key';
$version='2016-05-20';

$url = $api_url.$api_type.'?api_key='.$api_key.'version='.$version;
$ch = curl_init();

//オプション
curl_setopt($ch, curlopt_url, $url); 
curl_setopt($ch, curlopt_returntransfer, true);

//postするデータの配列
$post_data = array(
	'positive_positive_examples' => "positive.zip" ,
	'negative_negative_examples' => "negative.zip" ,
	'name'=> "php_sample");

// POSTに指定
curl_setopt($ch,CURLOPT_POST, true);

//データの配列を設定する
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));

// bluemix APIに学習コマンドを送信
// curl 実行
$html =  curl_exec($ch);
var_dump($html);
curl_close($ch);

?>

