@extends ('layout')

@section ('content')
some content
        @endsection
@foreach ($post as $posts)

    <a href="/{{ $posts->id }}">
    <div> {{$posts->title }} </div>
    </a>
    <div> {{$posts->textarea }} </div>
    <div>{{$posts->created_at }}</div>

    <hr>
    @endforeach
@section('footer')
<div>something</div>
    @endsection