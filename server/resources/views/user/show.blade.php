@extends('layouts.app')

@section('content')
    <div class="container card">
        <div class="card-body">
            <h2 class="card-title">Create task for user {{$user->name}} ({{$user->email}})</h2>
            <form method="post" class="card-body" action="{{route('users.store')}}">
                @csrf
                <input name="name" type="text" placeholder="Task"/>
                <input name="id" type="hidden" value="{{$user->id}}"/>
                <input type="submit" value="Proceed"/>
            </form>
        </div>
    </div>
@endsection
