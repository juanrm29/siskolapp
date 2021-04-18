@extends('layouts.main')

@section('content')
  <div class="page-wrapper m-0 pt-5">


    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-4 col-12">
          <div class="card border-0">
            <div class="card-body p-0">
              @if (session('status'))
                <div class="alert alert-success" role="alert">
                  {{ session('status') }}
                </div>
              @endif
              <form class="form bordered-input" method="POST" action="{{ route('password.email') }}">
                {{csrf_field()}}
                <div class="p-30 pb-0">
                  <p>Enter your email to help us identify you.</p>
                  <div class="form-group m-t-20 row">
                    <div class="col-12">
                      <input class="form-control pl-0 font-12 {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" type="text" placeholder="email">
                      @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                      @endif
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="form-group row m-b-10">
                    <div class="col-12">
                      <p><button type="submit" class="btn-block  btn btn-rounded btn-primary m-b-20 waves-effect waves-light d-block">Send Reset Instruction</button></p>
                    </div>
                  </div>
                </div>
                <div class="clearfix"></div>
                <hr>
                <div class="clearfix"></div>
                <div class="pl-3 pt-1 pb-3 pl-3"><a href="{{url('login')}}">Return to login</a>
                  <div class="clearfix"></div>
                </div>
              </form>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="text-center mt-5">
            <ul class="social-network social-circle">
              <li><a href="#" class="icoFacebook" title="Facebook"><i class="mdi mdi-facebook"></i></a></li>
              <li><a href="#" class="icoTwitter" title="Twitter"><i class="mdi mdi-twitter"></i> </a></li>
              <li><a href="#" class="icoGoogle" title="Google +"><i class="mdi mdi-google-plus"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
