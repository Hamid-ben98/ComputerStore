@extends('layout')
@section('title','Show Computer')    

@section('content')
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    	<h1>COMPUTER</h1>
    	<h3>{{$computer['name']}} from <strong>{{$computer['origin']}}</strong> -{{$computer['price']}}$</h3>
        <a href="{{route('computers.edit',$computer->id)}}">Edit</a>
        <form action="route('computers.destroy',$computer->id)" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="Delete">
        </form>
        
    </div>
@endsection