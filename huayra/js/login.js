    function open(){
        //document.getElementByClassName("login").style.visibility="visible";
        //document.getElementByClassName("login").style.display="visible";
        document.getElementById("login").style.display="block";
        document.getElementById("login_hidden").style.display="block";
    }
    function close(){
        document.getElementById("login").style.display="none";
        document.getElementById("login_hidden").style.display="none";
    }

    function check(){
        var userName=document.getElementById("username");
        var passWord=document.getElementById("password");
        if(userName.value==""){
            alert("用户名不能为空");
            userName.focus();
            return false;
        }else if(passWord.value.length<6){
            alert("密码太短,至少6位");
            passWord.focus();
            return false;
        }else{
            document.getElementById("login_hidden").style.display="none";
            alert("登录成功");
            document.getElementById("login").style.display="none";

            return true;
        }
        
    }