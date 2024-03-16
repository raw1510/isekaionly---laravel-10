@extends('components.blogComponent') {{--includes the while code of blogcomponent--}}

@section('content_article')
{{-- Get the file path based on the file name stored in $data->content --}}
@php
    $filePath = $manga_data->content;
@endphp

{{-- Check if the file exists before attempting to read its content --}}
@if (file_exists($filePath))
    {{-- Read and display the content of the file with line breaks converted to <br> tags --}}
    {!! nl2br(file_get_contents($filePath)) !!}
@else
    {{-- Handle the case when the file does not exist --}}
    <p>Article content not available.</p>
@endif
@endsection

@section('Date')
{{$manga_data->Date}}

@endsection

@section('title')
{{$manga_data->Manga_title}}
@endsection


@section('banner_image')
<img src="{{asset('banner_images/manga_banner_images/'.$manga_data->image_url)}}" class="w-[100%] lg:w-[80%] h-[100%] md:w-[100%] md:h-[100%] lg:aspect-square lg:object-cover" alt="thumbnail/$thumbnail">
@endsection


@section('head.title')
{{{$manga_data->Manga_title}}}
@endsection