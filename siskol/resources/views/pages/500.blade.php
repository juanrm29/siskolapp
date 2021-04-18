@extends('layouts.main')

@section('content')
  <div class="container">
    <div class="page-wrapper m-auto pt-5">
      <div>
        <div class="row">
          <div class="col-lg-6 col-md-6 text-center img.css')}}"> <img src="{{asset('assets/imgs/single-page/500.png')}}" class="img-fluid" alt="" title=""> </div>
          <div class="col-lg-6 col-md-6 single-403">
            <h2 class="text-primary mt-5">500</h2>
            <h3>Internal Server Error</h3>
            <h4 class="font-18">Something went wrong with server</h4>
            <a href="{{url('/')}}" class="btn waves-effect waves-light btn-rounded btn-primary pt-2 pb-2 pl-4 pr-4">Go back</a>
            <br><br>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
