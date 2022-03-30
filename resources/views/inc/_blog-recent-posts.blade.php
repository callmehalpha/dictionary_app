{{--@php
    use TCG\Voyager\Models\Post;

        $recent_posts = Post::orderBy('created_at', 'DESC')->first()

@endphp--}}
<div class="col-lg-4">
    <div class="sidebar">
        <div class="recentposts">
            <div class="recentposts-header">
                <h4>Recent Posts</h4>
            </div>

            @if(count($recent_posts) > 0)
                @foreach($recent_posts as $recent_post)
                    <a href="/blog/{{$recent_post->slug}}">
                        <div class="recentpost">
                            <div class="recentpostimg">
                                <img src="{{Voyager::image($recent_post->image)}}"
                                     alt="{{$recent_post->title}}" width="100" height="100">
                            </div>
                            <div class="recentposttitle">
                                <h5>{{$recent_post->title}}</h5>
                                <p class="date">{{$recent_post->created_at->format('D-M-Y')}}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            @endif

        </div>
    </div>
</div>
