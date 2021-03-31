@extends('layouts.app')

@section('content')
<main class="mx-auto p-12 bg-gray-100">
	<div class="flex items-center justify-around flex-wrap">
		@foreach ($articles as $article)
			<div class="bg-white rounded-lg p-7 w-80 text-center m-3">
				<a href="{{ route('article.show',$article->slug) }}" class="text hover:underline hover:text-gray-600 ">{{ $article->title }}</a>
				<p class="my-5">{{ $article->content }}</p>

				<a href="#" class="text-blue-500 border-2 border-blue-300 rounded-md p-3 px-5 text-lg hover:bg-blue-500 hover:text-white">See more</a>
			</div>  
		@endforeach 
	</div>

	{{ $articles->links() }}	
</main>
@stop