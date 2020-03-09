@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <ul class="list-group">
                    @foreach($users as $user)
                        <li class="list-group-item">
                            <h2 class="blockquote-reverse">
                                <a href="/users/{{ $user->id }}">{{ $user->name }}</a>
                            </h2>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection