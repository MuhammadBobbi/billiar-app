@extends('templete')
@section('title','myorder')

@section('konten')
<h1 class="text-center text-4xl font-bold my-8">My Booking</h1>
<div class="m-auto bg-white shadow-md rounded px-8 pt-6 pb-10 mb-4 w-1/2 ">
    <table class="w-full px-3 mx-auto">
        <thead>
          <tr>
            <th class="text-left py-4 ">Name</th>
            <th class="text-left py-4 ">Name</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="text-left py-4 ">Table</td>
            <td class="text-left py-4 "></td>
          </tr>
          <tr>
            <td class="text-left py-4">Time star</td>
            <td class="text-left py-4"></td>
          </tr>
          <tr>
            <td class="text-left py-4">Price</td>
            <td class="text-left py-4"></td>
          </tr>
        </tbody>
      </table>
</div>
<div class="mb-48">
    <h1>.</h1>

</div>
@endsection