+++
title = "[GGH4.X-5.X] Mac OS X Client は，日本語キーボードをサポートしているのか？"
date = "2013-03-01"
ttags = ["技術ノート"]
tcategories = ["tech"]
banner = "img/technote.jpg"
+++

-----------------------------------------------------------------------------------------------------------------------------

*技術ノート

2013/03/01*


[番号]
技術ノート KGTN 2011082201

[現象]
[GGH4.X-5.X] Mac OS X Client
は，日本語キーボードをサポートしているのか？

[説明]
いいえ，管理者ガイド （Admin Guide） の通り U.S. / French / German
の各キーボードのみをサポートします．しかしながら， GGH4.5.0.13063
またはそれ以降の環境ではクライアント側IME機能がサポートされておりますので，この機能を利用することで
Mac OS X
のかな漢字変換をそのまま利用することが出来ます．クライアント側IME機能は，以下のようにパラメタ
ClientSideIME を指定することで有効となります．

    コマンドラインの場合
    /Applications/GO-Global.app/Contents/MacOS/GO-Global -h 192.168.102.81 -kb ClientSideIME dummy
    ハイパーリンクの場合
    http://192.168.102.81/logon.html?keyboard=ClientSideIME

![](http://techreport.kitasp.net/attachments/download/2101/KGTN2011082201.jpg)

補　足
キーボードのマッピングファイル （Client Keyboard Mapping Files）
を修正する方法もあります （非推奨） ．この英語用のファイルは
/etc/gg-client/kbd/us.kbm
にありますので，これを弊社が作成した日本語用のファイル ja.kbm
で置き換えることで，英数字や記号等を正しく入力出来るようになります．なお
ALT-半角/全角 は， 「英数」 「かな」 キーに対応付いています．

上記説明のパス /etc/gg-client/kbd/us.kbm が存在しない場合は，
/etc/GO-Global/kbd/us.kbm
と読み替えて下さい．以下は，実行するコマンドのサンプルです．

　# cd /etc/GO-Global/kbd
　# mv us.kbm us.kbm.original
　# cp /Users/kitASP/Desktop/Mac_OS_X-JA_KBM/ja.kbm us.kbm


### ファイル

 
 


[KGTN2011082201.jpg](http://techreport.kitasp.net/attachments/download/2101/KGTN2011082201.jpg)

[表示](http://techreport.kitasp.net/attachments/2101/KGTN2011082201.jpg "表示")
 [(65.1 KB)] [kitasp 技術センター, 2015/07/08
17:10]

[KGTN2011082201.pdf](http://techreport.kitasp.net/attachments/download/2150/KGTN2011082201.pdf)
 [(306 KB)] [kitasp 技術センター, 2015/07/09
16:07]


 


 

