@extends('templete')
@section('title','home')

@section('konten')

    <h1 class="m-auto p-5 text-center font-bold">List Table Billiard</h1>
    <div class="grid gap-4 grid-cols-3 grid-rows-3">
        @foreach ($tb_meja as $m)
            
            <div class="bg-white max-w-sm rounded overflow-hidden shadow-lg my-3">
                 <img src="https://images.unsplash.com/photo-1544281153-6603be88b354?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8YmlsbGlhcmR8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt="internet error" class="rounded-t-lg">
                 <div class="py-10 mx-5">
                    <h1 class="font-semibold text-xl">Table{{$m->no_meja}}</h1>
                    <button class="font-semibold text-xl my-1"><a href="booking">Booking</a></button>
                 </div>
            </div>
        @endforeach
          
           
           
       
    </div>

@endsection