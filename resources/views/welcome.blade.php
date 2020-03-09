@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 blog-main col-lg-8">
                <div class="blog-post">
                    <ul class="list-group">
                        @foreach($articles as $article)
                            <li class="list-group-item">
                                <h2 class="blog-post-title">
                                    <a href="/articles/{{$article->id}}">{{$article->title}}</a>
                                </h2>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <nav class="blog-pagination">
                    <a class="btn btn-outline-primary" href="#">Older</a>
                    <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
                </nav>
            </div>

        </div>
    </div>
@endsection