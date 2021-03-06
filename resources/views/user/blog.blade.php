@extends('user/app')

@section('bg-img',asset('user/img/home-bg.jpg'))
@section('title','Articles')
@section('sub-heading','')
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
	<style>
		.fa-thumbs-up:hover{
			color:#f41115;
		}
	</style>
@endsection
@section('main-content')
	<!-- Main Content -->
	<div class="container">
	    <div class="row" id="app">
	        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
			<table id="example1" class="">
	            @foreach ($posts as $post)
                 <tr> <td><a href="{{ route('article',$post->id) }}"><h3>{{ $post->title }}</h3></a></td> </tr>
				 <tr> <td>{{ $post->subtitle }}</td> </tr>
                 

				@endforeach
			</table>

	            <hr>
	            <!-- Pager -->
	            <ul class="pager">
	                <li class="next">
	                	{{ $posts->links() }}
	                </li>
	            </ul>
	        </div>
	    </div>
	</div>

	<hr>
@endsection
@section('footer')
	<script src="{{ asset('js/app.js') }}"></script>
@endsection