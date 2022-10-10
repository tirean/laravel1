@extends('layout')
@section('content')
    <h4>Categorie blog: </h4>

    <section class="articole">


        @forelse ($posts as $post)
            <div class="articol">
                <a href="/blog/{{ $post->category }}/{{ $post->id }}">{{ $post->title }}</a>
                <p>{{ $post->description }}</p>
            </div>
        @empty
            <p>Nu avem postari !</p>
        @endforelse



    </section>
@endsection
