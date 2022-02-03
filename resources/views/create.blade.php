<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    
  <link rel="stylesheet" href="{{ URL::asset('css/form.css') }}" />
</head>
<body>
   
<form method="post" action="/create" >  
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