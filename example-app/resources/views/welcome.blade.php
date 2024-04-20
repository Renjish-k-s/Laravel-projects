<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Larvel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <h1>WELCOME DAIII</h1>
 
        <li><a href="">home</a></li>
    
    </ul>
    <a href="{{ route('create.user')}}" class="btn btn-warning">New</a>
    @if(session()->has('message'))<p >
      {{ session()->get('message') }}
    </p> @endif
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">ACTIONS</th>
    </tr>
  </thead>
  <tbody>
    @foreach($us as $u)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$u->first_name}}</td>
      <td>{{$u->email}}</td>
      <td>
        <a href="" class="btn btn-warning">Edit</a>
        <a href="{{ route('delete.user',encrypt($user->user_id)) }}" class="btn btn-danger">Delete</a>
      </td>
    </tr>
    @endforeach

  </tbody>
</table>    
    
</body>
</html>