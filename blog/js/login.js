	function open(){
        document.getElementById("bg-login").style.display="block";
        document.getElementById("bg-hidden").style.display="block";
    }
    function close(){
        document.getElementById("bg-login").style.display="none";
        document.getElementById("bg-hidden").style.display="none";
    }
    function check(){
        var userName=document.getElementById("bg-login-account");
        var passWord=document.getElementById("bg-login-passwd");
        if(userName.value==""){
            alert("用户名不能为空");
            userName.focus();
            return false;
        }else if(passWord.value.length<6){
            alert("密码太短,至少6位");
            passWord.focus();
            return false;
        }else{
            document.getElementById("bg-hidden").style.display="none";
            document.getElementById("bg-login").style.display="none";
            alert("登录成功");
            return true;
        }
        
    }