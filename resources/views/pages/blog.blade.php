@extends('layout')
@section('content')
    <div class="blog-post-area">
        <h2 class="title text-center">Blog</h2>
        @foreach($blog as $key => $product)
        <div class="single-blog-post">
            <h3>{{($product -> TieuDe)}}</h3>
            <a href="">
                <img src="{{($product -> HinhDD)}}" alt="">
            </a>
            {{($product -> NoiDung)}}
        </div>
        @endforeach
    </div><!--/blog-post-area-->
@endsection