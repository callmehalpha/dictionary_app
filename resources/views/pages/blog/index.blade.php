@extends('layout.app')
@push('styles')
    <link rel="stylesheet" href="{{asset('css/blog.css')}}">
    <link rel="stylesheet" href="{{asset('css/style1.css')}}">
@endpush
@section('title')
    Blog
@endsection
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
                        {{--
                                                <div class="blogpost">
                                                    <a href="./blog-full.html">
                                                        <div class="postimg">
                                                            <img src="img/largebp.png" alt="">
                                                            <div class="postdate">
                                                                <h5>10</h5>
                                                                <p>Sept</p>
                                                            </div>
                                                        </div>
                                                        <div class="posttitle">
                                                            <h4>How to Start selling on Getkidsmart</h4>
                                                        </div>
                                                    </a>
                                                    <div class="posttext">
                                                        <p>Get a detailed view of your business,
                                                            Kidmart helps you focus on the most important data
                                                            to grow your business</p>
                                                    </div>
                                                    <div class="postfooter">
                                                        <div class="postauthor">
                                                            <p>AJAYI AYOBAMI</p>
                                                        </div>
                                                        <div class="posttime">
                                                            <p><b>5 MINS READ</b></p>
                                                        </div>
                                                    </div>
                                                </div>
                        --}}

                        <div class="otherposts">
                            <div class="row">
                                @if(count($posts) > 0)
                                    @foreach($posts as $post)
                                        <div class="col-lg-6">
                                            <div class="blogpost">
                                                <a href="/blog/{{$post->slug}}">
                                                    <div class="postimg">
                                                        <img src="{{Voyager::image($post->image)}}"
                                                             alt="{{$post->title}}" width="300" height="300">
                                                        <div class="postdate postdate2">
                                                            <h5>{{$post->created_at->format('D')}}</h5>
                                                            <p>{{$post->created_at->format('M')}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="posttitle">
                                                        <h4>{{$post->title}}</h4>
                                                    </div>
                                                </a>
                                                <div class="posttext">
                                                    <p>{!! Str::words($post->body,10) !!}
                                                    </p>
                                                </div>
                                                <div class="postfooter">
                                                    <div class="postauthor">
                                                        <p>Admin</p>
                                                    </div>
                                                    <div class="posttime">
                                                        <p><b>5 MINS READ</b></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                    <div class="numberpages">
                                        <nav aria-label="Page navigation example">
                                            {{$posts->links()}}
                                        </nav>
                                    </div>
                                @endif

                            </div>
                        </div>
                    </div>
                    @include('inc._blog-recent-posts')
                </div>
            </div>
        </section>
    </section>
@endsection
