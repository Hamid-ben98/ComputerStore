@extends('layout')
@section('title','Computers PAGE')    

@section('content')
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    	<h1>COMPUTERS</h1>
    	@if (count($computers)>0)
        	<ul>
        		@foreach ($computers as $computer)
        			<a href="{{route('computers.show',['computer'=> $computer['id']])}}">
        				<li>
        					{{$computer['name']}} from <strong>{{$computer['origin']}}</strong>
        				</li>
        			</a>
        		@endforeach
        	</ul>
        @else
        	<p>Ther are no computers in the stock</p>
        @endif
    </div>
@endsection