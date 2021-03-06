@extends('user/app')
@section('bg-img',asset('user/img/home-bg.jpg'))

@section('head')
<link rel="stylesheet" href="{{ asset('user/css/prism.css') }}">
@endsection
@section('title',$post->title)
@section('sub-heading',$post->subtitle)

@section('main-content')
<!-- Post Content -->

<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <small>Created at{{ $post->created_at }} and posted by <b><i>{{ $post->user->name }}</i></b></small>
			<br><br>
                             
                {!! htmlspecialchars_decode($post->body) !!}

                {{-- Tag clouds --}}
                <h3>Tags </h3>
                @foreach ($post->tags as $tag)
                <a href="{{ route('tag',$tag->slug) }}">
					<small class="pull-left" style="margin-right: 20px;border-radius: 5px;border: 1px solid gray;padding: 5px;">  
						{{ $tag->name }}
					</small>
				</a>
                @endforeach
            </div>
            
        </div>
    </div>
</article>

<hr>
@endsection
@section('footer')
<script src="{{ asset('user/js/prism.js') }}"></script>
@endsection