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
