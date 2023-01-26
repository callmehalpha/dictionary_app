@extends('layout.app')
@section('search-bar')
    @include('inc._search-box')
@endsection
@push('styles')
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
@endpush
@section('content')
    <section class="main">
        <div class="search-result">
            <div class="container">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Search</h5>
                            <hr>
                            {{--
                                                        <p class="vocabu">Verb (used with object)</p>
                            --}}

                            <ol>
                                @if(count($results) > 0)
                                    @foreach($results as $result)
                                        <li>
                                            {{$result->word}}
                                            @section('meta')
                                                {{$result->word}}
                                            @endsection

                                            @section('title')
                                                List of meaning to {{$result->word}}
                                            @endsection

                                            @foreach($result->meaning as $res)
                                                <p>{{$res}}</p>
                                            @endforeach
                                        </li>
                                    @endforeach
                                @else
                                    <li>
                                        Word not found
                                    </li>
                                @endif
                            </ol>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
