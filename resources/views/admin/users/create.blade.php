@include('inc.header')
@extends('layouts.admin')


@section('content')
    @include('inc.premore')
    @include('inc.semimore')

    <h5 class="panel-title">Create User</h5>
    <div class="heading-elements">
        <ul class="icons-list">
            <li><a data-action="collapse"></a></li>
            <li><a data-action="reload"></a></li>

        </ul>
    </div>
    </div>

   {!! Form::open(['method'=>'POST','action'=>'AdminUserController@store','files'=>true]) !!}
   <div class="form-group">
       {!! Form::label('name','name') !!}
       {!! Form::text('name',null,['class'=>'form-control']) !!}




        </div>

    <div class="form-group">
        {!! Form::label('email','Email:') !!}
        {!! Form::email('email',null,['class'=>'form-control']) !!}

    </div>

    <div class="form-group">
        {!! Form::label('role_id','Role:') !!}
        {!! Form::select('role_id',$roles,'3',['class'=>'form-control']) !!}

    </div>

    <div class="form-group">
        {!! Form::label('is_active','Status:') !!}
        {!! Form::select('is_active',[0=>'inactive',1=>'active'],0,['class'=>'form-control']) !!}

    </div>

    <div class="form-group">
        {!! Form::label('photo_id','Upload Picture:') !!}
        {!! Form::file('photo_id', ['class'=>'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::label('password','Password:') !!}
        {!! Form::password('password',['class'=>'form-control']) !!}

    </div>



    <div class="form-group">

        {!! Form::submit('Create Post',['class'=>'btn btn-primary']) !!}

        </div>


    {!! Form::close() !!}


         @include('inc.error')







@include('inc.footer')


@endsection
