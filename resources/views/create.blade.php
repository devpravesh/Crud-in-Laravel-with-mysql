@extends('layout.master')  
@section('title', 'Registration page')
<body>
    <script>  
        function validateform(){  
        var name=document.myform.first_name.value;  
        var secondname=document.myform.last_name.value; 
        var quali=document.myform.qualifications.value;
        if (name==null || name==""){  
          alert("Name can't be blank");  
          return false;  
        }else if (secondname==null || secondname==""){  
          alert("Last Name can't be blank");  
          return false;   
        }else if(quali==null || quali==""){ 
            alert("Please Fill Qualification"); 
            return false; 
          }
          
          onsubmit="return validateform()"
        }  
        </script> 
<form method="post" action="/create" name="myform" onsubmit="validateform()">  
    @csrf 
    <div class="form-group">      
        <label for="first_name">First Name:</label><br/><br/>  
        <input type="text" class="form-control" name="first_name"/><br/><br/>  
    </div>  
<div class="form-group">      
<label for="first_name">Last Name:</label><br/><br/>  
        <input type="text" class="form-control" name="last_name"/><br/><br/>  
    </div>  
<div class="form-group">
<label for="gender"> Select you gender:</label><br/><br/>
<!-- <label for="gender">Gender:</label><br/><br/>   -->
<select name="gender">
	<option value="none" selected>Gender</option>
	<option value="Male">Male</option>
	<option value="Female">Female</option>
	<option value="other">other</option>
</select>
    </div>  
<div class="form-group">      
        <label for="qualifications">Qualifications:</label><br/><br/>  
        <input type="text" class="form-control" name="qualifications"/><br/><br/>  
    </div>  
<br/>  
<input type="submit" value="Submit">
 
</form>  
</body>
</html>