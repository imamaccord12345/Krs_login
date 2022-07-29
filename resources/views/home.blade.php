<!-- @extends('layouts.app') -->

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                <div class="card-footer">
                    <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
                </div>
            </div>
        </div>
    </div>
</div> -->

<div>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
 <div class="container-fluid">
  <a class="navbar-brand" href="#">Brand</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"  aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="main_nav">
	<ul class="navbar-nav">
        <li class="nav-item dropdown">
		   <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> Fakultas </a>
		    <ul class="dropdown-menu">
			  <li><a class="dropdown-item" href="#">Teknik</a></li>
			  <li><a class="dropdown-item" href="#">Kebidanan </a></li>
			  <li><a class="dropdown-item" href="#">Pertanian</a></li>
			  <li><a class="dropdown-item" href="#">Hukum</a></li>
		    </ul>
        <li class="nav-item active"> <a class="nav-link" href="#">KRS </a> </li>
		<li class="nav-item active"> <a class="nav-link" href="#">KHS </a> </li>


	
	</ul>
  </div> <!-- navbar-collapse.// -->
 </div> <!-- container-fluid.// -->
</nav>
</div>
@endsection
