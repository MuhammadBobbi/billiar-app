@extends('templete')
@section('title','order')

@section('konten')
<div class="py-8">
                <div class="container mx-auto">
                    <h1 class="text-center text-4xl font-bold my-8">ORDER</h1>
                </div>

                    <form class="m-auto bg-white shadow-md rounded px-8 pt-6 pb-10 mb-4 w-1/2">
                      <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                          Name
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Name">
                      </div>
                      <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="">
                            Table
                          </label>
                          <div class="relative">
                            <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                              <option>Table 1</option>
                              <option>Table 2</option>
                              <option>Table 3</option>
                              <option>Table 4</option>
                              <option>Table 5</option>
                              <option>Table 6</option>
                              <option>Table 7</option>
                              <option>Table 8</option>
                              <option>Table 9</option>
                            </select>
                          </div>
                         
                          <label class="block text-gray-700 text-sm font-bold mb-2" for="">
                            Time Start
                          </label>
                          <div class="relative">
                            <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                              <option>11 am</option>
                              <option>12 am</option>
                              <option>14 pm</option>
                              <option>15 pm</option>
                              <option>16 pm</option>
                              <option>17 pm</option>
                              <option>18 pm</option>
                              <option>19 pm</option>
                              <option>20 pm</option>
                            </select>
                          </div>
                          <label class="block text-gray-700 text-sm font-bold mb-2" for="">
                            Price
                          </label>
                          <div class="relative">
                            <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                              <option>1 hours - Rp 30000</option>
                              <option>2 hours - Rp 50000</option>
                              <option>3 hours - Rp 80000</option>
                              <option>4 hours - Rp 100000</option>
                              <option>5 hours - Rp 130000</option>
                              <option>6 hours - Rp 150000</option>
                            </select>
                          </div>
                      <div class="flex items-center">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-4 " type="button">
                          Booking
                        </button>
                      </div>
                    </form>
                  
            </div>
</div>
@endsection