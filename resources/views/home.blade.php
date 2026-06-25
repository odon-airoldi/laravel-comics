@extends("layouts.main")



@php

$comics = config("comics")

@endphp

@section("contain")

    <div class="row">
        @foreach ($comics as $comic) 
        <div class="col-2">
            <x-card>
                <x-slot name="title">{{ $comic["title"] }}</x-slot>
                <x-slot name="description">{{ $comic["description"] }}</x-slot>
                <x-slot name="thumb">{{ $comic["thumb"] }}</x-slot>
            </x-card>
        </div>
        @endforeach
    </div>
        

@endsection




