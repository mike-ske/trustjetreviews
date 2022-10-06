@extends( 'base' )

@section( 'content' )

<div class="container" id="logincont">
<div class="row" id="rowlog">
<div class="col-10 mx-auto">
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" href="{{ route( 'myaccount' ) }}">{{ __('My Reviews') }}</a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link active" href="{{ route( 'myprofile' ) }}">{{ __('My Profile') }}</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route( 'mycompany' ) }}">{{ __('My Company') }}</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route( 'mybilling' ) }}">{{ __('My Billing') }}</a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" href="{{ route( 'logout' ) }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">{{ __('Log Out') }}</a>
  </li>
</ul>
</div><!-- /.col-10 card -->

<div class="col-10 mx-auto">
<div class="card">
<h2>{{ __('My Profile') }}</h2>
<hr>

@if (isset(auth()->user()->avatar))
  <div style="width:auto;height:auto;margin:10px auto;display:flex;align-items:center;justify-content:center">
    <span clas="rounded w-100 h-100" style="width:100px;height:100px;border-radius:50%;background-position:center;overflow:hidden">
      <img src="{{ (auth()->user()->avatar) ? auth()->user()->avatar : './public/storage/'.auth()->user()->profilePic }}" style="width:100%;height:100%">
    </span>
  </div>
@else
   <div style="width:auto;height:auto;margin:10px auto;display:flex;align-items:center;justify-content:center">
    <span clas="rounded w-100 h-100" style="width:100px;height:100px;border-radius:50%;background-position:center;overflow:hidden">
      <img src="{{ $r->user->profileThumb ?? (new App\User)->getProfileThumbAttribute() }}" style="width:100%;height:100%">
    </span>
  </div>
@endif

<form method="POST" action="{{ route('updateprofile') }}" enctype="multipart/form-data">
  @csrf
  <input type="hidden" name="_method" value="PUT">
  <div class="form-group">
    <label for="name">{{ __('Name') }}</label>
    <input type="text" name="name" value="{{ auth()->user()->name }}" class="form-control" required="required">
  </div>
  <div class="form-group">
    <label for="email">{{ __('Email') }}</label>
    <input type="email" name="email" value="{{ auth()->user()->email }}" class="form-control" required="required">
  </div>
  <div class="form-group">
    <label for="file">{{ __('Profile Pic') }}</label>
    <input type="file" name="profilePic" class="form-control" accept="image/*">
  </div>
  <div class="form-group">
    <label for="password">{!! __('Password <small>(leave empty to keep current)</small>') !!}</label>
    <input type="password" name="password" value="" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">
    <i class="fa fa-btn fa-sign-in"></i>{{ __('Update My Profile') }}
  </button>
</form>

</div><!-- /.card -->
</div><!-- /.col-10 -->


</div><!-- /.container -->

@endsection