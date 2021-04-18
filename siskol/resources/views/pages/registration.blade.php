@extends('layouts.main')

@section('content')
  <div class="container">
    <div class="page-wrapper m-0 pt-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-12">
            <div class="card border-0">
              <div class="card-body p-0">
                <form method="POST" class="form bordered-input" action="{{ route('register') }}">
                  @csrf
                  <div class="p-30 pb-0">
                    <div class="form-group m-t-20 row">
                      <div class="col-12">
                        <input class="form-control pl-0 font-12 {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" type="text" placeholder="Full name" required >
                        @if ($errors->has('name'))
                          <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                      </div>
                    </div>
                    <div class="form-group m-t-20 row">
                      <div class="col-12">
                        <input class="form-control pl-0 font-12 {{ $errors->has('email') ? ' is-invalid' : '' }}" type="text" placeholder="Email" name="email" required>
                        @if ($errors->has('email'))
                          <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                      </div>
                    </div>
                    <div class="form-group row m-b-30">
                      <div class="col-12">
                        <label class="col-form-label font-12 text-primary p-0">Password</label>
                        <input class="form-control  pl-0 font-12 {{ $errors->has('password') ? ' is-invalid' : '' }}" required type="password" name="password" placeholder="password" >
                        @if ($errors->has('password'))
                          <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                      </div>
                    </div>
                    <div class="form-group row m-b-20">
                      <div class="col-12">
                        <input id="password-confirm" type="password" class="form-control  pl-0 font-12" name="password_confirmation" required placeholder="Confirm password" >
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <div class="form-group row m-b-10">
                      <div class="col-12">
                        <div class="checkbox pull-left">
                          <input type="checkbox" id="checkbox0" value="check">
                          <label for="checkbox0"></label>
                        </div>
                        <div class="text-dark font-14 pull-left"> <span>I agree with</span> <a href="" >Terms of usage</a></div>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group row m-b-10">
                      <div class="col-12">
                        <p><button type="submit" class="btn btn-rounded btn-primary m-b-20 btn-block waves-effect waves-light d-block">Register</button></p>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <hr>
                  <div class="clearfix"></div>
                  <div class="pl-3 pt-1 pb-3 pl-3"> Already have an account? <a href="{{url('login')}}">Login</a>
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
  </div>
@endsection
