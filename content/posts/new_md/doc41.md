+++
title = "[Windows] WS2012R2やWS2008R2の環境で，ユーザーがファイル共有機能を利用してクライアントPCへファイルをダウンロード （コピー） 出来ないようにしたい．"
date = "2015-07-09"
tags = ["技術ノート"]
categories = ["tech"]
banner = "img/technote.jpg"
+++

-----------------------------------------------------------------------------------------------------------------------------

*技術ノート

2015/07/09*


[番号]
技術ノート KGTN 2015061903

[現象]
[Windows]
WS2012R2やWS2008R2の環境で，ユーザーがファイル共有機能を利用してクライアントPCへファイルをダウンロード
（コピー） 出来ないようにしたい．

[説明]
エクスプローラーや共通ファイル・ダイアログから 「ネットワーク」
アイコンを消す方法もありますが，ユーザーがUNC （例：
192.168.102.60MyDrive）
で直接クライアントPCへアクセスした場合は，残念ながらファイルのダウンロードが出来てしまいます．この問題を解決するには，Windowsファイアウォールの設定で，ファイル共有機能を利用出来ないようにする必要があります．

![](http://techreport.kitasp.net/attachments/download/2131/KGTN2015061903-1.jpg)

「送信の規則」 を追加

![](http://techreport.kitasp.net/attachments/download/2132/KGTN2015061903-2.jpg)

「接続をブロックする」 送信規則

![](http://techreport.kitasp.net/attachments/download/2133/KGTN2015061903-3.jpg)

「接続をブロックする」 ポートは TCP の 445,137-139

![](http://techreport.kitasp.net/attachments/download/2134/KGTN2015061903-4.jpg)

「接続をブロックする」 相手はクライアントPCのアドレス （ネットワーク）


### ファイル

 
 


[KGTN2015061903-1.jpg](http://techreport.kitasp.net/attachments/download/2131/KGTN2015061903-1.jpg)

[表示](http://techreport.kitasp.net/attachments/2131/KGTN2015061903-1.jpg "表示")
 [(33.8 KB)] [kitasp 技術センター, 2015/07/09
13:59]

[KGTN2015061903-2.jpg](http://techreport.kitasp.net/attachments/download/2132/KGTN2015061903-2.jpg)

[表示](http://techreport.kitasp.net/attachments/2132/KGTN2015061903-2.jpg "表示")
 [(20.4 KB)] [kitasp 技術センター, 2015/07/09
13:59]

[KGTN2015061903-3.jpg](http://techreport.kitasp.net/attachments/download/2133/KGTN2015061903-3.jpg)

[表示](http://techreport.kitasp.net/attachments/2133/KGTN2015061903-3.jpg "表示")
 [(21 KB)] [kitasp 技術センター, 2015/07/09
13:59]

[KGTN2015061903-4.jpg](http://techreport.kitasp.net/attachments/download/2134/KGTN2015061903-4.jpg)

[表示](http://techreport.kitasp.net/attachments/2134/KGTN2015061903-4.jpg "表示")
 [(19.9 KB)] [kitasp 技術センター, 2015/07/09
14:00]

[KGTN2015061903.pdf](http://techreport.kitasp.net/attachments/download/2144/KGTN2015061903.pdf)
 [(222 KB)] [kitasp 技術センター, 2015/07/09
16:05]


 


 

