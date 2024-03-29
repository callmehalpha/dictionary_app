@extends('layout.app')
@section('search-bar')
    @include('inc._search-box')
@endsection
@push('styles')
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
@endpush
@section('title')
    List of words on letter "{{$letter}}"
@endsection
@section('content')
    <section class="main">
        <div class="search-result">
            <div class="container">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">List of word with letter "{{$letter}}"</h5>
                            <hr>
                            {{--
                                                        <p class="vocabu">Verb (used with object)</p>
                            --}}

                            <ol>
                                @if(count($results) > 0)
                                    @foreach($results as $result)
                                        <li>
                                            {{$result->word}}
                                            @foreach($result->meaning as $res)
                                                <p>{{$res}}</p>
                                            @endforeach
                                        </li>
                                    @endforeach
                                    {{$results->links()}}
                                @else
                                    <li>
                                        No words with letter
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
