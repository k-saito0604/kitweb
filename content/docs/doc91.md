+++
title = "[GGH4.X] GGの接続画面でコンピューター名を指定したが，ログオン画面が表示されない．"
date = "2015-06-11"
tags = ["技術ノート"]
categories = ["tech"]
banner = "img/technote.jpg"
+++

-----------------------------------------------------------------------------------------------------------------------------

*技術ノート

2015/06/11*


[番号]
技術ノート KGTN 2015020401

[現象]
[GGH4.X]
GGの接続画面でコンピューター名を指定したが，ログオン画面が表示されない．

[説明]
GGの接続画面でコンピューター名を指定してログオン画面が表示されない場合は，接続画面および暫く待った後に表示されるエラー画面を確認して下さい．

接続画面
![](http://techreport.kitasp.net/attachments/download/1951/KGTN2015020401-1.jpg)

エラー画面
![](http://techreport.kitasp.net/attachments/download/1952/KGTN2015020401-2.jpg)

このような場合は，先ず下記のように接続先としてコンピューター名でなくIPアドレスを指定してログオン画面が表示されるかどうか確認して下さい．この方法でログオン画面が表示される場合は，GGの問題ではなくネットワーク環境の問題
（名前解決） ですので，ネットワーク管理者等へお問い合わせ下さい．
![](http://techreport.kitasp.net/attachments/download/1953/KGTN2015020401-3.jpg)

IPアドレスを指定してもログオンダイアログが表示されない場合は，GGサーバーのWindowsがサポート対象外の環境
（古いサービスパックが適用されている，サポート対象外の更新プログラムが適用されている等）
か，またはファイアウォールが接続を拒否していると考えられます．これらの内容をご確認下さい．


### ファイル

 
 


[KGTN2015020401.pdf](http://techreport.kitasp.net/attachments/download/1851/KGTN2015020401.pdf)
 [(80.7 KB)] [kitasp 技術センター, 2015/06/11
17:09]

[KGTN2015020401-1.jpg](http://techreport.kitasp.net/attachments/download/1951/KGTN2015020401-1.jpg)

[表示](http://techreport.kitasp.net/attachments/1951/KGTN2015020401-1.jpg "表示")
 [(19.4 KB)] [kitasp 技術センター, 2015/06/17
16:16]

[KGTN2015020401-2.jpg](http://techreport.kitasp.net/attachments/download/1952/KGTN2015020401-2.jpg)

[表示](http://techreport.kitasp.net/attachments/1952/KGTN2015020401-2.jpg "表示")
 [(17.2 KB)] [kitasp 技術センター, 2015/06/17
16:16]

[KGTN2015020401-3.jpg](http://techreport.kitasp.net/attachments/download/1953/KGTN2015020401-3.jpg)

[表示](http://techreport.kitasp.net/attachments/1953/KGTN2015020401-3.jpg "表示")
 [(18.5 KB)] [kitasp 技術センター, 2015/06/17
16:16]


 


 

