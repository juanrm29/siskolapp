@extends('layouts.main')

@section('content')
  <div class="container">
    <div class="page-wrapper m-0 pt-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-12">
            <div class="card border-0">
              <div class="card-body p-0">
                <form method="POST" class="form bordered-input" action="{{ route('login') }}">
                  @csrf
                  <div class="p-30 pb-0">
                    <div class="form-group m-t-20 row">
                      <div class="col-12">
                        <label for="example-search-input"
                               class="col-form-label font-12 text-primary">Email</label>
                        <input class="form-control pl-0 font-12 {{ $errors->has('email') ? ' is-invalid' : '' }}"
                               type="text" placeholder="email" name="email" value="{{ old('email') }}"
                               required autofocus>
                        @if ($errors->has('email'))
                          <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                      </div>

                    </div>
                    <div class="form-group row m-b-10">
                      <div class="col-12">
                        <label for="example-search-input"
                               class="col-form-label font-12 text-primary">Password</label>
                        <input class="form-control font-12 pl-0 {{ $errors->has('password') ? ' is-invalid' : '' }}"
                               type="password" name="password" value="password">
                        @if ($errors->has('password'))
                          <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                      </div>

                    </div>
                    <div class="form-group row m-b-20">
                      <div class="col-6"><a class="text-dark font-14 " href="">
                          <div class="checkbox pull-left">
                            <input type="checkbox" id="checkbox0" value="check">
                            <label for="checkbox0"></label>
                          </div>
                          Remember</a>
                        <div class="clearfix"></div>
                      </div>
                      <div class="col-6"><a href="" class="font-14 text-primary">Forgot
                          password?</a></div>
                      <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group row m-b-10">
                      <div class="col-12">
                        <button type="submit"
                                class="btn btn-rounded btn-primary m-b-20 waves-effect waves-light btn-block">
                          Login
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <hr>
                  <div class="clearfix"></div>
                  <div class="pl-3 pt-1 pb-3 pl-3"> Need an account? <a href="{{url('register')}}">Sign
                      up</a>
                    <div class="clearfix"></div>
                  </div>
                </form>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="text-center mt-5">
              <ul class="social-network social-circle">
                <li><a href="#" class="icoFacebook" title="Facebook"><i
                            class="mdi mdi-facebook"></i></a></li>
                <li><a href="#" class="icoTwitter" title="Twitter"><i class="mdi mdi-twitter"></i> </a>
                </li>
                <li><a href="#" class="icoGoogle" title="Google +"><i
                            class="mdi mdi-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
