@extends('templeteAdmin')
@section('title','homeadmin')

@section('konten')
<h1 class="text-center text-4xl font-bold my-8">List Table</h1>
<div class="m-auto bg-white shadow-md rounded px-8 pt-6 pb-10 mb-4 w-1/2 ">
    <table class="w-full px-3 mx-auto">
        <thead>
          <tr>
            <th class="text-left py-4 ">No table</th>
            <th class="text-left py-4 ">action</th>
          </tr>
        </thead>
        @foreach ($tb_meja as $mm)
        <tbody>
          <tr>
            <td class="text-left py-4 ">Table {{$mm->no_meja}}</td>
            <td class="text-left py-4 flex gap-1">
               <a href="/create/{{$mm->id}}/edit">edit</a>
               <form action="/create/{{$mm->id}}" method="POST">
                @csrf
                @method('delete')
                <input type="submit" name="" id="" value="delete">
               </form>
            </td>
          </tr>
        </tbody>
        @endforeach
      </table>
</div>
<div class="mb-48">
  <h1>.</h1>

</div>
@endsection