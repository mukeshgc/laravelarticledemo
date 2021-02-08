@extends('user/app')

@section('bg-img',asset('user/img/contact-bg.jpg'))
@section('head')

@endsection
@section('title','Login')
@section('sub-heading','')

@section('main-content')
<!-- Post Content -->
<article>
    <div class="container">
        <div class="row">
           <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
               {{ csrf_field() }}

               <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                   <label for="email" class="col-md-4 control-label">Email ID</label>

                   <div class="col-md-6">
                       <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                       @if ($errors->has('email'))
                           <span class="help-block">
                               <strong>{{ $errors->first('email') }}</strong>
                           </span>
                       @endif
                   </div>
               </div>

               <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                   <label for="password" class="col-md-4 control-label">Password</label>

                   <div class="col-md-6">
                       <input id="password" type="password" class="form-control" name="password" required>

                       @if ($errors->has('password'))
                           <span class="help-block">
                               <strong>{{ $errors->first('password') }}</strong>
                           </span>
                       @endif
                   </div>
               </div>

               

               <div class="form-group">
                   <div class="col-md-8 col-md-offset-4">
                       <button type="submit" class="btn btn-primary">
                           Login
                       </button>

                       <a href='{{ route('register') }}' class="btn btn-primary">
                           Register
                      </a>

                   </div>
               </div>
           </form>
        </div>
    </div>
</article>

<hr>
@endsection
@section('footer')
@endsection