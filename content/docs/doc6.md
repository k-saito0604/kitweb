+++
title = "[GGH5.X] APS が開始しない．ログを見ると A Bug Check (BSOD) was detected ... という記録がある．"
date = "2015-09-02"
ttags = ["技術ノート"]
tcategories=["tech"]
banner = "img/technote.jpg"
+++
--------------------------------------------------------------------------------------------------

*技術ノート
2015/09/02*

[番号]
技術ノート KGTN 2015080701

[現象]
[GGH5.X] APS が開始しない．ログを見ると "A Bug Check (BSOD) was
detected ..." という記録がある．

[説明]
非互換性等によりバグチェック （BSOD）
が発生し，GGが無効化されたのが原因だと思われます．ファイル
C:Windowssystem32DRIVERSDBCM.bin
を削除し，サーバーを再起動して下さい．

    aps (1088) A Bug Check (BSOD) was detected from a previous system start and GO-Global has been
    disabled. To re-enable GO-Global, delete the C:Windowssystem32DRIVERSDBCM.bin file and restart the
    computer. To prevent a Bug Check from disabling GO-Global, create the DWORD registry value
    [HKEY_LOCAL_MACHINESYSTEMCurrentControlSetServicesggseDBCM_Disabled] and set it to
    0x00000001. (Diagnostic DBCM bits 0x01ff0000)

### ファイル


[KGTN2015080701.pdf](http://techreport.kitasp.net/attachments/download/2204/KGTN2015080701.pdf)[(59.3 KB)] [kitasp 技術センター, 2015/09/02
16:32]
