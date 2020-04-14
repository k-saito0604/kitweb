+++
title = "[Windows] WS2008R2 (Windows Server 2008 R2) で PING を送っても応答が無い．"
date = "2015-06-11"
ttags = ["技術ノート"]
tcategories = ["tech"]
banner = "img/technote.jpg"
+++

-----------------------------------------------------------------------------------------------------------------------------

*技術ノート

2015/06/11*


[番号]
技術ノート KGTN 2015032501

[現象]
[Windows] WS2008R2 (Windows Server 2008 R2) で PING
を送っても応答が無い．

[説明]
WS2008R2は，デフォルトの設定で PING が通らないようになっています． PING
が通るようにするには "セキュリティが強化された Windows
ファイアウォール" の "受信の規則" の
"ファイルとプリンターの共有（エコー要求 ICMPv4 受信）"
を有効にして下さい．

![](http://techreport.kitasp.net/attachments/download/1988/KGTN2015032501.jpg)


### ファイル

 
 


[KGTN2015032501.pdf](http://techreport.kitasp.net/attachments/download/1880/KGTN2015032501.pdf)
 [(160 KB)] [kitasp 技術センター, 2015/06/11
17:41]

[KGTN2015032501.jpg](http://techreport.kitasp.net/attachments/download/1988/KGTN2015032501.jpg)

[表示](http://techreport.kitasp.net/attachments/1988/KGTN2015032501.jpg "表示")
 [(82.6 KB)] [kitasp 技術センター, 2015/06/18
14:02]


 


 

