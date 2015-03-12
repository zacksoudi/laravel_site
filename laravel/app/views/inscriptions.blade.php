      @extends('layout.master')
      @section('title') Create USer @stop
      @section('content')

      <div class='col-lg-4 col-lg-offset-4'>
      @if ($errors->has())
      @foreach ($errors->all() as $error)

      <div class='bg-danger alert'>{{ $errors }}</div>
      @endforeach
      @endif

      <h1><i class='fa fa-user'></i> Add User</h1>
      {{ Form::open(['role' => 'form', 'url' => '/user']) }}

      <div class='form-group'>
      {{ Form::label('nom', 'Nom')}}
      {{ Form::text('nom', null, ['placeholder' => 'Nom', 'class' => 'form-control']) }}
      </div>

      <div class='form-group'>
      {{ Form::label('prenom', 'Prenom') }}
      {{ Form::text('prenom', null, ['placeholder' => 'Prenom', 'class' => 'form-control']) }}
      </div>

      

      <div class='form-group'>
      {{ Form::label('email', 'Email') }}
      {{ Form::text('email', null, ['placeholder' => 'Email', 'class' => 'form-control']) }}
      </div>

      <div class='form-group'>
      {{ Form::label('prevente', 'Prevente') }}
      {{ Form::text('prevente', null, ['placeholder' => 'Prevente', 'class' => 'form-control']) }}
      </div>

     

      <div class='form-group'>
      {{ Form::submit('login', ['class' => 'btn btn-primary' ]) }}
      </div>
      {{ Form::close() }}
      </div>
      @stop 