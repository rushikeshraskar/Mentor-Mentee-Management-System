<?php
ini_set('session.gc_maxlifetime', 3600);
session_start();
$_SESSION['userType']="student";

if(isset($_SESSION['uname']))
{
echo $_SESSION['uname'];
} 
else
{
  if(isset($_GET['uname']))
    $_SESSION['uname']=$_GET['uname'];
  else
    echo "invalid credentials";
}
?>
<HTML>
	<head>
		<title>Sign Up</title>
        <script src="Script/jquery.min.js"></script>
    <script src="Script/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/style4.css">
      <script type="text/javascript" src="Script/studHome.js"></script>
	</head>
	<body>



<nav class="navbar navbar-inverse" style="border-radius:0px">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Mentor Mentee Management System</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="logout.php">Logout</a></li>
      <li><a href="#">Home</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>


	<div>Student Home</div>

		<div class="profilemyContainer">
      <form class="form-horizontal">	   
     		<div  class="form-group">
             <img src="images/student.png"/>
        </div>  
     
      <div class="form-group">
     
          <label class="control-label col-xs-2"> Username </label>
           <div class="col-xs-10">
         <input type="text" value="<?php echo $_SESSION['uname']?>" class="form-control" disabled>
         </div>

      </div>



      <div class="form-group">

       <label class="control-label col-xs-2">Email-id </label>

        <div class="col-xs-10">

            <input type="text" value="test.myEmailid@gmail.com" class="form-control " disabled>

        </div>

      </div>

      <div class="form-group">
       
       <label class="control-label col-xs-2">Local Address </label>

          <div class="col-xs-10">

            <input type="text" class="form-control">  

          </div>
      
      </div>

      <div class="form-group">
       
       <label class="control-label col-xs-2">Permanant Address </label>

        <div class="col-xs-10">

          <input type="text" class="form-control">  

        </div>

      </div>
       
      <div class="form-group" style="border:2px solid white;border-radius:20px;padding:10px;">
       
       <label class="control-label col-xs-2">Father's Name </label>

        <div class="col-xs-10">

            <input type="text" class="form-control">

        </div>

        <div>

        <label class="control-label col-xs-2"> Father's Mobile </label>

        </div>

        <div class="col-xs-10">

        <input type="number" class="form-control">
        
        </div>

      </div>

      <div class="form-group" style="border:2px solid white;border-radius:20px;padding:10px;">
      
       <label class="control-label col-xs-2">Mother's Name </label>

          <div class="col-xs-10">

              <input type="text" class="form-control"> 

          </div>

       <label class="control-label col-xs-2"> Mother's Mobile </label>

          <div class="col-xs-10">

            <input type="number" class="form-control">

          </div>
      
      </div>

      <div class="form-group">
      
      
      <table>

       <caption class="control-label col-xs-2">Qualification Details:- </caption>
         
         <tr>
             <th>Course</th>
             <th>Year of Passing</th>
             <th>%</th>
             <th>University/Board</th>
          </tr>
        
          <tr>
              <td><input type="text" class="form-control"></td>
              <td><input type="text" class="form-control"></td>
              <td><input type="number" class="form-control"></td>
              <td><input type="text" class="form-control"></td>
          </tr>
         
          <tr>
             <td><input type="text" class="form-control"></td>
             <td><input type="text" class="form-control"></td>
             <td><input type="number" class="form-control"></td>
             <td><input type="text" class="form-control"></td>
          </tr>
        
           <tr>
             <td><input type="text" class="form-control"></td>
             <td><input type="text" class="form-control"></td>
             <td><input type="number" class="form-control"></td>
             <td><input type="text" class="form-control"></td>
          </tr>

      </table> 
     
      </div>
     
      <div class="form-group">
     
       <label class="control-label col-xs-2">Language Spoken </label>

         <select multiple class="selectpicker" id="lans">
                       <option value="English">English</option>
                       <option value="Hindi">Hindi</option>
                       <option value="Marathi">Marathi</option>
                       <option value="Telugu">Telugu</option>
                       <option value="Kannada">Kannada</option>
                       <option value="Punjabi">Punjabi</option>
          </select>

          <input type="button" value=">>" onclick="adds(lans.value,lans_s)"> 

          <input type="button" value="<<" onclick="rm(lans_s,lans_s.selectedIndex)"> 

          <select id="lans_s" multiple>

          </select>

              <label class="control-label" style="margin-top:-120px;margin-left:10px;">Language(s) You Speak </label>

      </div>

      <div class="form-group">

       <label class="control-label col-xs-2">Language written   </label>
      
       <select multiple class="selectpicker" id="lanw">
                       <option value="English">English</option>
                       <option value="Hindi">Hindi</option>
                       <option value="Marathi">Marathi</option>
                       <option value="Telugu">Telugu</option>
                       <option value="Kannada">Kannada</option>
                       <option value="Punjabi">Punjabi</option>
       </select> 

           <input type="button" value=">>" onclick="adds(lanw.value,lans_w)"> 

          <input type="button" value="<<" onclick="rm(lans_w,lans_w.selectedIndex)"> 

          <select id="lans_w" multiple>

          </select>

              <label class="control-label" style="margin-top:-120px;margin-left:10px;">Language(s) You can write </label>
      
      </div>
      
      <div class="form-group">
      
       <label class="control-label col-xs-2">Working Experience </label>
      
      <textarea>

      </textarea>
      
      </div>
      
      <div class="form-group">
      
       <label class="control-label col-xs-2">Attach call letter of company and latest salary slip/Proof of salay </label>
      
      
      <div class="form-group">
       <table>
        <tr>
          
          <td> 
            <label class="control-label col-xs-2">Call letter </label>
           </td>

           <td>
            <input type="file" name="callLetter" class="form-control">
          </td>

        </tr>

        <tr>

          <td>
             <label class="control-label col-xs-2">Salary Slip</label>
          </td>

          <td>
          <input type="file" name="salSlip" class="form-control"> 
          </td>

        </tr>
        </table>
      </div>
      
      </div>
      
      <div> 
       <label class="control-label col-xs-2">Hobbies </label>
        <textarea></textarea>
        </div>
      <div>
    
    <fieldset style="border:2px solid white;border-radius:20px;padding:10px;">  
      <legend style="color:cyan;">Achievements</legend>
      <div>
          <label class="control-label col-xs-2">
              1)Academic  
          </label>
          
          <input type="text" class="form-control" >
          
      </div> 

      <div>
          <label class="control-label col-xs-2">
              2)Extra Curricular  
          </label>
          
          <input type="text" class="form-control" >
          
      </div>
      
      </fieldset>

        </form>
        
		</div>


	</body>

</HTML>
