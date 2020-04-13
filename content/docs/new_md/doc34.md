+++
title = "[GGH5.X] GGH4.X と比較して GGH5.X はどのような点が違うのか？"
date = "2015-06-12"
tags = ["技術ノート"]
categories = ["tech"]
banner = "img/technote.jpg"
+++

-----------------------------------------------------------------------------------------------------------------------------

*技術ノート

2015/06/12*


[番号]
技術ノート KGTN 2015050701

[現象]
[GGH5.X] GGH4.X と比較して GGH5.X はどのような点が違うのか？

[説明]
GGW3.X → GGH4.X
では，アプリケーション配信のアーキテクチャ等が全面的に変更されたため，全く互換性がありませんでした．今回の
GGH4.X → GGH5.X
では，このような全面的な変更はありませんので，新機能や不具合修正の部分等を除き，相互に互換性があります
（注意： Windows Server 2008 (32bit/64bit)
はサポート対象外となりました．なお， Windows Server 2008 R2 (64bit)
については従来通りサポート対象です） ．GGH5.0 の新機能は以下の通りです．

１．一般ユーザー向けクライアント
GGH5.Xのクライアント （Windowsクライアントとアドオン）
は，管理者権限を持たない一般ユーザーでもインストール出来るようになりました．新しいインストーラーは，ウエッブサーバー上の
WebClients ディレクトリに配置されています．

-   gg-client.desktop.exe: 従来のWindowsクライアントに相当
-   gg-client.chrome.exe: Chrome用のアドオン
-   gg-client.firefox.exe: Firefox用のアドオン
-   gg-client.ie.exe: 従来のActiveXクライアントに相当

これらのインストーラーは LOCALAPPDATAGraphOnGO-GlobalClient
ディレクトリにクライアントの実行ファイルをインストールします．アドオンのインストール完了後にブラウザを再起動すると，
以下のようなURL （サンプル）
を介してGGサーバーへアクセス出来るようになります．

<http://???/logon.html?host=192.168.102.30&user=Administrator&password=myPass>

