<?php
$conn = new mysqli("localhost","root","","MentorMenteeDB");
  $op = $_GET['op'];
  switch($op)
  {
  		case 1:	//to check availability of student or teacher username
			    $sql = "SELECT * FROM ".$_GET['table']." where uname='".$_GET['u']."'";
 				$result = $conn->query($sql);
				if ($result->num_rows > 0) 
        		echo  1 ;	//exists
				 else 
 	   			echo 0 ;	//possible
				break;
		case 2://to sign up new student
			$fname=$_GET['fname'] ;
			$phone=$_GET['phone'] ;
			$uname=$_GET['uname'] ;
			$pass=$_GET['pass'] ;
			$secret=$_GET['secret'] ;
			$ans=$_GET['ans'] ; 
			$cls=$_GET['cls'] ; 
				$sql="INSERT INTO `studenttbl`(`sid`, `sname`, `sclass`, `phone`, `uname`, `pwd`, `question`, `answer`) values(0,'$fname' ,'$cls','$phone' ,'$uname' ,'$pass' ,'$secret ' ,'$ans')";
				if ($conn->query($sql) === TRUE) {
    				echo "New record created successfully";
				} else {
					    echo "Error: " . $sql . "<br>" . $conn->error;
						}
				break;
		case 3://to login student and teacher
				$uname=$_GET['uname'] ;
				$pass=$_GET['pwd'] ;
				$tbl=$_GET['tbl'];
				$sql="SELECT * FROM `$tbl` WHERE `uname`='$uname' and `pwd`='$pass'";
				$result = $conn->query($sql);
			if ($result->num_rows == 0) 
				   echo 0; // wrong username or password
				else
				   echo 1; //more than 1 record exists
	    			break;

	    case 4://create teacher account
	    //check master password using ajax
	    		$pwd=$_GET['pwd'] ;
				$sql="SELECT * FROM `mastertbl` WHERE `pwd`='$pwd'";
				$result = $conn->query($sql);
			if ($result->num_rows == 0) 
				       echo "Error: " . $sql . "<br>" . $conn->error; // wrong master password
				else
 			{
 					 //more than 1 record exists
	    	$fname=$_GET['fname'] ;
			$phone=$_GET['phone'] ;
			$uname=$_GET['uname'] ;
			$pass=$_GET['pass'] ;
			$secret=$_GET['secret'] ;
			$ans=$_GET['ans'] ; 
				$sql="INSERT INTO `teachertbl`(`tid`, `sname`, `uname`, `pwd`, `phone`, `ques`, `ans`)values(0,'$fname' ,'$uname','$pass' ,'$phone' ,'$secret','$ans')";
				if ($conn->query($sql) === TRUE) {
    				echo "New record created successfully";
				} else {
					    echo "Error: " . $sql . "<br>" . $conn->error;
						}
			}
	    		break;
	  
	    case 5://forgot password
	    $uname=$_GET['uname'];
	    $tbl=$_GET['tbl'];
	    $sql="select `ques` from `$tbl` where uname='$uname'";
	    $result=$conn->query($sql);
	    if($result->num_rows==0)
	    {
	    	//invalid username
	    	echo 0;
	    }
	    else
	    {
	    	//valid username
	    	$row=$result->fetch_row();
	    	echo $row[0];
	    }
	    break;

	    case 6:
	    //uname="+uname.value+"&tbl="+cat+"&op=6&ans="+ans.value+"&pass="+pass.value+"&pwdMaster="+pwdMaster.value
	    $uname=$_GET['uname'];
	    $tbl=$_GET['cat'];
	    $ans=$_GET['ans'];
	    $newPass=$_GET['pass'];
	    $pwdMaster=$_GET['pwdMaster'];
	    //first verify pwdMaster password
	    $sql="select * from mastertbl where pwd=$pwdMaster and level=$tbl";

	    

	    $sql="UPDATE `$tbl` SET `pwd`='$newPass' WHERE `uname`='$uname' and `ans`='$ans'";
	    	if ($conn->query($sql) === TRUE) 
	    		{
    				echo "password reset successfully";
				} 
				else
				{
					echo "Error: " . $sql . "<br>" . $conn->error;
				}

	    //set new master password
	    break;

	    case 7:
	    //uname="+uname.value+"&tbl="+cat+"&op=7&ans="+ans.value+"&pass="+pass.value
	    break;

  	}
  
$conn->close();
?>
  