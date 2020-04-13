+++
title = "[Microsoft Azure] Microsoft Azure の仮想マシンに，仮想ネットワークの静的な （プライベート） IPアドレスを割り当てる方法は？"
date = "2015-07-30"
tags = ["技術ノート"]
categories = ["tech"]
banner = "img/technote.jpg"
+++

-----------------------------------------------------------------------------------------------------------------------------

*技術ノート

2015/07/30*


[番号]
技術ノート KGTN 2015072803

[現象]
[Microsoft Azure] Microsoft Azure
の仮想マシンに，仮想ネットワークの静的な （プライベート）
IPアドレスを割り当てる方法は？

[説明]
Azure PowerShell で，下記のコマンドを実行して下さい．

　> $VM = Get-AzureVM -ServiceName -Name
　> Set-AzureStaticVNetIP -VM $VM -IPAddress <IPアドレス> |
Update-AzureVM

![](http://techreport.kitasp.net/attachments/download/2165/KGTN2015072803-1.jpg)

なお，新しいポータルでは，下記のように画面から設定
（プライベートIPアドレス） することが出来ます．

![](http://techreport.kitasp.net/attachments/download/2166/KGTN2015072803-2.jpg)


### ファイル

 
 


[KGTN2015072803.pdf](http://techreport.kitasp.net/attachments/download/2164/KGTN2015072803.pdf)
 [(108 KB)] [kitasp 技術センター, 2015/07/30
17:10]

[KGTN2015072803-1.jpg](http://techreport.kitasp.net/attachments/download/2165/KGTN2015072803-1.jpg)

[表示](http://techreport.kitasp.net/attachments/2165/KGTN2015072803-1.jpg "表示")
 [(20.1 KB)] [kitasp 技術センター, 2015/07/30
17:10]

[KGTN2015072803-2.jpg](http://techreport.kitasp.net/attachments/download/2166/KGTN2015072803-2.jpg)

[表示](http://techreport.kitasp.net/attachments/2166/KGTN2015072803-2.jpg "表示")
 [(16.2 KB)] [kitasp 技術センター, 2015/07/30
17:10]


 


 

