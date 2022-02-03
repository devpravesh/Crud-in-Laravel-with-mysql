<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
</head>
<body>
<table border="1px">
<thead>
<tr>
<td>
ID </td>
<td>
First Name </td>
<td>
Last Name </td>
<td>
Gender </td>
<td>  
Qualifications </td>  
<td>Action</td>
</tr>  
</thead>  
<tbody>  


@foreach ($users as $user)
      <tr>
      <td>{{ $user->id }}</td>
      <td>{{ $user->first_name }}</td>
      <td>{{ $user->last_name }}</td>
      <td>{{ $user->gender }}</td>
      <td>{{ $user->qualifications }}</td>
      <td >  

                <form action="{{ route('users.edit', $user->id)}}" method="GET">  
                  @csrf  
                  @method('update')
                  <button class="btn btn-danger" type="submit">Edit</button>  
                </form> 
                
                <form action="{{ route('users.destroy', $user->id)}}" method="post">  
                  @csrf       
                  @method('DELETE')  
                  <button class="btn btn-danger" type="submit">Delete</button>  
                </form>  
</td>  
 
      </tr>
      
      @endforeach

      



</tbody>  
</table>  
</body>
</html>