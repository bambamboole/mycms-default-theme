@extends('mycms-default-theme::layouts.app')
@php
    Illuminate\Pagination\Paginator::defaultView('mycms-default-theme::partials.pagination');
@endphp
@section('title',  "Tag: {$tag->name}")
@section('content')

    <main class="py-3">

        <h1 class="text-grey-dark font-condensed font-bold text-4xl mb-4">Tag: {{$tag->name}}</h1>

        @foreach($posts as $post)
            @include('mycms-default-theme::posts.partials.excerpt')
        @endforeach
        {{$posts->links()}}
    </main>

@endsection
