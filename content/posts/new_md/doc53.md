+++
title = "[GGH5.X] パラメタ -desktop (&desktop=true) を指定したが，サーバーのデスクトップが表示されない．"
date = "2015-06-12"
tags = ["技術ノート"]
categories = ["tech"]
banner = "img/technote.jpg"
+++

-----------------------------------------------------------------------------------------------------------------------------

*技術ノート

2015/06/12*


[番号]
技術ノート KGTN 2015052601

[現象]
[GGH5.X] パラメタ -desktop (&desktop=true)
を指定したが，サーバーのデスクトップが表示されない．

[説明]
GGの既定の設定では，サーバーのデスクトップ表示機能は無効です．以下の手順でサーバーのデスクトップ表示機能を有効にして下さい．

1.サービス GO-Global Application Publishing Service を停止する．
2.テキストエディタで ALLUSERSPROFILEGraphOnHostProperties.xml
を開く．
3.プロパティ AllowDesktop の値に true を設定する．

    <property id="AllowDesktop" group="Miscellaneous" type="BOOL">
    <value>true</value>
    </property>

4.%ALLUSERSPROFILE%GraphOnHostProperties.xml を保存する．
5.サービス GO-Global Application Publishing Service を開始する．

上記3でプロパティ AllowDesktop が見つからない場合は，枠内の情報 （行）
を追加して下さい．

![](http://techreport.kitasp.net/attachments/download/2086/KGTN2015052601.jpg)


### ファイル

 
 


[KGTN2015052601.pdf](http://techreport.kitasp.net/attachments/download/1911/KGTN2015052601.pdf)
 [(134 KB)] [kitasp 技術センター, 2015/06/12
16:26]

[KGTN2015052601.jpg](http://techreport.kitasp.net/attachments/download/2086/KGTN2015052601.jpg)

[表示](http://techreport.kitasp.net/attachments/2086/KGTN2015052601.jpg "表示")
 [(25.8 KB)] [kitasp 技術センター, 2015/06/23
14:43]


 


 

