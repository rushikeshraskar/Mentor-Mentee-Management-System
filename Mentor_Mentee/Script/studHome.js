

function adds(lans,lans_s)
{
		try
			{
				if(repeat(lans,lans_s))
				{
					alert(lans+" is already selected");
				}
				else
				{
    				var option = document.createElement("option");
    				option.text = lans;
    				lans_s.add(option);
    			}	
			}
			catch(err)	
			{
				alert("1"+err);
			}
}
 
 function repeat(language,_select)
 {
 	try{
		 for(i=0;i<_select.length;i++)
 		{
 			if(_select[i].value==language)
 			return true;
		}
 	}catch(err){alert("2"+err);}
return false;
 }

 function rm(_select,index)
 {
 	if(index==-1)
 		alert("select language to remove");
 	else
 	_select.remove(index);
 }