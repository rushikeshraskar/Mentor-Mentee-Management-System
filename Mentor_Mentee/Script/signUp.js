var masterPwd=0;
var table;
function isAlpha(fname)
{
	if(!fname.match(/^[a-zA-Z ]+$/))
	 	{
		alert("not only alphabetical");
		return false;
	}	
	return true;
}

function isNumb(phone)
{
	if(!phone.match(/^[0-9]+$/))
	{
		alert("not only numbers");
		return false;
	}
	return true;
}

function isValidNumb(phone)
{
	
	if(phone.value.length==10)
	{		
		if(!isNumb(phone.value))
		{
			return false;
		}
	}
	else
	{
		alert("number should of length 10 digits");
		return false;
	}
	return true;
}
function valiUname(uname)
{
	if(!uname.value.match(/^[a-zA-Z0-9.]+$/))
	{
		alert("invalid username");
		return false;
	}
	return true;
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

function validate2(fname ,phone ,uname ,pass ,re ,secret ,ans ,cls,masterPWD)
{
	masterPwd=masterPWD;
	validate(fname ,phone ,uname ,pass ,re ,secret ,ans ,cls);
}

function validate(fname ,phone ,uname ,pass ,re ,secret ,ans ,cls)
{
	try{
		
	var flag = true;
	if(isAlpha(fname.value) && isValidNumb(phone) && valiUname(uname) && valiPass(pass))
	{
		flag=true;
	}
	else
		flag=false;

	if(pass.value!==re.value)
		{
			flag=false;
			alert("Password doesn't match ...!");
		}	
	if(secret.value=="")
	{
		alert("Please enter Secret Question..!");
		flag=false;
	}
	if(ans.value=="")
	{
		alert("Please enter answer of Question..!");
		flag=false;
	}
	if(flag==true)	
	{ 
	 			createAcc(fname ,phone ,uname ,pass ,re ,secret ,ans,cls);	
	}
	alert("at the end");
	}catch(err){alert(err);}
	return flag;
}
	function createAcc(fname ,phone ,uname ,pass ,re ,secret ,ans,cls)
	{

			//to create account
                  var xmlhttp;
                if (window.XMLHttpRequest) {
                    xmlhttp = new XMLHttpRequest();
                } else {
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function () {
                    if (xmlhttp.readyState == 4) {
                        var resp = xmlhttp.responseText; 
                        alert(resp+" You are now a registered user");
                    }
                };
                if(cls=="Teacher")
                	operation=4;
                else
                	operation=2;
                xmlhttp.open("GET", "DBHandler.php?fname=" + fname.value+"&phone="+phone.value+"&uname="+uname.value+"&pass="+pass.value+"&secret="+secret.value+"&ans="+ans.value+"&op="+operation+"&cls="+cls+"&table="+table+"&pwd="+masterPwd, true);
                xmlhttp.send();
	}

 function vali(uname, unameEle) {
                try {
                    if (uname.value == "") {
                        uname.value = "";
                        unameEle.innerHTML = "";
                    }
                } catch (err) { alert(err); }
            }


  			 function unameChk(uname) {
  			 	/*to check username availability*/
                var unameEle = document.getElementById('chk');
                var xmlhttp;
                if (window.XMLHttpRequest) {
                    xmlhttp = new XMLHttpRequest();
                } else {
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function () {
                    if (xmlhttp.readyState == 4) {
                        var resp = parseInt(xmlhttp.responseText);
                        if (resp==0) {
                            unameEle.innerHTML = "Username is available..!";
                            unameEle.style.color = "white";
                            unameEle.style.display = "block";
                            flag = true;
                        }
                        else {
                        	  unameEle.innerHTML = "Username already exists";
                            unameEle.style.color = "RED";
                            unameEle.style.display = "block";
                            flag = false;
                            
                        }
                        vali(uname, unameEle);
                    }
                };
                xmlhttp.open("GET", "DBHandler.php?u="+ uname.value+"&op=1&"+"table="+table, true);
                xmlhttp.send();
            }