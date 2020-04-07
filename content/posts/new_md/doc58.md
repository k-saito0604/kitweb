+++
title = "[hopTo Work 2.0] hopTo Work 2.0 のサーバーを構築するが，新たに専用のサーバーを１台用意すれば良いのか？"
date = "2015-06-12"
tags = ["技術ノート"]
categories = ["tech"]
banner = "img/technote.jpg"
+++

-----------------------------------------------------------------------------------------------------------------------------

*技術ノート

2015/06/12*


[番号]
技術ノート KGTN 2015042401

[現象]
[hopTo Work 2.0] hopTo Work 2.0
のサーバーを構築するが，新たに専用のサーバーを１台用意すれば良いのか？

[説明]
hopTo Work 2.0
は単体でアプリケーションをクライアントへ配信するソフトウエアではなく，
RDS （リモート デスクトップ サービス）
の機能を利用してアプリケーションをタブレット （iOSおよびAndroid）
へ配信するソフトウエアです．従って，RDSの環境 （新規または既存）
を用意して，　"リモート デスクトップ セッション ホスト" のサーバーに
hopTo Work 2.0 のAgentソフトウエアをインストールします．

RDSの環境も新規に構築する場合は，最低２台のサーバーが必要となります．これは，RDSがドメインの環境を必要条件としており，かつRDSのサーバーとActive
Directory サーバーが１台のサーバーに同居出来ないためです．つまり，
Active Directory サーバーと RDSサーバー （hopTo Work 2.0
をインストール） という構成になります

![](http://techreport.kitasp.net/attachments/download/2048/KGTN2015042401.jpg)


### ファイル

 
 


[KGTN2015042401.pdf](http://techreport.kitasp.net/attachments/download/1903/KGTN2015042401.pdf)
 [(97.5 KB)] [kitasp 技術センター, 2015/06/12
16:06]

[KGTN2015042401.jpg](http://techreport.kitasp.net/attachments/download/2048/KGTN2015042401.jpg)

[表示](http://techreport.kitasp.net/attachments/2048/KGTN2015042401.jpg "表示")
 [(21.7 KB)] [kitasp 技術センター, 2015/06/23
10:24]


 


 

