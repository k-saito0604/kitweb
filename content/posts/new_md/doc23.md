+++
title = "[Microsoft Azure] Microsoft Azureの環境で， hopTo Work サーバーを構築する場合の注意点は？"
date = "2015-07-30"
tags = ["技術ノート"]
categories = ["tech"]
banner = "img/technote.jpg"
+++

-----------------------------------------------------------------------------------------------------------------------------

*技術ノート

2015/07/30*


[番号]
技術ノート KGTN 2015072904

[現象]
[Microsoft Azure] Microsoft Azureの環境で， hopTo Work
サーバーを構築する場合の注意点は？

[説明]
hopTo Work に依存した注意点は特にありません．弊社では，以下の手順で
hopTo Work サーバーの環境を構築しました．

1. 仮想ネットワークを作成 （カスタム作成で下記項目は既定値）
　　- DNS サーバーおよび VPN 接続
　　- 仮想ネットワーク アドレス空間
2. 仮想サーバー２台を上記ネットワークで構築
　　- "地域/アフィニティ グループ/仮想ネットワーク"
で上記１の仮想ネットワークを指定
3. 最初の仮想サーバーで Active Directory サーバーを構築
　　- 静的なプライベートIP アドレスを設定する
　　- 技術ノート KGTN#2015072803 を参照
4. ２台目の仮想サーバーで RDSサーバーを構築
　　- 上記３のサーバーのドメインに参加すること
　　- RDSのインストールはドメインの管理者権限が必要
　　- PowerShell で Enable-PSRemoting が実行すること
　　- セッション・コレクションを作成
　　- RemoteApp プログラムを公開 （ワードパッド等）
5. hopTo Work Agent をRDSサーバーにインストール
　　- hopToWorkAgent.exe を実行
　　- hopTo Control Panel を起動
　　- Configuration をクリック
　　- Start をクリックし Licensing, RDP Enabled, RDS Enabled
に×が無いことを確認


### ファイル

 
 


[KGTN2015072904.pdf](http://techreport.kitasp.net/attachments/download/2178/KGTN2015072904.pdf)
 [(72.4 KB)] [kitasp 技術センター, 2015/07/30
17:26]


 


 

