function getQues(uname,cat)
{
            var xmlhttp;
                if (window.XMLHttpRequest) {
                    xmlhttp = new XMLHttpRequest();
                } else {
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function () {
                    if (xmlhttp.readyState == 4) {
                        var resp =  xmlhttp.responseText; 
                        var msg;
                        if(parseInt(resp)==0)
                        {
                            msg="invalid username or wrong account type <a onclick='hide(uname_msg)';>x</a>";
                            document.getElementById("uname_msg").innerHTML=msg;
                            document.getElementById("uname_msg").style.display="inline-block";
                        }
                        else
                        document.getElementById("ques").innerHTML=resp;
                    }
                };
                xmlhttp.open("GET", "DBHandler.php?uname="+uname+"&tbl="+cat+"&op=5", true);
                xmlhttp.send();	
}
function hide(ele)
{
ele.style.display="none";
}
function valiPass(pass)
{
    if(pass.value.length<8)
    {
        alert("password should be greater than 8 characters");
        return false;
    }
    
    if(!pass.value.match(/^[a-zA-Z0-9]+$/))
    {
        alert("password can only contain alphabets and numbers");
        return false;
    }
    return true;
}


function sub(uname,ques,ans,pass,re,pwdMaster,cat)
{
    var flag=true;
     if(uname.value=="")
    {
        alert("Enter username");
        flag=false;
    }
    if(ans.value=="" )
    {
        alert("enter answer");
        flag=false;
    }
    if(pass.value=="")
    {
        alert("Enter password");
        flag=false;
    }
    if(re.value=="")
    {
        alert("Reenter Password");
        flag=false;
    }

    if(valiPass(pass.value) && flag)
    {
        //if password is valid
        if(re.value!=pass.value)
        {
        alert("Re-entered password is not matching");
        } 
        else
        {

        if(cat=="teachertbl" || cat=="hodtbl")
            {
                //teacher or hod forgot password
                if(pwdMaster.value=="")
                {
                alert("Enter Master Password");
                flag=false;
                }
                var xmlhttp;
                if (window.XMLHttpRequest) {
                    xmlhttp = new XMLHttpRequest();
                } else {
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function () {
                    if (xmlhttp.readyState == 4) {
                        var resp =  xmlhttp.responseText; 
                      }
                };
                //uname,ques,ans,pass,re,pwdMaster,cat
                xmlhttp.open("GET","DBHandler.php?uname="+uname.value+"&tbl="+cat+"&op=6&ans="+ans.value+"&pass="+pass.value+"&pwdMaster="+pwdMaster.value, true);
                xmlhttp.send(); 
            }
            else
            {
          
                var xmlhttp;
                if (window.XMLHttpRequest) {
                    xmlhttp = new XMLHttpRequest();
                } else {
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function () {
                    if (xmlhttp.readyState == 4) {
                        var resp =  xmlhttp.responseText; 
                      }
                };
                //uname,ques,ans,pass,re,pwdMaster,cat
                xmlhttp.open("GET","DBHandler.php?uname="+uname.value+"&tbl="+cat+"&op=7&ans="+ans.value+"&pass="+pass.value, true);
                xmlhttp.send(); 
                      //student forgot password
            }
        }
    }
}
    function masterField(_type)
    {
        var master_field=document.getElementById('master_field');
        if(_type=="studenttbl")
        {
            alert("hide"+_type);
            master_field.style.visibility="hidden";
            //hide master password field
        }
        else
        {
            alert("show"+_type);
            master_field.style.visibility="visible";
            //show master password field
        }
    }
   
