{{-- @extends('master')

@section('content')

    <div class="row" style="margin-top: 40px">
        <div class="col-md-6 col-sm-12 col-lg-6 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading" style="text-align: center; font-size: 30px; padding: 18px;">Register
                </div>
                <div class="panel-body">
                    <form name="myform" method="Post" action="{{route('register')}}">
                        @csrf
                        <div class="form-group">
                            <label for="name">Full Name *</label>
                            <input id="name" name="name" class="form-control" type="text" data-validation="required">
                            <span id="error_name" class="text-danger"></span>
                        </div>
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input id="email" name="email" class="form-control" type="text" data-validation="email">
                            <span id="error_email" class="text-danger"></span>
                        </div>
                        <div class="form-group">
                            <label for="password">Password *</label>
                            <input id="password" name="password"  class="form-control" type="text">
                            <span id="error_password" class="text-danger"></span>
                        </div>
                        
                        <button id="submit" type="submit" value="submit" class="btn btn-primary center">Register</button>
                
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection --}}
{{-- @extends('master')
@section('content')
    <div class="inner-header">
        <div class="container">
            <div class="pull-left">
                <h6 class="inner-title">Đăng kí</h6>
            </div>
            <div class="pull-right">
                <div class="beta-breadcrumb">
                    <a href="index.html">Home</a> / <span>Đăng kí</span>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="container">
        <div id="content">
            @include('error')
            <form action="{{route('register')}}" method="POST" class="beta-form-checkout">
            @csrf
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                    <h4>Đăng kí</h4>
                    <div class="space20">&nbsp;</div>

                    <div class="form-block">
                        <label for="email">Email address*</label>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <div class="form-block">
                        <label for="name">Fullname*</label>
                        <input type="text" id="name" name="name" required>
                    </div>

                    <div class="form-block">
                        <label for="password">Password*</label>
                        <input type="password" id="password" name="password" required>
                    </div>

                    <div class="form-block">
                        <label for="c_password">Re password*</label>
                        <input type="password" id="c_password" name="c_password" required>
                    </div>

                    <div class="form-block">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                </div>
                <div class="col-sm-3"></div>
            </div>
            </form>
            <p class="text-center">Nếu chưa có tài khoản vui lòng <a href="/register">Đăng ký</a>!</p>
        </div> <!-- #content -->
    </div>
@endsection --}}
