@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Users') }}</div>

                <div class="card-body">
                   @foreach($users as $user)
                    <h1>*{{$user->memb_name}}<br></h1>
                   @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection