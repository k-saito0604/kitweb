+++
title = "[Windows] リモート管理ツール PsExec で，コマンド dir C: を実行させたが 「指定されたファイルが見つかりません」 と表示される．"
date = "2015-06-11"
ttags = ["技術ノート"]
tcategories = ["tech"]
banner = "img/technote.jpg"
+++

-----------------------------------------------------------------------------------------------------------------------------

*技術ノート

2015/06/11*


[番号]
技術ノート KGTN 2015030902

[現象]
[Windows] リモート管理ツール PsExec で，コマンド dir C:
を実行させたが 「指定されたファイルが見つかりません」 と表示される．

[説明]
dir コマンドはコマンド・プロンプトの内部コマンドであるため， PsExec
で直接実行しようとするとファイル （コマンド）
が見つかりません．コマンド・プロンプトの内部コマンドを実行したい場合は，以下のようにコマンド・プロンプトを介して実行して下さい．

cmd.exe /c "内部コマンド"

![](http://techreport.kitasp.net/attachments/download/1982/KGTN2015030902.jpg)


### ファイル

 
 


[KGTN2015030902.pdf](http://techreport.kitasp.net/attachments/download/1872/KGTN2015030902.pdf)
 [(58.1 KB)] [kitasp 技術センター, 2015/06/11
17:34]

[KGTN2015030902.jpg](http://techreport.kitasp.net/attachments/download/1982/KGTN2015030902.jpg)

[表示](http://techreport.kitasp.net/attachments/1982/KGTN2015030902.jpg "表示")
 [(53.3 KB)] [kitasp 技術センター, 2015/06/18
13:48]


 


 

