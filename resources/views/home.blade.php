@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>User ID: <strong>{{ Auth::user()->id }}</strong> </p>
                    <p>E-mail: <strong>{{ Auth::user()->email }}</strong> </p>
                    <p>User Status: <strong>{{ Auth::user()->verified ? 'Activated' : 'Pending' }}</strong> </p>
                    <p>
                        <button class="btn btn-warning"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </button>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
