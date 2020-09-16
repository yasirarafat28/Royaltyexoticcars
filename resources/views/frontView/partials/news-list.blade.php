<div href="single.html" class="h-entry mb-30 gradient" style="background-image: url({{url($post->image??'')}});">
    <div class="text">
        <h2 class="font-weight-bold text-underline">{{$post->title}}</h2>
        <p class="text-white">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aut commodi consequatur magnam possimus. Accusantium dolorem eius, illo magnam non officiis sint sunt suscipit ullam.
            <a href="{{route('newsDetails',[$post->id,$post->slug])}}" class="link">Read more &gt;&gt;</a>
        </p>

        <span class="date">{{date("l, F d Y h:i:a",strtotime($post->created_at))}}</span>
    </div>
</div>
