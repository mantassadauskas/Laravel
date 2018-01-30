@extends ('layout')

    <div> {{$post->title }} </div>
    <div> {{$post->textarea }} </div>
<hr>
@section('footer')
    <div>some footer here</div>
@endsection