@include('inc.header')
@extends('layouts.admin')


@section('content')
    @include('inc.premore')
    @include('inc.semimore')

    <h5 class="panel-title">Edit User</h5>
    <div class="heading-elements">
        <ul class="icons-list">
            <li><a data-action="collapse"></a></li>
            <li><a data-action="reload"></a></li>

        </ul>
    </div>
    </div>

    {!! Form::model($user,['method'=>'PATCH','action'=>['AdminUserController@update',$user->id],'files'=>true]) !!}
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
        {!! Form::select('role_id',$roles,null,['class'=>'form-control']) !!}

    </div>

    <div class="form-group">
        {!! Form::label('is_active','Status:') !!}
        {!! Form::select('is_active',[0=>'inactive',1=>'active'],null,['class'=>'form-control']) !!}

    </div>

    <div class="form-group">
        {!! Form::label('photo_id','Upload Picture:') !!}
        {!! Form::file('photo_id', ['class'=>'form-control']) !!}
    </div>






    <div class="form-group">

        {!! Form::submit('Update User',['class'=>'btn btn-primary']) !!}

    </div>


    {!! Form::close() !!}



    {!! Form::open(['method'=>'DELETE','action'=>['AdminUserController@destroy',$user->id, ]])!!}

    <div class="form-group">

        {!! Form::submit('Delete User',['class'=>'btn btn-danger']) !!}

    </div>


    {!! Form::close() !!}


    @include('inc.error')







    @include('inc.footer')


@endsection
