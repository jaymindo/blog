@extends('components.layout')

    @section('banner')
        <h1>My Blog</h1>
        @foreach ($posts as $post)
            <article>
                <h1>
                    <a href="/posts/{{ $post->slug }}">
                        {{ $post->title }}
                    </a>
                </h1>
                <a href="/categories/{{$post->category->slug}}" >{{ $post->category->name }}</a>

                <div>
                    {{ $post->excerpt }}
                </div>
            </article>
        @endforeach

    @endsection
