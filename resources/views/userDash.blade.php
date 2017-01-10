@extends('layouts.app')

@section('content')
@unless ($usersrole->role_id ==2 )


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in! {{$usersrole->RoleName}}
                </div>
            </div>
            <hr>
            <div class="panel panel-default">
                <div class="panel-heading">Want to Partner with Check-in.com?</div>

                <div class="panel-body">
                  <div class="list-group">
                    <a href="partner/apply" class="list-group-item">Become a Partner Now!</a>
                    <a href="partner/{{Auth::id()}}/status" class="list-group-item">Check your proposal status</a>
                  </div>

                </div>
            </div>


        </div>

    </div>

</div>

@endsection


@else
  <h1> No Way.</h1>
  @endunless