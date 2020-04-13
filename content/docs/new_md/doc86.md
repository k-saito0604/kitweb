+++
title = "[Windows] WS2008R2で IE のエラーが発生したが，ダンプファイルの採取方法は？"
date = "2015-06-11"
tags = ["技術ノート"]
categories = ["tech"]
banner = "img/technote.jpg"
+++

-----------------------------------------------------------------------------------------------------------------------------

*技術ノート

2015/06/11*


[番号]
技術ノート KGTN 2015021001

[現象]
[Windows] WS2008R2で IE
のエラーが発生したが，ダンプファイルの採取方法は？

[説明]
レジストリに以下の設定を行うことで 「ユーザー モード プロセス ダンプ」
を採取することが出来ます．

![](http://techreport.kitasp.net/attachments/download/1961/KGTN2015021001.jpg)

HKLMSOFTWAREMicrosoftWindowsWindows Error ReportingLocalDumps
DumpFolder REG_EXPAND_SZ C:DumpFiles
DumpCount REG_DWORD 10 (The maximum number of dump files)
DumpType REG_DWORD 2 (Full dump)

詳細については，下記ページをご覧下さい．

<https://msdn.microsoft.com/ja-jp/library/windows/desktop/bb787181.aspx>
Collecting User-Mode Dumps

<https://msdn.microsoft.com/en-us/library/windows/desktop/bb513638%28v=vs.85%29.aspx>
WER Settings


### ファイル

 
 


[KGTN2015021001.pdf](http://techreport.kitasp.net/attachments/download/1852/KGTN2015021001.pdf)
 [(70.6 KB)] [kitasp 技術センター, 2015/06/11
17:10]

[KGTN2015021001.jpg](http://techreport.kitasp.net/attachments/download/1961/KGTN2015021001.jpg)

[表示](http://techreport.kitasp.net/attachments/1961/KGTN2015021001.jpg "表示")
 [(70.4 KB)] [kitasp 技術センター, 2015/06/17
16:44]


 


 

