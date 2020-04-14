+++
title = "[GGH4.X] WS2012 (R2) 上で動作するGGサーバでマルチモニタ機能を使用すると画面が正常に表示されない．"
date = "2014-08-22"
ttags = ["技術ノート"]
tcategories=["tech"]
banner = "img/technote.jpg"
+++
---------------------------------------------------------------------------------------------------

*技術ノート
2014/08/22*

[番号]
技術ノート KGTN 2014081901

[現象]
[GGH4.X] WS2012 (R2)
上で動作するGGサーバでマルチモニタ機能を使用すると画面が正常に表示されない．

[説明]
WS2012 (R2)
の環境では，GGのマルチモニタ機能は正常に動作しません．これは現時点での制限事項となります．なお，
WS2008R2 の環境ではGGのマルチモニタ機能は正常に動作します．

    When using multi-monitors and connecting to hosts running Windows 8, 8.1 or Windows Server 2012 and
    2012 R2, display issues might occur when moving windows across the monitors and off-screen.

補　足
WS2012 (R2) + GGH4.X の環境では上記の制限事項が適用されますが， WS2012
(R2) + GGH5.X の環境ではマルチモニタ機能が正常に動作しております
（GGH5.0.021965で確認しました） ．なお，GGH4.8.2 Patch 1
およびそれ以降の GGH4.8
についても，この制限事項が適用されると考えられます．

### ファイル


[KGTN2014081901.pdf](http://techreport.kitasp.net/attachments/download/2196/KGTN2014081901.pdf) [(56.6 KB)] [kitasp 技術センター, 2015/09/02
16:21]
