+++
title = "[Mac OS X] MacBook Air （JISキーボード） を使用しているが，ログオン画面で _ のキーを押すと， | が入力される．"
date = "2013-03-14"
ttags = ["技術ノート"]
tcategories = ["tech"]
banner = "img/technote.jpg"
+++

-----------------------------------------------------------------------------------------------------------------------------

*技術ノート

2013/03/14*


[番号]
技術ノート KGTN 2013031402

[現象]
[Mac OS X] MacBook Air （JISキーボード）
を使用しているが，ログオン画面で "_" のキーを押すと， "|"
が入力される．

[説明]
ログオン画面ではキーボード・マッピングファイルが適用されないため，一部のキーで入力した文字とは異なる文字がエコーバックされます．この現象は現時点では制限事項となりますので，以下の何れかの方法で運用回避をお願いします．

ユーザIDおよびパスワードに英数字のみを使用する．
ユーザIDおよびパスワードをコマンドラインやハイパーリンクのパラメタで指定する．
クライアント側IME機能を使用する （GGH4.5.0.13063またはそれ以降） ．
コマンドラインの例：/Applications/GO-Global.app/Contents/MacOS/GO-Global
-h 192.168.102.81 -kb ClientSideIME dummy
ハイパーリンクの例:
<http://192.168.102.81/logon.html?keyboard=ClientSideIME>

![](http://techreport.kitasp.net/attachments/download/2102/KGTN2013031402-1.jpg)

参　考
クライアント側IME機能の実行例 （スクリーンショット）
を以下に示します．Mac OS X
のかな漢字変換を利用して文字を入力することが出来ますので，Mac OS X
を主に使用するユーザーにとって最適な方法と言えます．

![](http://techreport.kitasp.net/attachments/download/2103/KGTN2013031402-2.jpg)


### ファイル





[KGTN2013031402-1.jpg](http://techreport.kitasp.net/attachments/download/2102/KGTN2013031402-1.jpg)

[表示](http://techreport.kitasp.net/attachments/2102/KGTN2013031402-1.jpg "表示")
 [(26.2 KB)] [kitasp 技術センター, 2015/07/08
17:17]

[KGTN2013031402-2.jpg](http://techreport.kitasp.net/attachments/download/2103/KGTN2013031402-2.jpg)

[表示](http://techreport.kitasp.net/attachments/2103/KGTN2013031402-2.jpg "表示")
 [(65.1 KB)] [kitasp 技術センター, 2015/07/08
17:17]

[KGTN2013031402.pdf](http://techreport.kitasp.net/attachments/download/2151/KGTN2013031402.pdf)
 [(336 KB)] [kitasp 技術センター, 2015/07/09
16:07]
