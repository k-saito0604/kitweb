+++
title = "[GGH4.X-5.X] GGが表示するダイアログボックス Sign In の情報 （内容） をクライアント側のプログラムで参照する方法を知りたい．"
date = "2015-07-09"
ttags = ["技術ノート"]
tcategories = ["tech"]
banner = "img/technote.jpg"
+++

-----------------------------------------------------------------------------------------------------------------------------

*技術ノート

2015/07/09*


[番号]
技術ノート KGTN 2015062401

[現象]
[GGH4.X-5.X] GGが表示するダイアログボックス "Sign In" の情報 （内容）
をクライアント側のプログラムで参照する方法を知りたい．

[説明]
IPアドレス間違い等によるダイアログボックスはクラス "#32770"
を持つ一般的なダイアログボックスですが， タイトルが "Sign In"
のダイアログボックスはクラス "DisplayClientWindowClass" を持つ
「サーバー側で表示されたダイアログボックス」 をクライアント側に
（視覚的に）
表示したものです．従って，この中の情報をクライアント側のプログラムで参照することは出来ません．

![](http://techreport.kitasp.net/attachments/download/2135/KGTN2015062401.jpg)


### ファイル





[KGTN2015062401.jpg](http://techreport.kitasp.net/attachments/download/2135/KGTN2015062401.jpg)

[表示](http://techreport.kitasp.net/attachments/2135/KGTN2015062401.jpg "表示")
 [(36.6 KB)] [kitasp 技術センター, 2015/07/09
14:05]

[KGTN2015062401.pdf](http://techreport.kitasp.net/attachments/download/2146/KGTN2015062401.pdf)
 [(137 KB)] [kitasp 技術センター, 2015/07/09
16:05]
