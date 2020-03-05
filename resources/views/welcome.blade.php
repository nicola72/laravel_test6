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
            <aside class="col-md-4 blog-sidebar">
                <div class="p-3">
                    <h3 class="blog-post-title">
                        This week you have showcase only the articles Writte by
                        <a href="/users/{{$article->user_id}}/articles">{{$article->user->name}}</a>
                    </h3>
                    <strong>Showing the first four results</strong>
                    <hr class="linenums" />
                    <h4 class="font-italic">Tags Cloud</h4>
                    @foreach($tags as $tag)
                        <p class="font-italic">
                            {{$tag->tag}}
                        </p>
                    @endforeach
                </div>
            </aside>
        </div>
    </div>
@endsection