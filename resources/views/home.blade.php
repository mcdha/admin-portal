@extends('layouts.app')
@section('content')
<h1 class="text-center">Welcome</h1>
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
                        
                    @endif

                    {{ __('You are logged in! The Companies and Employees Links are Showned') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
