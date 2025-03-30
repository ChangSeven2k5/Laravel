{{-- @extends('master')

@section('content')

    <div class="row" style="margin-top: 40px">
        <div class="col-md-6 col-sm-12 col-lg-6 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading" style="text-align: center; font-size: 30px; padding: 18px;">Loin
                </div>
                <div class="panel-body">
                    <form  method="Post" action="{{route('login')}}">
                        @csrf
                        <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div></div>@include('error')</div>
                        <button type="submit" class="btn btn-primary">Log in</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection --}}