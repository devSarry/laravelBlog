@extends('master', ['title' => 'Home',
                    'headerImage' => 'img/home-bg.jpg',
                    'heading' => 'Jonathan Sarry'])

{{--@section('title', 'Home') @stop

@section('headerImage') {{ url('img/home-bg.jpg') }} @stop

@section('heading', 'Jonathan Sarry') @stop--}}

   @section('content')
        <div class="post-preview">
            <a href="{{url('/articles/sample')}}"> <!-- should be articles/{id}-->
                <h2 class="post-title">
                    { { articles->title } }
                </h2>
                <h3 class="post-subtitle">
                    { { articles->summery } } like the first 10 words.
                    Problems look mighty small from 150 miles up
                </h3>
            </a>
            <!-- should be take you to a users profile page/{id}-->
            <p class="post-meta">Posted by
                <a href="{ { articles->user } }">{ { articles->author } }</a>
                { { articles->date } }
            </p>


        </div>
        <hr>

        @foreach($articles as $article)

                <div class="post-preview">
                    <a href="{{url($article->image)}}"> <!-- should be articles/{id}-->
                        <h2 class="post-title">
                            {{ $article->title }}
                        </h2>
                        <h3 class="post-subtitle">
                            {{ $article->summery }} like the first 10 words.
                            Problems look mighty small from 150 miles up
                        </h3>
                    </a>
                    <!-- should be take you to a users profile page/{id}-->
                    <p class="post-meta">Posted by
                        <a href="{ { articles->user } }">{{ $article->author }}</a>
                        {{ $article->date }}
                    </p>
                </div>
                <hr>

        @endforeach


        <!-- Pager -->
        <ul class="pager">
            <li class="next">
                <a href="#">Older Posts &rarr;</a>
            </li>
        </ul>
    @stop