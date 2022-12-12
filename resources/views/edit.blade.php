@extends('templeteAdmin')
@section('title','edit')

@section('konten')
<form action="/create/{{$tb_meja->id}}" method="POST" class="m-auto bg-white shadow-md rounded px-8 pt-6 pb-10 mb-4 w-1/2">
    @method('put')
    @csrf
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="username" >
          No Table
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" name="no_meja" placeholder="Name" value="{{$tb_meja->no_meja}}">
      </div>
      <input class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-4 " type="submit" name="submit" value="save">
      
</form>
@endsection