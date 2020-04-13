+++
title = "[GGH4.X-5.X] GGの利用がセキュリティ上望ましいことが分かる情報を知りたい．"
date = "2015-07-09"
tags = ["技術ノート"]
categories = ["tech"]
banner = "img/technote.jpg"
+++

-----------------------------------------------------------------------------------------------------------------------------

*技術ノート

2015/07/09*


[番号]
技術ノート KGTN 2015062601

[現象]
[GGH4.X-5.X]
GGの利用がセキュリティ上望ましいことが分かる情報を知りたい．

[説明]
Windows開発者用のアプリケーションスパイツール Window Detective
を利用して，GGの利用がセキュリティ上望ましいことをご説明します．

![](http://techreport.kitasp.net/attachments/download/2136/KGTN2015062601-1.jpg)

このスクリーンショットは，クライアントPC上でメモ帳を起動し， Window
Detective でその情報をスパイ （取得） した時の画面です．メモ帳に入力した
「クライアントPC上のメモ帳です」 という文字列を Window Detective
（左側のウインドウ） で取得出来ています．つまり，悪意のあるソフトウエア
（マルウエア） であれば，アプリケーション上の情報
（入力した文字列や表示された文字列） を収集出来ることを意味しています．

![](http://techreport.kitasp.net/attachments/download/2137/KGTN2015062601-2.jpg)

このスクリーンショットは，GG上でメモ帳を起動し， Window Detective
でその情報をスパイした時の画面です．メモ帳に入力した
「GG上のメモ帳です」 という文字列を Window Detective
で検出することが出来ていません．これは，メモ帳に入力した文字列はGGサーバー上にのみ存在し，クライアントPC上にはそれが
「視覚的に」 表示されているためです．つまり，悪意のあるソフトウエア
（マルウエア） であっても，アプリケーション上の情報
（入力した文字列や表示された文字列） を収集することは困難です．


### ファイル

 
 


[KGTN2015062601-1.jpg](http://techreport.kitasp.net/attachments/download/2136/KGTN2015062601-1.jpg)

[表示](http://techreport.kitasp.net/attachments/2136/KGTN2015062601-1.jpg "表示")
 [(25.7 KB)] [kitasp 技術センター, 2015/07/09
14:20]

[KGTN2015062601-2.jpg](http://techreport.kitasp.net/attachments/download/2137/KGTN2015062601-2.jpg)

[表示](http://techreport.kitasp.net/attachments/2137/KGTN2015062601-2.jpg "表示")
 [(27.8 KB)] [kitasp 技術センター, 2015/07/09
14:20]

[KGTN2015062601.pdf](http://techreport.kitasp.net/attachments/download/2147/KGTN2015062601.pdf)
 [(245 KB)] [kitasp 技術センター, 2015/07/09
16:06]


 


 

