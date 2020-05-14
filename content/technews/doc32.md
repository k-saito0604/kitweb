+++
title = "[Microsoft Azure] Microsoft Azure の仮想マシン上でGGを利用出来るのか？"
date = "2015-07-30"
ttags = ["技術ノート"]
tcategories = ["tech"]
banner = "img/technote.jpg"
+++

-----------------------------------------------------------------------------------------------------------------------------

*技術ノート

2015/07/30*


[番号]
技術ノート KGTN 2015072801

[現象]
[Microsoft Azure] Microsoft Azure の仮想マシン上でGGを利用出来るのか？

[説明]
はい，もちろん利用することが出来ます．GGのインストールは，物理マシンと同じ手順でインストールして下さい．これに加え，インターネット側からGGにアクセスする場合は，下記のように仮想マシンにポート番号491
(TCP) のエンドポイントを作成して下さい．

<https://azure.microsoft.com/ja-jp/documentation/articles/virtual-machines-set-up-endpoints/>
仮想マシンに対してエンドポイントを設定する方法

![](http://techreport.kitasp.net/attachments/download/2161/KGTN2015072801.jpg)


### ファイル

 
 


[KGTN2015072801.pdf](http://techreport.kitasp.net/attachments/download/2160/KGTN2015072801.pdf)
 [(69.3 KB)] [kitasp 技術センター, 2015/07/30
17:01]

[KGTN2015072801.jpg](http://techreport.kitasp.net/attachments/download/2161/KGTN2015072801.jpg)

[表示](http://techreport.kitasp.net/attachments/2161/KGTN2015072801.jpg "表示")
 [(17.1 KB)] [kitasp 技術センター, 2015/07/30
17:01]


 


 

