@extends('layout')
@section('content')
    <h4>Categorie blog: {{ $post->category }}</h4>

    <section class="articole">


        @isset($post)
            <div class="articol">
                <h4>{{ $post->title }}</h4>
                <p>{{ $post->description }}</p>
            </div>
        @endisset
        @empty($post)
            <p>Aceasta postare nu mai exista !</p>
        @endempty




    </section>
@endsection
