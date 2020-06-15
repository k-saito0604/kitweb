+++
title = "[GGH4.X] Windows Vista / Windows 7 のクライアントで，個人設定で 「Aero のテーマ」 を選択すると，GGが表示するウインドウをドラッグした時等に反応が遅くなる．"
date = "2010-05-12"
ttags = ["技術ノート"]
tcategories = ["tech"]
banner = "img/technote.jpg"
+++

-----------------------------------------------------------------------------------------------------------------------------

*技術ノート

2010/05/12*


[番号]
技術ノート KGTN 2010051202

[現象]
[GGH4.X] Windows Vista / Windows 7 のクライアントで，個人設定で 「Aero
のテーマ」
を選択すると，GGが表示するウインドウをドラッグした時等に反応が遅くなる．

[説明]
Windows Vista / Windows 7 の 「ベーシックテーマ」 では従来のGDI
（Graphics Device Interface） で描画を行い， 「Aero のテーマ」 では
Direct3D で描画を行います．GGのクライアントはGDIベースで描画を行うため，
「Aero のテーマ」 が設定された環境では Windows の GDI → Direct3D
のエミュレーション処理が加わるため，「ベーシックテーマ」
に比べ描画のパフォーマンスが低下します．パフォーマンスの低下はクライアントの性能に依存しますが，もし実用上気になる場合は，
「ベーシックテーマ」 に変更して下さい．

補　足
Windows 7 の環境では，サービス Desktop Window Manager Session Manager
を停止 （スタートアップの種類を手動にして再起動）
することで，「ベーシックテーマ」
を設定した時と同じ描画パフォーマンスになります．但し，タスクバーのサムネイル，
Windows フリップ， Windows フリップ 3D 等は利用出来なくなります．
![](http://techreport.kitasp.net/attachments/download/1957/KGTN2010051202.jpg)


### ファイル

 
 


[KGTN2010051202.pdf](http://techreport.kitasp.net/attachments/download/1919/KGTN2010051202.pdf)
 [(96.2 KB)] [kitasp 技術センター, 2015/06/12
17:24]

[KGTN2010051202.jpg](http://techreport.kitasp.net/attachments/download/1957/KGTN2010051202.jpg)

[表示](http://techreport.kitasp.net/attachments/1957/KGTN2010051202.jpg "表示")
 [(70.8 KB)] [kitasp 技術センター, 2015/06/17
16:30]


 


 

