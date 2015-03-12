@extends('layout.master')
 
@section('title') Users @stop
 
@section('content')
 
<div class="col-lg-10 col-lg-offset-1">
 
    <h1><i class="fa fa-users"></i> User Administration <a href="{{ URL::route('login') }}" class="btn btn-default pull-right">Logout</a></h1>
 
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
 
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Email</th>
                    <th>Prévente</th>
                    
                </tr>
            </thead>
 
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->nom }}</td>
                    <td>{{ $user->prenom }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->prevente }}</td>
                    <td>
                        <a href="/user/{{ $user->id }}/edit" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>
                        {{ Form::open(['url' => '/user/' . $user->id, 'method' => 'DELETE']) }}
                        {{ Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                        {{ Form::close() }}
                    </td>
                </tr>
                @endforeach
            </tbody>
 
        </table>
    </div>
 
    <a href="{{ URL::route('inscriptions') }}" class="btn btn-success">Add User</a>
 
</div>
 
@stop