@include('inc.header')


@extends('layouts.admin')

@section('content')

   @include('inc.semiheader')

            <h5 class="panel-title">Users List</h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>

                </ul>
            </div>
        </div>




        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Active</th>
                    <th>Role</th>
                    <th>Created</th>
                    <th>Updated</th>
                </tr>
                </thead>
                <tbody>

                    @if($users)

                        <?php
                            $ct = 1;
                        ?>
                        @foreach($users as $user)

                            {{--pr($user->role, true)--}}

                            <tr>
                                 <td>{{$ct}}</td>
                                 <td>{{$user->name}}</td>
                                 <td>{{$user->email}}</td>
                                 <td>{{$user->is_active = 1 ? 'Active':'Non-Active' }}</td>
                                 <td>{{ $user->role['name'] }}</td>
                                 <td>{{$user->created_at->diffForHumans()}}</td>
                                 <td>{{$user->updated_at->diffForHumans()}}</td>
                            </tr>

                            <?php $ct++; ?>

                        @endforeach
                    @endif

                </tbody>
            </table>
        </div>
    </div>


    @include('inc.footer')
@endsection