![](http://techreport.kitasp.net/attachments/download/2112/KGTN2015050701-1.jpg)

２．Windowsテーマ対応
Windows 7
またはそれ以降のクライアント環境で，サーバー側で指定されたテーマでアプリケーションが表示されるようになりました．

![](http://techreport.kitasp.net/attachments/download/2108/KGTN2015050701-211.jpg)

![](http://techreport.kitasp.net/attachments/download/2109/KGTN2015050701-212.jpg)

３．高解像度ディスプレイ対応
クライアント側の文字等のサイズ設定が，GG上で動作するアプリケーションにも反映されるようになりました（DPIスケーリング）．下記の例では，拡大表示
（テキスト等） の設定が，バージョン5.0のみに反映されています．

![](http://techreport.kitasp.net/attachments/download/2110/KGTN2015050701-221.jpg)

![](http://techreport.kitasp.net/attachments/download/2111/KGTN2015050701-222.jpg)

４．Windowsデスクトップのサポート
Windows デスクトップ （スタートメニューやタスクバーなど）
にアクセス出来るようになりました．Windows
デスクトップにアクセスするには，以下のパラメタを追加して下さい．

-   コマンドライン： -desktop
-   アドオン： &desktop=true

セッションの切断は，セッションのウインドウ（デスクトップの枠）を閉じて下さい．セッションの終了は，デスクトップで
「ログオフ」 または 「サインアウト」 処理を行って下さい．

管理者は，設定ファイル HostProperties.xml 中の AllowDesktop プロパティに
false を指定することで，この Windows
デスクトップ機能を無効にすることが出来ます （既定値は false です） ．

![](http://techreport.kitasp.net/attachments/download/2113/KGTN2015050701-3.jpg)

５．オーディオ機能の改良
WS2012R2の環境で，セッション毎に仮想オーディオディバイスがサポートされました．これにより，メールに添付されたmp3形式の音声ファイル等を再生することが可能になりました．

![](http://techreport.kitasp.net/attachments/download/2115/KGTN2015050701-41.jpg)

６．自動セッション再接続機能
クライアントのパラメタに自動セッション再接続機能が追加されました．下記のパラメタを指定することで，ネットワーク障害等によりサーバー～クライアント間でセッションが切断された時に，自動的にサスペンド状態にあるセッションに所定回数だけ
（x で回数を指定）
再接続を試みます．再接続の試行時に，下記の再接続ダイアログは表示されません．

-   コマンドライン： -autoreconnect x
-   アドオン： &autoreconnect=x

![](http://techreport.kitasp.net/attachments/download/2080/KGTN2015050701-42.jpg)

７．通信品質監視機能
サーバー～クライアント間の通信 「品質」
を監視する機能が追加されました．この機能により一時的なネットワークの遅延やサーバーやクライアントの過負荷による遅延等に関する情報もAPSログに記録されますので，障害解析等を効率的に行えるようになります．

![](http://techreport.kitasp.net/attachments/download/2081/KGTN2015050701-51.jpg)

８．クライアント側ログファイル
従来のクライアントではクライアントのログをサーバー側に保存していましたが，接続障害等が発生した場合に情報が記録されないという問題がありました．GGH5.Xのクライアントでは，
APPDATAGraphOnLogs
ディレクトリにログファイルを作成するようになりました．
![](http://techreport.kitasp.net/attachments/download/2082/KGTN2015050701-52.jpg)


### ファイル

 
 


[KGTN2015050701-42.jpg](http://techreport.kitasp.net/attachments/download/2080/KGTN2015050701-42.jpg)

[表示](http://techreport.kitasp.net/attachments/2080/KGTN2015050701-42.jpg "表示")
 [(8.97 KB)] [kitasp 技術センター, 2015/06/23
14:34]

[KGTN2015050701-51.jpg](http://techreport.kitasp.net/attachments/download/2081/KGTN2015050701-51.jpg)

[表示](http://techreport.kitasp.net/attachments/2081/KGTN2015050701-51.jpg "表示")
 [(25.6 KB)] [kitasp 技術センター, 2015/06/23
14:34]

[KGTN2015050701-52.jpg](http://techreport.kitasp.net/attachments/download/2082/KGTN2015050701-52.jpg)

[表示](http://techreport.kitasp.net/attachments/2082/KGTN2015050701-52.jpg "表示")
 [(25.3 KB)] [kitasp 技術センター, 2015/06/23
14:34]

[KGTN2015050701-211.jpg](http://techreport.kitasp.net/attachments/download/2108/KGTN2015050701-211.jpg)

[表示](http://techreport.kitasp.net/attachments/2108/KGTN2015050701-211.jpg "表示")
 [(18.5 KB)] [kitasp 技術センター, 2015/07/09
11:28]

[KGTN2015050701-212.jpg](http://techreport.kitasp.net/attachments/download/2109/KGTN2015050701-212.jpg)

[表示](http://techreport.kitasp.net/attachments/2109/KGTN2015050701-212.jpg "表示")
 [(15.4 KB)] [kitasp 技術センター, 2015/07/09
11:28]

[KGTN2015050701-221.jpg](http://techreport.kitasp.net/attachments/download/2110/KGTN2015050701-221.jpg)

[表示](http://techreport.kitasp.net/attachments/2110/KGTN2015050701-221.jpg "表示")
 [(62.1 KB)] [kitasp 技術センター, 2015/07/09
11:28]

[KGTN2015050701-222.jpg](http://techreport.kitasp.net/attachments/download/2111/KGTN2015050701-222.jpg)

[表示](http://techreport.kitasp.net/attachments/2111/KGTN2015050701-222.jpg "表示")
 [(16.5 KB)] [kitasp 技術センター, 2015/07/09
11:28]

[KGTN2015050701-1.jpg](http://techreport.kitasp.net/attachments/download/2112/KGTN2015050701-1.jpg)

[表示](http://techreport.kitasp.net/attachments/2112/KGTN2015050701-1.jpg "表示")
 [(18 KB)] [kitasp 技術センター, 2015/07/09
11:32]

[KGTN2015050701-3.jpg](http://techreport.kitasp.net/attachments/download/2113/KGTN2015050701-3.jpg)

[表示](http://techreport.kitasp.net/attachments/2113/KGTN2015050701-3.jpg "表示")
 [(18.7 KB)] [kitasp 技術センター, 2015/07/09
11:32]

[KGTN2015050701-41.jpg](http://techreport.kitasp.net/attachments/download/2115/KGTN2015050701-41.jpg)

[表示](http://techreport.kitasp.net/attachments/2115/KGTN2015050701-41.jpg "表示")
 [(28.8 KB)] [kitasp 技術センター, 2015/07/09
11:33]

[KGTN2015050701.pdf](http://techreport.kitasp.net/attachments/download/2153/KGTN2015050701.pdf)
 [(720 KB)] [kitasp 技術センター, 2015/07/09
16:08]


 


 

