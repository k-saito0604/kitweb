+++
title = "[GGH5.X] IE向けクライアント （ActiveXクライアント） のインストール手順は？"
date = "2015-06-11"
tags = ["技術ノート"]
categories = ["tech"]
banner = "img/technote.jpg"
+++

-----------------------------------------------------------------------------------------------------------------------------

*技術ノート

2015/06/11*


[番号]
技術ノート KGTN 2015040301

[現象]
[GGH5.X] IE向けクライアント （ActiveXクライアント）
のインストール手順は？

[説明]
先ず，GGH4.XのIE向けクライアントは，そのマシン （パソコン）
に対してインストールされるため，インストール時に管理者権限が必要でした．GGH5.XのIE向けクライアントは，そのユーザー
（クライアント・マシンのログオンアカウント）
に対してインストールされるため，インストール時に管理者権限が不要となりました．この変更に伴い，クライアントのインストールフォルダも
"%WINDIR%Downloaded Program Files"
から，"%LOCALAPPDATA%GraphOnGO-GlobalClient" へ変更されました．

以下，GGサーバーにウエッブサーバーが同居している環境でのIE向けクライアント
（ActiveXクライアント） のインストール手順を示します．

１．IEを立ち上げ
[http://&lt;GGサーバーのアドレス&gt;/logon.html](http://&lt;GG%E3%82%B5%E3%83%BC%E3%83%90%E3%83%BC%E3%81%AE%E3%82%A2%E3%83%89%E3%83%AC%E3%82%B9&gt;/logon.html){.external}
へアクセスし，"Download" をクリックする．
![](http://techreport.kitasp.net/attachments/download/1989/KGTN2015040301-1.jpg)

２．"実行" をクリックする．
![](http://techreport.kitasp.net/attachments/download/1990/KGTN2015040301-21.jpg)

３．"Next" をクリックする．
![](http://techreport.kitasp.net/attachments/download/1991/KGTN2015040301-22.jpg)

４．"I accept ..." を選択し "Next" をクリックする．
![](http://techreport.kitasp.net/attachments/download/1992/KGTN2015040301-31.jpg)

５．"Install" をクリックする．
![](http://techreport.kitasp.net/attachments/download/1993/KGTN2015040301-32.jpg)

６．"Finish" をクリックする．
![](http://techreport.kitasp.net/attachments/download/1994/KGTN2015040301-41.jpg)

７．IE を閉じて，改めてIEを立ち上げ
[http://&lt;GGサーバーのアドレス&gt;/logon.html](http://&lt;GG%E3%82%B5%E3%83%BC%E3%83%90%E3%83%BC%E3%81%AE%E3%82%A2%E3%83%89%E3%83%AC%E3%82%B9&gt;/logon.html){.external}
へアクセスするとログオン画面が表示される．
![](http://techreport.kitasp.net/attachments/download/1995/KGTN2015040301-42.jpg)

なお，上記７で下記の警告が表示された場合は， "許可する"
をクリックして下さい．
![](http://techreport.kitasp.net/attachments/download/1996/KGTN2015040301-5.jpg)


### ファイル

 
 


[KGTN2015040301.pdf](http://techreport.kitasp.net/attachments/download/1883/KGTN2015040301.pdf)
 [(541 KB)] [kitasp 技術センター, 2015/06/11
17:44]

[KGTN2015040301-1.jpg](http://techreport.kitasp.net/attachments/download/1989/KGTN2015040301-1.jpg)

[表示](http://techreport.kitasp.net/attachments/1989/KGTN2015040301-1.jpg "表示")
 [(18 KB)] [kitasp 技術センター, 2015/06/18
14:21]

[KGTN2015040301-21.jpg](http://techreport.kitasp.net/attachments/download/1990/KGTN2015040301-21.jpg)

[表示](http://techreport.kitasp.net/attachments/1990/KGTN2015040301-21.jpg "表示")
 [(22.5 KB)] [kitasp 技術センター, 2015/06/18
14:21]

[KGTN2015040301-22.jpg](http://techreport.kitasp.net/attachments/download/1991/KGTN2015040301-22.jpg)

[表示](http://techreport.kitasp.net/attachments/1991/KGTN2015040301-22.jpg "表示")
 [(26.5 KB)] [kitasp 技術センター, 2015/06/18
14:21]

[KGTN2015040301-31.jpg](http://techreport.kitasp.net/attachments/download/1992/KGTN2015040301-31.jpg)

[表示](http://techreport.kitasp.net/attachments/1992/KGTN2015040301-31.jpg "表示")
 [(43.8 KB)] [kitasp 技術センター, 2015/06/18
14:21]

[KGTN2015040301-32.jpg](http://techreport.kitasp.net/attachments/download/1993/KGTN2015040301-32.jpg)

[表示](http://techreport.kitasp.net/attachments/1993/KGTN2015040301-32.jpg "表示")
 [(19.7 KB)] [kitasp 技術センター, 2015/06/18
14:21]

[KGTN2015040301-41.jpg](http://techreport.kitasp.net/attachments/download/1994/KGTN2015040301-41.jpg)

[表示](http://techreport.kitasp.net/attachments/1994/KGTN2015040301-41.jpg "表示")
 [(23.5 KB)] [kitasp 技術センター, 2015/06/18
14:21]

[KGTN2015040301-42.jpg](http://techreport.kitasp.net/attachments/download/1995/KGTN2015040301-42.jpg)

[表示](http://techreport.kitasp.net/attachments/1995/KGTN2015040301-42.jpg "表示")
 [(16.3 KB)] [kitasp 技術センター, 2015/06/18
14:21]

[KGTN2015040301-5.jpg](http://techreport.kitasp.net/attachments/download/1996/KGTN2015040301-5.jpg)

[表示](http://techreport.kitasp.net/attachments/1996/KGTN2015040301-5.jpg "表示")
 [(17.5 KB)] [kitasp 技術センター, 2015/06/18
14:21]


 


 

