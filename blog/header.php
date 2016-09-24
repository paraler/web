<html>
    <head>
        <meta charset="utf-8">
        <title>huayra</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script src="js/login.js" type="text/javascript" charset="utf-8" async ></script>
    </head>
<body>
    <div id="header" class="header">
        <div class="bg-logo">Huayra</div>
        <ul class="bg-nav">
            <li class="bg-home"><a href="index.php">home</a></li>
            <li class="bg-issue"><a href="issue.php">issue</a></li>
            <li class="bg-set"><a href="set.php">set</a></li>
        </ul>
        <div class="bg-login-button"><a href="javascript:open()">login</a></div>
    </div>


    <div  class="bg-login" id="bg-login">
       <center> <div class="bg-login-title">Member Login<span><a href="javascript:close();" class="close_login">关闭</a></span></div></center>
        <div class="bg-login-content">
            <div class="bg-login-input">
                <lable>account: <input type="text" name="bg-login-account" id="bg-login-list" /></lable>
            </div>
            <div class="bg-login-input">
                <label>passwd:&nbsp<input type="password" name="bg-login-passwd" id="bg-login-list"></label>
            </div>
        </div>
        <div><button class="bg-login-submit" onClick="javascript:check()">submit</button></div>
    </div>
    <div id="bg-hidden" class="bg-hidden"></div>
