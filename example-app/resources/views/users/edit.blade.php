<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
<form action="{{ route('update.user')}}" method="post">
  @csrf
  <input type="hidden" name="user_id" value="{{ encrypt($user->user_id) }}">
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter name" value="{{ $user->first_name }}">
 
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email" placeholder="Enter email" value="{{ $user->email }}">
 
  </div><div class="form-group">
    <label>DOB</label>
    <input type="date" class="form-control" name="dob" placeholder="Enter DOB" value="{{ $user->date_of_birth }}">
 
  </div><div class="form-group">
    <label>Status</label>
    <select name="status" id=""  class="form-control">
      <option value="">-Please select-</option>
      <option value="0" @if ($user->status == 0) selected="selected" @endif>Inactive</option>
      <option value="1"  @if ($user->status == 1) selected="selected" @endif>Active</option>

    </select>
    
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>