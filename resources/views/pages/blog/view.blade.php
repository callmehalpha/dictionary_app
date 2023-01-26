@extends('layout.app')
@push('styles')
    <link rel="stylesheet" href="{{asset('css/blog.css')}}">
    <link rel="stylesheet" href="{{asset('css/style1.css')}}">
@endpush
@section('content')
    <section class="main">
        <section class="blog">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="searc">
                            <form>
                                <div class="form-group seache">
                                    <input type="search" class="search2" id="search" placeholder="Search">
                                </div>
                            </form>
                        </div>
                        @foreach($posts as $post)
                        @section('title')
                            {{$post->title}}
                        @endsection
                        <div class="blogpost">
                            <div class="postimg">
                                <img class="img-fluid"
                                     src="{{Voyager::image($post->image)}}" alt="">
                            </div>
                        </div>
                        <div class="post-body">
                            {!! $post->body !!}
                        </div>
                        @endforeach
                        <div class="share">
                            <div>
                                SHARE:
                            </div>
                            {{--<div class="fb">
                                <i class="bi bi-facebook"></i>
                            </div>
                            <div class="tw">
                                <i class="bi bi-twitter"></i>
                            </div>--}}
                            <div class="what">
                                <a href="https://api.whatsapp.com/send?text={{urlencode(url()->current()) }}"> <i
                                        class="bi bi-whatsapp"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                    @include('inc._blog-recent-posts')
                </div>
            </div>
        </section>
    </section>
@endsection
