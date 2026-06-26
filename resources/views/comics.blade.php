@extends("layouts.main")


@php

$comics = config("comics")

@endphp

@section("contain")

    <div class="row g-3">
        @foreach ($comics as $comic)
        <div class="col-3">
            <x-card>
                <x-slot name="title">{{ $comic["title"] }}</x-slot>
                <x-slot name="description">{{ substr($comic["description"], 0, 160) }}...</x-slot>
                <x-slot name="thumb">{{ $comic["thumb"] }}</x-slot>
            </x-card>
        </div>
        @endforeach
    </div>

@endsection




