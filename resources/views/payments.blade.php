@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <form method="POST" action="/payments">
            @csrf

            <button class="btn btn-primary" type="submit" formmethod="POST">Make Payment</button>
        </form>
    </div>
    @if (session('message'))
        <div>
            {{ session('message') }}
        </div>
    @endif
</div>
@endsection