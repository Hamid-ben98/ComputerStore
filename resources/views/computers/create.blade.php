@extends('layout')
@section('title','Create Computers')    

@section('content')
<div>
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    	<h1>COMPUTER Create</h1>
    </div>

    <div class="flex justify-center">
    	<form action="{{route('computers.store')}}" method="post" class="form bg-white p-6 border-1">
    		@csrf
    		<div>
    			<label for="computer-name" class="text-sm">Computer Name</label>
    			<input type="text" class="text-lg border-1" id="computer-name" name="computer-name" value="{{old('computer-name')}}">
    			@error('computer-name')
					<div class ="form-error">
					{{$message}}
					</div>
				@enderror
    		</div>
    		<div>
    			<label for="computer-origin" class="text-sm">Computer Origin</label>
    			<input type="text" class="text-lg border-1" id="computer-origin" name="computer-origin" value="{{old('computer-origin')}}">
    		</div>
    		<div>
    			<label for="computer-price" class="text-sm">Computer Price</label>
    			<input type="text" class="text-lg border-1" id="computer-price" name="computer-price" value="{{old('computer-price')}}">
    		</div>
    		<div>
    			<button type="submit">Submit</button>
    		</div>
    	</form>
    </div>
</div>
@endsection