# Bluemix
Bluemix 関係諸々

# サンプルの説明

## Visual Recognition
### 概要
 - 学習用の画像もチュートリアルから拝借しています．
 - Bluemix側の設定が済んでいれば，このリポジトリ内のリソースだけで学習と分類を試すことができます．
 - pythonを使う場合はsdkをインストールして下さい．
   - `pip install watson-developer-cloud` 

***
### 分類器の学習
- api_key は各自のkeyに変更すること．
- 同一api_keyでは，1つの分類器しか作れない．もう一度作りたいときは分類器作成メソッドの箇所をアンコメントアウトして，削除したいclassifier_idをセットして実行すること．

#### Python
- python_sample/visual_recognition/create_classifier.py を実行．

#### Bash (curl)
- bash_sample/visual_recognition/create_classifier.bash を実行．

***
### 入力画像の分類
- api_key, classifier_ids 内のカスタムid は各自のidに変更すること．

#### Python
- python_sample/visual_recognition/classify.py を実行．

#### Bash (curl)
- bash_sample/visual_recognition/classify.bash を実行．

# 参考文献
- [Watson Developer Cloud Visual Recognition API Reference](http://www.ibm.com/watson/developercloud/visual-recognition/api/v3/)
- [watson-developer-cloud/python-sdk/examples/visual_recognition_v3.py](https://github.com/watson-developer-cloud/python-sdk/blob/master/examples/visual_recognition_v3.py)
- [Watson Developer Cloud Visual Recognition](https://www.ibm.com/watson/developercloud/visual-recognition.html)
- [Watson Developer Cloud Visual Recognition Demo](https://visual-recognition-demo.mybluemix.net/)
- [Watson Developer Cloud Visual Recognition Document & Tutorials](https://www.ibm.com/watson/developercloud/doc/visual-recognition/)

# プラスアルファ
- [pepperくんをブラウザから動かすコントローラを作ろう](http://nextdeveloper.hatenablog.com/entry/2015/02/19/153000)
- [Pepperめも ～ペッパーリモコン作ってみた～](http://qiita.com/haiattoC/items/a7390fdfecf697586fb3#comment-e4be9b5dfd1cca07a5fc)
- [索引次へ |前へ |DjangoによるWebアプリケーション開発入門 »MacOS X »第一章 - Django基礎編（Mac版）](http://eiry.bitbucket.org/mac/tutorial/installation.html)
- [PepperタブレットにおけるJavaScript活用コンテンツ(QiMessaging JavaScript)](http://qiita.com/Atelier-Akihabara/items/716e88b306db12751c9b)
- [pepper conrtoller](http://kuetsuhara.github.io/pepperConnect.html)
