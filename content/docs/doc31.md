+++
title = "[Microsoft Azure] Microsoft Azure の仮想マシンは，静的なグローバルIPアドレスの割り当てを受けることが可能なのか？"
date = "2015-07-30"
tags = ["技術ノート"]
categories = ["tech"]
banner = "img/technote.jpg"
+++

-----------------------------------------------------------------------------------------------------------------------------

*技術ノート

2015/07/30*


[番号]
技術ノート KGTN 2015072802

[現象]
[Microsoft Azure] Microsoft Azure
の仮想マシンは，静的なグローバルIPアドレスの割り当てを受けることが可能なのか？

[説明]
標準の設定では，仮想マシンを 「停止→開始」
した時にグローバルIPアドレスが変ります
（注：再起動ではグローバルIPアドレスは変りません） ．例えば， 停止前:
104.214.137.117 → 「停止→開始」 → 開始後: 191.239.97.33
というようにグローバルIPアドレスが変ります．静的なグローバルIPアドレスの割り当てを受けたい場合は，仮想マシンの作成時にインスタンスレベル・パブリック
IP （ILPIP） を要求して下さい．詳細については，下記ページをご覧下さい．

<https://azure.microsoft.com/ja-jp/documentation/articles/virtual-networks-instance-level-public-ip/>
インスタンスレベル パブリック IP の概要

補　足
GGクライアントは，DNS名で接続するGGサーバーを指定することが出来ますので，静的なグローバルIPアドレスの割り当てを受けなくてもGGサーバーを運用することが出来ます．なお，DNS名を指定する場合は，DNS名の末尾にドットを付加することをお勧めします．

![](http://techreport.kitasp.net/attachments/download/2163/KGTN2015072802.jpg)


### ファイル

 
 


[KGTN2015072802.pdf](http://techreport.kitasp.net/attachments/download/2162/KGTN2015072802.pdf)
 [(76.2 KB)] [kitasp 技術センター, 2015/07/30
17:06]

[KGTN2015072802.jpg](http://techreport.kitasp.net/attachments/download/2163/KGTN2015072802.jpg)

[表示](http://techreport.kitasp.net/attachments/2163/KGTN2015072802.jpg "表示")
 [(13.1 KB)] [kitasp 技術センター, 2015/07/30
17:06]


 


 

