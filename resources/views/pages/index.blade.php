@extends('layout.app')
@section('search-bar')
    @include('inc._search-box')
@endsection
@push('styles')
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
@endpush
@section('content')
    <section class="main">
        <div class="moving-words">
            <div class="container-fluid">
                <div class="row">
                    <div class="moving-word d-flex">
                        <div class="stick-left">
                            <div class="trend">TRENDING</div>
                            <div class="pause"><a href="#"><i class="bi bi-pause-fill"></i></a></div>
                        </div>
                        <div class="marquee">
                            <div class="move-text d-flex">
                                @if(count($trends) > 0)
                                    @foreach($trends as $trend)
                                        <div class="text">{{$trend->word}} <span>{{rand(0,99)}}%</span></div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="advert">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="ad-img"><a href="#"><img src="img/dicimg.png" alt=""></a></div>
                    </div>
                    <div class="col-md-6">
                        <div class="ad-img"><a href="#"><img src="img/dicimg.png" alt=""></a></div>
                    </div>
                    <div class="col-md-6">
                        <div class="ad-img"><a href="#"><img src="img/dicimg.png" alt=""></a></div>
                    </div>
                    <div class="col-md-6">
                        <div class="ad-img"><a href="#"><img src="img/dicimg.png" alt=""></a></div>
                    </div>
                </div>
            </div>
        </div>
        {{--
                <div class="word-day">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="wordoftheday">
                                    WORD OF THE DAY
                                </div>
                                <div class="theword">
                                    <div class="topword">
                                        <p>Magnificent</p>
                                    </div>
                                    <div class="subword">[Mag-<span>ni</span>-fi-ent]
                                        <span><a href="#"><i class="bi bi-volume-up-fill"></i></a></span>
                                    </div>
                                    <div class="meaning"><a href="#">MEANING, EXAMPLES, & PODCAST </a><span> MAR 25, 2022</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5"></div>
                        </div>
                    </div>
                </div>
        --}}

        <div class="dict">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wordoftheday">
                            BROWSE DICTIONARYAPP.NET
                        </div>
                        <div class="dict-sub">
                            Dictionary.com is the world's leading online source for
                            definitions, word origins, and a whole lot more.
                            From Word of the Day to the stories behind today's slang,
                            Dictionary.com unlocks the secrets of the English language for millions of people.
                        </div>
                    </div>
                    <div class="letter-list d-flex">
                        <a href="#">
                            <div class="letter">#</div>
                        </a>
                        <a href="#">
                            <div class="letter">Aa</div>
                        </a>
                        <a href="#">
                            <div class="letter">Bb</div>
                        </a>
                        <a href="#">
                            <div class="letter">Cc</div>
                        </a>
                        <a href="#">
                            <div class="letter">Dd</div>
                        </a>
                        <a href="#">
                            <div class="letter">Ee</div>
                        </a>
                        <a href="#">
                            <div class="letter">Ff</div>
                        </a>
                        <a href="#">
                            <div class="letter">Gg</div>
                        </a>
                        <a href="#">
                            <div class="letter">Hh</div>
                        </a>
                        <a href="#">
                            <div class="letter">Ii</div>
                        </a>
                        <a href="#">
                            <div class="letter">Jj</div>
                        </a>
                        <a href="#">
                            <div class="letter">Kk</div>
                        </a>
                        <a href="#">
                            <div class="letter">Ll</div>
                        </a>
                        <a href="#">
                            <div class="letter">Mm</div>
                        </a>
                        <a href="#">
                            <div class="letter">Nn</div>
                        </a>
                        <a href="#">
                            <div class="letter">Oo</div>
                        </a>
                        <a href="#">
                            <div class="letter">Pp</div>
                        </a>
                        <a href="#">
                            <div class="letter">Qq</div>
                        </a>
                        <a href="#">
                            <div class="letter">Rr</div>
                        </a>
                        <a href="#">
                            <div class="letter">Ss</div>
                        </a>
                        <a href="#">
                            <div class="letter">Tt</div>
                        </a>
                        <a href="#">
                            <div class="letter">Uu</div>
                        </a>
                        <a href="#">
                            <div class="letter">Vv</div>
                        </a>
                        <a href="#">
                            <div class="letter">Ww</div>
                        </a>
                        <a href="#">
                            <div class="letter">Xx</div>
                        </a>
                        <a href="#">
                            <div class="letter">Yy</div>
                        </a>
                        <a href="#">
                            <div class="letter">Zz</div>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
