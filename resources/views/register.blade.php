@extends('templete')
@section('title','login')

@section('konten')

    <h1 class="text-center text-4xl font-bold my-8">Login</h1>
    <div class="m-auto">
        <form action="" class="m-auto bg-white shadow-md rounded px-8 pt-6 pb-10 w-1/2">
            <div class="mb-4 pr-7">
                <label class="block text-gray-700 text-sm font-bold mb-2 " for="username">
                  Username
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Name">
              </div>
              <div class="mb-4 pr-7">
                <label class="block text-gray-700 text-sm font-bold mb-2 " for="username">
                  Email
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="email" placeholder="email">
              </div>
              <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                  Password
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="Password" placeholder="">
              </div>
              <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                 Confirm Password
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="Password" placeholder="">
              </div>
              <div class="mb-4">
                <p>You Have Acount <a href="login" class="text-blue-500">login</a></p>
              </div>
              <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-4 " type="button">
                Login
              </button>
        </form>
    </div>
    <div class="mb-24">.</div>
@endsection