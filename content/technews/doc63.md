+++
title = "[GGH4.X] ActiveXクライアントの環境で，ユーザー名とパスワードをクライアント側 （IE） で入力し，その情報を元にGGサーバーへログオンする方法を知りたい．"
date = "2015-06-12"
ttags = ["技術ノート"]
tcategories = ["tech"]
banner = "img/technote.jpg"
+++

-----------------------------------------------------------------------------------------------------------------------------

*技術ノート

2015/06/12*


[番号]
技術ノート KGTN 2015041601

[現象]
[GGH4.X]
ActiveXクライアントの環境で，ユーザー名とパスワードをクライアント側
（IE） で入力し，その情報を元にGGサーバーへログオンする方法を知りたい．

[説明]
例えば，以下のような Javascript のページ （ggLogon.html） を logon.html
と同じフォルダに作成し，そのページにアクセスすることで，ユーザー名とパスワードをクライアント側
（IE）
で入力し，その情報を元にGGサーバーへログオンすることが出来ます．なお，このスクリプトでは，ログオン処理用のウインドウ
（logon.htmlを使用） を一時的に表示します．

![](http://techreport.kitasp.net/attachments/download/2045/KGTN2015041601.jpg)

    <html>
    <head>
    <title>ggLogon.html</title>
    <link rel=stylesheet type="text/css" href="style.css">
    <script type="text/javascript">
    <!--
    var win;
    function ggLogon()
    {
    var user,pass,args;
    // ユーザー名とパスワードを取得する
    user = document.ggLogonForm.ggLogonUser.value;
    pass = document.ggLogonForm.ggLogonPass.value;
    if((user.length == 0)||(pass.lenght == 0))
    {
    alert("ユーザー名とパスワードは省略できません。");
    return;
    }
    // 起動パラメタを組み立てる
    args = '?user=' + encodeURIComponent(user);
    args += '&password=' + encodeURIComponent(pass);
    args += '&autoclose=true';
    // ユーザー名とパスワードをクリアする
    document.ggLogonForm.ggLogonUser.value = "";
    document.ggLogonForm.ggLogonPass.value = "";
    // 別ウインドウでログオン処理を行う
    win = window.open("logon.html" + args,"_blank","width=240,height=120");
    setTimeout("ggLogonSub()",3000);
    }
    function ggLogonSub()
    {
    // ログオン処理のウインドウを閉じる
    win.close();
    }
    // -->
    </script>
    </head>

    <body>
    <center><img src="logon_logo.png" border=0></center>
    <form name="ggLogonForm">
    <!-- 枠：開始 ---> <center><table border=1><tr><td>
    <table>
    <tr>
    <td colspan=2" align="center">
    <p>
    GO-Global サーバーへ接続します。<br>
    ユーザー名とパスワードを入力して下さい。<br><br>
    </p>
    </td>
    </tr>
    <tr>
    <td align="right">ユーザー名</td>
    <td><input type="text" size=30 name="ggLogonUser"></td>
    </tr>
    <tr>
    <td align="right">パスワード</td>
    <td><input type="password" size=30 name="ggLogonPass"></td>
    </tr>
    <tr>
    <td colspan=2 align="right"><input type="button" value="ログオン" 
    onclick="ggLogon()"></td>
    </tr>
    </table>
    <!-- 枠：終了 ---> </td></tr></table></center>
    </form>
    </body>
    </html>


### ファイル

 
 


[KGTN2015041601.pdf](http://techreport.kitasp.net/attachments/download/1898/KGTN2015041601.pdf)
 [(92.9 KB)] [kitasp 技術センター, 2015/06/12
15:57]

[KGTN2015041601.jpg](http://techreport.kitasp.net/attachments/download/2045/KGTN2015041601.jpg)

[表示](http://techreport.kitasp.net/attachments/2045/KGTN2015041601.jpg "表示")
 [(20.2 KB)] [kitasp 技術センター, 2015/06/22
17:48]


 


 

