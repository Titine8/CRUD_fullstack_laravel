<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 11 Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class ="container">
        <div class="card">
            </body>
            <div class="card-header">
                Laravel 11
                <a href="/add/user" class="btn btn-success btn-sm float-end" >Ajouter</a>
            </div>
            @if (Session::has('success'))
                <span class="alert alert-success p-2">{{Session::get('success')}}</span>
            @endif
            @if (Session::has('fail'))
                <span class="alert alert-danger p-2">{{Session::get('fail')}}</span>
            @endif
            <div class="card-body">
                <table class="table table-sm table-striped table-bordered">
                    <thead>
                        <th>S/N</th>
                        <th>Full name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Regisration Date</th>
                        <th>Last Update</th>
                        <th colspan="4">Action</th>
                    </thead>
                    <tbody>
                    @if (count($all_users)>0)
                    @foreach ($all_users as $item)
                    <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->phone_number}}</td>
                            <td>{{$item->created_at}}</td>
                            <td>{{$item->updated_at}}</td>
                            <td><a href="/edit/{{$item->id}}" class="btn btn-primary btn-sm">Modifier</a></td>
                            <td><a href="/delete/{{$item->id}}" class="btn btn-danger btn-sm">Supprimer</a></td>
                        </tr>
                    @endforeach

                        
                    @else
                    <tr >
                    <td colspan="8">No user Found</td>
                    </tr>
                    @endif
                </tbody>
                </table>
        </div>
    </div>
</html>