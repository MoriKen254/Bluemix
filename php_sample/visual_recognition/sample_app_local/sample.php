<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja">
	<head>
		<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
		<title>ajax02b serializeメソッド</title>
		
		<script type="text/javascript" src="../jquery.js"></script>
		<script type="text/javascript">
			// 定数
			var positive1_prefix = 'positive1=';
			var negative_prefix = 'negative=';
			Object.freeze(positive1_prefix);
			Object.freeze(negative_prefix);

			//--------------------------------------
			// サンプルなので決め打ち
			var img_name1 = 'Flower.jpg';
			var img_name2 = 'Penguins.jpg';
			var img_name3 = 'Desert.jpg';
			var img_name4 = 'Chrysanthemum.jpg';
			//--------------------------------------

			var img_width = '200';

			// パラメータをグローバル変数にしておく
		  var positive_param;	
			var negative_param; 

			// ready
			$(function(){
				// 初期化．画像ファイルの部分はアプリケーションで代入する．
				positive_param = positive1_prefix + img_name1 + ',' + img_name2;
				negative_param = negative_prefix + img_name3 + ',' + img_name4;
				
				showImages();

				//copy_btnクリック
				$("#copy_btn").click(function(){
					
					var parameter_img = positive_param + "&" + negative_param; 
					//window.alert('parameter = ' + parameter_img);

					//Ajaxによるリクエスト送信
					$.ajax({
						url:"copy.php",	//送信先
						type:"get",									//送信方法
						data:parameter_img,								//パラメータ
						success:successFnction						//正常終了後の処理
					});

					window.alert('copy image request sent.');

				});

				//archive_btnクリック
				$("#archive_btn").click(function(){

					var parameter_img = positive_param + "&" + negative_param; 
					//window.alert('parameter = ' + parameter_img);

					//Ajaxによるリクエスト送信
					$.ajax({
						url:"archive.php",	//送信先
						type:"get",									//送信方法
						data:parameter_img,								//パラメータ
						success:successFnction						//正常終了後の処理
					});

					window.alert('archive image request sent.');

				});

				//create_classifier_btnクリック
				$("#create_classifier_btn").click(function(){

					// TODO: パラメータを適切に設定する 
					var parameter_img = positive_param + "&" + negative_param; 
					//window.alert('parameter = ' + parameter_img);

					//Ajaxによるリクエスト送信
					// TODO: phpは工事中
					/*
					$.ajax({
						url:"create_classifier.php",	//送信先
						type:"get",									//送信方法
						data:parameter_img,								//パラメータ
						success:successFnction						//正常終了後の処理
					});
					*/

					window.alert('create classifier request sent.');

				});

				//create_classifier_btnクリック
				$("#classify_btn").click(function(){

					// TODO: パラメータを適切に設定する 
					var parameter_img = 'img_url=Flower.jpg';
					window.alert('parameter = ' + parameter_img);

					//Ajaxによるリクエスト送信
					// TODO: phpは工事中
					
					$.ajax({
						url:"classify.php",	//送信先
						type:"get",									//送信方法
						data:parameter_img,								//パラメータ
						success:successFnction						//正常終了後の処理
					});
					

					window.alert('classify request sent.');

				});
			});
			
			//正常終了後の処理
			function successFnction(data, status){
				$("#area").text(data);
			}

			// 画像表示
			function showImages(){
         //連想配列（ハッシュ）を使用
         $("#img1").attr(
           {src:img_name1, alt:"画像ファイル1", width:img_width}
         );
         $("#img2").attr(
           {src:img_name2, alt:"画像ファイル2", width:img_width}
         );
         $("#img3").attr(
           {src:img_name3, alt:"画像ファイル3", width:img_width}
         );
         $("#img4").attr(
           {src:img_name4, alt:"画像ファイル4", width:img_width}
         );        

         ////$(セレクタ).attr(属性名)で値を取得する
         // var src = $("#img1").attr("src");
         // window.alert(src);
        
         /*
         属性を削除するメソッド
         $("#image").removeAttr("属性名");
         */
			}
			
		</script>
		
	</head>
	<body>
		<div>
			Positive Images</br>
			<img id="img1" />
			<img id="img2" /></br>
			Negative Images</br>
			<img id="img3" />
			<img id="img4" /></br>
			<button id="copy_btn">画像仕分け</button> <button id="archive_btn">画像圧縮</button></br>
			<button id="create_classifier_btn">学習開始</button> <button id="classify_btn">認識開始</button></br>
		</div>

		<p>return of php:<span id="area">0</span></p>
	</body>
</html>
