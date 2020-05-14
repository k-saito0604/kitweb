+++
title = "[GGW3.2.1/GGH4.X] ネットワーク障害時に，確実にセッションを終了させるお勧めの設定は？"
date = "2010-09-17"
ttags = ["技術ノート"]
tcategories = ["tech"]
banner = "img/technote.jpg"
+++

-----------------------------------------------------------------------------------------------------------------------------

*技術ノート

2010/09/17*


[番号]
技術ノート KGTN 2010091703

[現象]
[GGW3.2.1/GGH4.X]
ネットワーク障害時に，確実にセッションを終了させるお勧めの設定は？

[説明]
クラスタマネージャの Server Options (GGW3.2.1) / Host Options (GGH4.X) →
Session Shutdown → Disconnect sessions terminate で After 1 minutes
を設定することをお勧めします． Immediately
の方が直ちにセッションが終了するように思えますが，しかしデフォルトの仕様では
「ネットワーク障害による予期せぬ切断に限り」
3日間セッションが維持されます．このため，確実に早期にセッションを終了させるため
After 1 minutes を設定します．


### ファイル

 
 


[KGTN2010091703.pdf](http://techreport.kitasp.net/attachments/download/1921/KGTN2010091703.pdf)
 [(53.4 KB)] [kitasp 技術センター, 2015/06/12
17:30]


 


 

