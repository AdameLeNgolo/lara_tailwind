@extends('layouts.app')

@section('content')
<main class="mx-auto p-12 bg-gray-100">
	<div class="flex items-center justify-around flex-wrap">
		@for ($i = 0; $i < 11; $i++)
			<div class="bg-white rounded-lg p-7 w-80 h-auto text-center m-3">
				<a href="#" class="text-2xl hover:underline hover:text-gray-600 ">Title</a>
				<p class="my-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, suscipit, rem fugiat veritatis doloribus commodi quis saepe! Consequuntur, repellendus doloribus. Veniam molestiae saepe nobis quae tempore, quisquam! Laborum corrupti, aut.</p>

				<a href="#" class="text-blue-500 border-2 border-blue-300 rounded-md p-3 px-5 text-lg hover:bg-blue-500 hover:text-white">See more</a>
			</div>  
		@endfor  
	</div>	
</main>
@stop