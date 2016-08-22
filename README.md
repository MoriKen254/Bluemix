# Bluemix
Bluemix 関係諸々

# サンプルの説明

## Visual Recognition
- 学習用の画像もチュートリアルから拝借しています．
- Bluemix側の設定が済んでいれば，このリポジトリ内のリソースだけで学習と分類を試すことができます．

### 分類器の学習
- api_key は各自のkeyに変更すること．
- 同一api_keyでは，1つの分類器しか作れない．もう一度作りたいときは分類器作成メソッドの箇所をアンコメントアウトして，削除したいclassifier_idをセットして実行すること．

#### Python
- python_sample/visual_recognition/create_classifier.py を実行．

#### Bash (curl)
- bash_sample/visual_recognition/create_classifier.bash を実行．
- 
### 分類器の学習
- api_key, classifier_ids 内のカスタムid は各自のidに変更すること．

#### Python
- python_sample/visual_recognition/classify.py を実行．

#### Bash (curl)
- bash_sample/visual_recognition/classify.bash を実行．
