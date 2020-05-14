+++
title = "[GGH4.X-5.X] WS2012R2 の環境で，サーバー上にセッションが残る．"
date = "2015-07-09"
ttags = ["技術ノート"]
tcategories = ["tech"]
banner = "img/technote.jpg"
+++

-----------------------------------------------------------------------------------------------------------------------------

*技術ノート

2015/07/09*


[番号]
技術ノート KGTN 2015061501

[現象]
[GGH4.X-5.X] WS2012R2 の環境で，サーバー上にセッションが残る．

[説明]
HKLMSOFTWAREGraphOnGO-GlobalSystemProcessesJpnIME.exe
REG_DWORD 0 というレジストリを登録して下さい．この設定を加えることで，
JpnIME.exe がセッション上に存在して，セッションが消滅しない
（セッションが残る）
という現象が解消します．なお，明示的にサイン・アウトした場合は，この現象は発生しません．

![](http://techreport.kitasp.net/attachments/download/2122/KGTN2015061501.jpg)


### ファイル

 
 


[KGTN2015061501.jpg](http://techreport.kitasp.net/attachments/download/2122/KGTN2015061501.jpg)

[表示](http://techreport.kitasp.net/attachments/2122/KGTN2015061501.jpg "表示")
 [(37.1 KB)] [kitasp 技術センター, 2015/07/09
11:55]

[KGTN2015061501.pdf](http://techreport.kitasp.net/attachments/download/2141/KGTN2015061501.pdf)
 [(66.3 KB)] [kitasp 技術センター, 2015/07/09
16:03]


 


 

