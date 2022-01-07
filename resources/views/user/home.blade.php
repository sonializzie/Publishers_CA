@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>

                         <!-- User message in the user.publishers.home with a link
                            of the view all publishers table-->
                    @endif

                    You are logged in as an Ordinary user!
                    <a href="{{ route('user.publishers.index')}}"> View All Publishers</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
