﻿+++
title = "[GGH4.X-5.X] 更新プログラム KB3058515 を適用後，ActiveXクライアントのインストールで 「このWebサイトのアドオンは実行できませんでした」 と表示され，インストール処理が失敗する．"
date = "2015-07-09"
tags = ["技術ノート"]
categories = ["tech"]
banner = "img/technote.jpg"
+++

-----------------------------------------------------------------------------------------------------------------------------

*技術ノート

2015/07/09*


[番号]
技術ノート KGTN 2015062901

[現象]
[GGH4.X-5.X] 更新プログラム KB3058515
を適用後，ActiveXクライアントのインストールで
「このWebサイトのアドオンは実行できませんでした」
と表示され，インストール処理が失敗する．

[説明]
この現象は，更新プログラム KB3058515
の不具合に起因していると考えられます
（他のActiveXのソフトウエアでも多数の報告があります）
．この不具合が修正されるまで，以下の何れかの方法で対処をお願いします．

1.更新プログラム KB3058515 をアンインストールする．
2.ActiveXクライアントのインストールに先立ち， IEを 「管理者として実行」
で起動する．

上記２の方法でActiveXクライアントをインストールした場合，それ以降はIEを
「管理者として実行」
で起動することなくGGサーバーにログオンすることが出来ます （つまり，
「管理者として実行」
はActiveXクライアントのインストール時にのみ必要です）
．なお，GGH5.XのIE用のアドオン （シングルユーザー）
ではこの現象は発生しません．


### ファイル

 
 


[KGTN2015062901.pdf](http://techreport.kitasp.net/attachments/download/2148/KGTN2015062901.pdf)
 [(57.4 KB)] [kitasp 技術センター, 2015/07/09
16:06]


 


 
