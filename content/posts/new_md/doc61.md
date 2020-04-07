+++
title = "[GGH4.X] ActiveXクライアントの環境で，ユーザー名とパスワードとアプリケーション名をクライアント側 （IE） で入力し，その情報を元にGGサーバーへログオンする方法を知りたい．"
date = "2015-06-12"
tags = ["技術ノート"]
categories = ["tech"]
banner = "img/technote.jpg"
+++

-----------------------------------------------------------------------------------------------------------------------------

*技術ノート

2015/06/12*


[番号]
技術ノート KGTN 2015042301

[現象]
[GGH4.X]
ActiveXクライアントの環境で，ユーザー名とパスワードとアプリケーション名をクライアント側
（IE） で入力し，その情報を元にGGサーバーへログオンする方法を知りたい．

[説明]
例えば，以下のような Javascript のページ （ggLogon2.html） を logon.html
と同じフォルダに作成し，そのページにアクセスすることで，ユーザー名とパスワードとアプリケーション名をクライアント側
（IE）
で入力し，その情報を元にGGサーバーへログオンすることが出来ます．なお，このスクリプトでは，ログオン処理用のウインドウ
（logon.htmlを使用） を一時的に表示します．

![](http://techreport.kitasp.net/attachments/download/2046/KGTN2015042301.jpg)

    <html>
    <head>
    <title>ggLogon2.html</title>
    <link rel=stylesheet type="text/css" href="style.css">
    <script type="text/javascript">
    <!--
    var win;
    function ggLogon()
    {
    var user,pass,app;
    // ユーザー名とパスワードとアプリケーション名を取得する
    user = document.ggLogonForm.ggLogonUser.value;
    pass = document.ggLogonForm.ggLogonPass.value;
    if((user.length == 0)||(pass.lenght == 0))
    {
    alert("ユーザー名とパスワードは省略できません。");
    return;
    }
    app = document.ggLogonForm.ggLogonApp.value;
    // 起動パラメタを組み立てる
    args = '?user=' + encodeURIComponent(user);
    args += '&password=' + encodeURIComponent(pass);
    if(app.length > 0)
    {
    args += '&app=' + encodeURIComponent(app);
    }
    args += '&autoclose=true';
    // ユーザー名とパスワードとアプリケーション名をクリアする
    document.ggLogonForm.ggLogonUser.value = "";
    document.ggLogonForm.ggLogonPass.value = "";
    document.ggLogonForm.ggLogonApp.value = "";
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
    ユーザー名とパスワードとアプリケーション名を入力して下さい。<br>
    アプリケーション名が空欄の場合は Program Window が起動します。<br><br>
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
    <td align="right">アプリケーション名</td>
    <td><input type="app" size=30 name="ggLogonApp"></td>
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

 
 


[KGTN2015042301.pdf](http://techreport.kitasp.net/attachments/download/1901/KGTN2015042301.pdf)
 [(101 KB)] [kitasp 技術センター, 2015/06/12
16:04]

[KGTN2015042301.jpg](http://techreport.kitasp.net/attachments/download/2046/KGTN2015042301.jpg)

[表示](http://techreport.kitasp.net/attachments/2046/KGTN2015042301.jpg "表示")
 [(24 KB)] [kitasp 技術センター, 2015/06/22
17:52]


 


 

