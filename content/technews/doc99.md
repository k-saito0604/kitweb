+++
title = "[GGH5.X] HostProperties.xml の内容は GGH4.8 → GGH5.0 でどう変ったのか？"
date = "2015-06-12"
ttags = ["技術ノート"]
tcategories = ["tech"]
banner = "img/technote.jpg"
+++

-----------------------------------------------------------------------------------------------------------------------------

*技術ノート

2015/06/12*


[番号]
技術ノート KGTN 2015060404

[現象]
[GGH5.X] HostProperties.xml の内容は GGH4.8 → GGH5.0
でどう変ったのか？

[説明]
GGH4.8 → GGH5.0 で追加変更された HostProperties.xml の内容
（プロパティ） は以下の通りです．

    <!-- 追加：接続監視機能関連 -->
    <property id="MonitoringInterval" group="ConnectionMonitoring" type="UINT32">
    <value>60</value>
    </property>
    <property id="PoorLatencyMinimum" group="ConnectionMonitoring" type="UINT32">
    <value>200</value>
    </property>
    <property id="FairLatencyMinimum" group="ConnectionMonitoring" type="UINT32">
    <value>120</value>
    </property>
    <property id="GoodLatencyMinimum" group="ConnectionMonitoring" type="UINT32">
    <value>50</value>
    </property>
    <property id="ExcellentLatencyMinimum" group="ConnectionMonitoring" type="UINT32">
    <value>20</value>
    </property>
    <property id="PoorInputRateMaximum" group="ConnectionMonitoring" type="UINT32">
    <value>20</value>
    </property>
    <property id="FairInputRateMaximum" group="ConnectionMonitoring" type="UINT32">
    <value>50</value>
    </property>
    <property id="GoodInputRateMaximum" group="ConnectionMonitoring" type="UINT32">
    <value>100</value>
    </property>
    <property id="ExcellentInputRateMaximum" group="ConnectionMonitoring" type="UINT32">
    <value>200</value>
    </property>
    <property id="PoorOutputRateMaximum" group="ConnectionMonitoring" type="UINT32">
    <value>20</value>
    </property>
    <property id="FairOutputRateMaximum" group="ConnectionMonitoring" type="UINT32">
    <value>50</value>
    </property>
    <property id="GoodOutputRateMaximum" group="ConnectionMonitoring" type="UINT32">
    <value>100</value>
    </property>
    <property id="ExcellentOutputRateMaximum" group="ConnectionMonitoring" type="UINT32">
    <value>200</value>
    </property>

    <!-- 変更：最大の色深度を32 ビットへ -->
    <property id="SessionMaxColorDepth" group="Miscellaneous" type="UINT32">
    <value>32</value>
    </property>
    <!-- 新規：デスクトップ機能関連 -->
    <property id="InitializeProfileWithExplorer" group="Miscellaneous" type="UINT32">
    <value>1</value>
    </property>
    <property id="LaunchDwmInSession_NT62Plus" group="Miscellaneous" type="BOOL">
    <value>false</value>
    </property>
    <property id="AllowDesktop" group="Miscellaneous" type="BOOL">
    <value>false</value>
    </property>


### ファイル

 
 


[KGTN2015060404.pdf](http://techreport.kitasp.net/attachments/download/1918/KGTN2015060404.pdf)
 [(63.1 KB)] [kitasp 技術センター, 2015/06/12
16:30]


 


 

