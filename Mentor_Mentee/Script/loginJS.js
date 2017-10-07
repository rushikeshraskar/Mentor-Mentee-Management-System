var userType="Student";
var tbl="studenttbl";
var visi;
function Validate(uname,pwd,tbl)
{
    try{
        alert(uname+" "+pwd+" "+tbl);
	if(uname=="" && pwd=="")
	{
		alert("Please Enter Username and Password");
		return false;
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
                        var resp = parseInt(xmlhttp.responseText); 
                        if(resp==0)
                        {
                        	document.getElementById('myAlert').style.display="block";
                            alert("error");
                        }
                        else
                        	{
                        		alert("Login Successful ..! Redirecting.."+tbl);
                                if(tbl=="teachertbl")
                                {
                                    window.open("teacherHome.php","_SELF");
                                }
                                if(tbl=="studenttbl")
                        		{
                                    window.open("studHome.php?uname="+uname,"_SELF");
                                }
                                
                        	}
                    }
                };
                xmlhttp.open("GET", "DBHandler.php?uname="+uname+"&pwd="+pwd+"&op=3&tbl="+tbl, true);
                xmlhttp.send();
	}
    }catch(err){alert(err);}
}
