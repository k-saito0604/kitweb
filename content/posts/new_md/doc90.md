+++
title = "[GGH4.X"
date = "2015-01-16"
tags = ["技術ノート"]
categories = ["tech"]
banner = "img/technote.jpg"
+++

-----------------------------------------------------------------------------------------------------------------------------

*技術ノート

2015/01/16*


[番号]
技術ノート KGTN 2015010801

[現象]
[GGH4.X-5.X] GGEasyLogon とはどんなツールなのか？

[説明]
GGのWindowsクライアントを起動するツール （一般ユーザー向け）
で，事前に設定ファイルにGGサーバー毎の接続情報を登録することで，GGサーバーを一覧から選んで
「１クリックで」
接続することが出来ます．接続後は自動的に最小化状態になり，GGサーバーとの接続が終了すると自動的に復元します．

![](http://techreport.kitasp.net/attachments/download/1955/KGTN2015010801-1.jpg)
[ボタン]
接続 ： 選択した接続先にログオンします．
切断 ： ログオン中のセッションを強制切断します．
詳細 ： 接続先の詳細情報 （接続先詳細画面） を表示します．
閉じる ： プログラムを終了します．

![](http://techreport.kitasp.net/attachments/download/1956/KGTN2015010801-2.jpg)
[ボタン]
追加/上書き　： 詳細情報を接続先として登録します．
削除 ： 詳細情報の接続先を削除します．
閉じる ： プログラムを終了します．

[設定ファイル]
接続先の一覧 （詳細情報） は，同じフォルダにある GGEasyLogon.ini
に保持されます．なお，セキュリティーの観点からパスワードは暗号化され，かつ他のクライアント
（パソコン） で登録されたパスワードは利用することが出来ません
（パスワードを入力し上書きして下さい） ．

    [WS2008R2@192.168.102.81] ‘ 接続先（名称）
    host = 192.168.102.81 ‘ アドレス
    port = 491 ‘ ポート番号
    user = Administrator ‘ ユーザー名
    pass = <Password> ‘ パスワード
    opts = -qt 0 -mx 32 ‘ その他の起動パラメタ
    [WS2012R2@192.168.102.61]
    host = 192.168.102.61
    port = 491
    user = Administrator
    pass =
    $$948BBA5E1AC0F6ACB589737605122B7DCDF52FC727
    BDE516CB47967FAC2C917BD6C97377EF9F8DAB6CE76
    984CE248003B37B3D19E9
    opts =

GGのクライアントのパスは，Ver5.Xの
シングルユーザー・クライアントが配置されるフォルダ
LOCALAPPDATAGraphOnGO-GlobalClient
およびWindowsクライアントが設定するレジストリの値から得ますが，見つからない場合や他のパスに存在する場合は，下記のように
default セクションでキー gg-client にフルパスを設定して下さい．

設定ファイル： GGEasyLogon.ini

    [default]
    gg-client = C:GraphOnClientgg-client.exe


### ファイル

 
 


[KGTN2015010801.pdf](http://techreport.kitasp.net/attachments/download/1938/KGTN2015010801.pdf)
 [(125 KB)] [kitasp 技術センター, 2015/06/17
15:14]

[KGTN2015010801-1.jpg](http://techreport.kitasp.net/attachments/download/1955/KGTN2015010801-1.jpg)

[表示](http://techreport.kitasp.net/attachments/1955/KGTN2015010801-1.jpg "表示")
 [(44.4 KB)] [kitasp 技術センター, 2015/06/17
16:28]

[KGTN2015010801-2.jpg](http://techreport.kitasp.net/attachments/download/1956/KGTN2015010801-2.jpg)

[表示](http://techreport.kitasp.net/attachments/1956/KGTN2015010801-2.jpg "表示")
 [(33.3 KB)] [kitasp 技術センター, 2015/06/17
16:28]


 


 

