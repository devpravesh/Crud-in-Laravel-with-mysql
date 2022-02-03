<!DOCTYPE html>  
<html>  
<head>  
    <title>Baby Form Add</title>  
</head>  
<style>
* {
  text-align: center;
  /* text-decoration-color: black; */
}
.text{
    color: black;
}
table{
  padding: 2em;
  background-color: #eef;
  display: block;
  color: #fff;
  border-top-right-radius: 8px; 
  border-top-left-radius: 8px;
}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
</style>
<script>  
function validateform(){  
var name=document.myform.name.value;  
// var password=document.myform.password.value;  
  
if (name==null || name==""){  
  alert("Name can't be blank");  
  return false;  
}else if(password.length<6){  
  alert("Password must be at least 6 characters long.");  
  return false;  
  }  
  onsubmit="return validateform()"
}  
</script> 
<body>  
    <form method="post" name="myform" onsubmit="validateform()"  action="/create" require>  
        <table>  
            <tr>  
                <td class="text" >Name:</td>  
                <td>:</td>  
                <td><input type="text" name="name"></td>
            </tr>  
            <tr>  
                <td class="text">Meaning:</td>  
                <td>:</td>  
                <td><input type="text" name="meaning"></td>  
            </tr>  
            <tr>  
                <td class="text">Gender:</td>  
                <td>:</td>  
                <td><input type="text" name="gender"></td>  
            </tr>  
            <tr>  
                <td class="text">Religion:</td>  
                <td>:</td>  
                <td><input type="text" name="religion"></td>  
            </tr><br><br>  
            <tr>  
                <input type="submit" name="submit" class="button" value="Save">  
            </tr>  
        </table>  
    </form>  

</body>  
</html>  
