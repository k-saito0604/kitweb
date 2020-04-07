+++
title = "[GGH4.X] Windowsクライアントで，特定アプリケーションを直接起動したい．"
date = "2011-09-02"
tags = ["技術ノート"]
categories = ["tech"]
banner = "img/technote.jpg"
+++

-----------------------------------------------------------------------------------------------------------------------------

*技術ノート

2011/09/02*


[番号]
技術ノート KGTN 2011090104

[現象]
[GGH4.X] Windowsクライアントで，特定アプリケーションを直接起動したい．

[説明]
Windowsクライアント gg-client.exe にパラメタ -a
を指定することで，特定アプリケーションのみを起動することが可能です
（つまりプログラム・ウインドウを表示せずにアプリケーションを起動）
．なお，アプリケーションの引数が必要な場合は，パラメタ -r
で指定して下さい．

1) GGに登録されたアプリケーションを表示名 （Display Name）
で起動する場合

gg-client.exe -h 192.168.102.1 -u myUser -p myPass -a Notepad -r
test.txt

2) 絶対パスでアプリケーションを指定して起動する場合

gg-client.exe -h 192.168.102.1 -u myUser -p myPass -a
"C:myAppswordpad.exe"

![](http://techreport.kitasp.net/attachments/download/1959/KGTN2011090104.jpg)


### ファイル

 
 


[KGTN2011090104.pdf](http://techreport.kitasp.net/attachments/download/1923/KGTN2011090104.pdf)
 [(62.5 KB)] [kitasp 技術センター, 2015/06/12
17:36]

[KGTN2011090104.jpg](http://techreport.kitasp.net/attachments/download/1959/KGTN2011090104.jpg)

[表示](http://techreport.kitasp.net/attachments/1959/KGTN2011090104.jpg "表示")
 [(18.5 KB)] [kitasp 技術センター, 2015/06/17
16:32]


 


 

