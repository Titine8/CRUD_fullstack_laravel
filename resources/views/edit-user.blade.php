<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout de nouvel utilisateur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
    <div class="card">
    <div class="card-header"> modifier un user </div>   
    @if (Session::has('fail'))
        <span class="alert alert-danger p-2">{{Session::get('fail')}}</span>
    @endif
    <div class="card-body">
        <form action="{{ route('EditUser')}}" method="post">
        @csrf
        <input type="hidden" name="user_id" id="" value="{{$user->id}}">
        <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label" >Full Name</label> 
                <input type="text" name ="full_name" value="{{$user->name}}" class="form-control" id="formGroupExampleInput" placeholder = "donne ton nom">       
                @error('full_name')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>  
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label" >Email</label> 
                <input type="email" name="email" class="form-control" value="{{$user->email}}" id="formGroupExampleInput2" placeholder="donne ton email" >       
                @error('email')
                <span class="text-danger">{{$message}}</span>
                @enderror
            
            </div> 
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label" >numero telephone</label> 
                <input type="number" name="phone_number" class="form-control" value="{{$user->phone_number}}" id="formGroupExampleInput2" placeholder="donne ton numero" >       
            
                @error('phone_number')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>   
             


            <button type="submit" class="btn btn-primary"> Save</button>
        </form>
       
</div>

</div>
</body>
</html>