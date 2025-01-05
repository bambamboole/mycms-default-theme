@extends('mycms-default-theme::layouts.app')
@php
    Illuminate\Pagination\Paginator::defaultView('mycms-default-theme::partials.pagination');
@endphp
@section('title',  'Blog')
@section('content')

    <main class="py-3">
        @foreach($posts as $post)
            @include('mycms-default-theme::posts.partials.excerpt')
        @endforeach

        {{$posts->links()}}
    </main>



@endsection
