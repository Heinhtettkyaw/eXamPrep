@extends('Student.layouts.layout')
@section('content')
    <main class="flex flex-col bg-blue-100 dark:bg-DMgray-bg">
        <div class="text-2xl text-wbc-100 font-bold px-4 pt-3 dark:text-DMgray-primary_text">
            Profile Edit
        </div>
        <div class="bg-white m-6 rounded-lg shadow dark:bg-DMgray-card">
            <form action="{{ route('student#updateProfile', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="flex items-center justify-around rounded-t-lg bg-wbc-100 dark:bg-DMgray-hover">
                    @if (Auth::user()->image == null)
                        <div class="m-5 w-24 text-center">

                            <img class="w-24 h-24 rounded-lg shadow-lg border-2 border-white dark:border-DMgray-card"
                                src="{{ asset('Student/img/Takagi_S1.jpg') }}" alt="" />
                        </div>
                    @else
                        <div class="m-5 w-24 text-center">

                            <img class="w-24 h-24 rounded-lg shadow-lg border-2 border-white dark:border-DMgray-card"
                                src="{{ asset('storage/' . Auth::user()->image) }}" alt="" />
                        </div>
                    @endif

                    <div class="mb-3 flex flex-col">
                        <label for="formFile" class="mb-2 inline-block text-white dark:text-DMgray-secondary_text">Change
                            Profile
                            Picture</label>
                        <input
                            class="rounded bg-blue-100 w-40 p-2 hover:bg-gray-300 file:hidden cursor-pointer dark:bg-wbc-100 dark:text-white dark:hover:bg-wbc-50"
                            type="file" name="image" />
                    </div>
                </div>
                <div class="relative z-0 mx-7 mt-6 mb-6 group">
                    <input type="text" name="name" value="{{ old('name', Auth::user()->name) }}"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none @error('name')
                                placeholder-red-700 border border-red-500 rounded outline-none focus:ring-red-500
                            @enderror dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" />
                    <label for="Name"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Name</label>
                    @error('name')
                        <span class="inline-flex text-sm text-red-700">{{ $message }} </span>
                    @enderror
                </div>
                <div class="relative z-0 mx-7 mb-6 group">
                    <input type="tel" name="phone" value="{{ old('phone', Auth::user()->phone) }}"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  @error('phone')
                                placeholder-red-700 border border-red-500 rounded outline-none focus:ring-red-500
                            @enderror dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " />
                    <label for="phone_number"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone
                        Number</label>
                    @error('phone')
                        <span class="inline-flex text-sm text-red-700">{{ $message }} </span>
                    @enderror
                </div>
                <div class="relative z-0 mx-7 mb-6 group">
                    <input type="hidden" name="email" value="{{ old('email', Auth::user()->email) }}"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" />
                    <label for="email"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
                </div>
                <div class="relative z-0 mx-7 mb-6 group">
                    <input type="text" name="address" value="  {{ old('address', Auth::user()->address) }}"
                        class="@error('address')
                                placeholder-red-700 border border-red-500 rounded outline-none focus:ring-red-500
                            @enderror block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " />
                    <label for="address"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400
                         duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0]
                         peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500
                         peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0
                          peer-focus:scale-75 peer-focus:-translate-y-6">Address</label>

                    @error('address')
                        <span class="inline-flex text-sm text-red-700">{{ $message }} </span>
                    @enderror
                </div>
                <div class="relative z-0 mx-7 mb-6 group">
                    <label for="dob"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400
                        duration-300 transform -translate-y-6 scale-75 top-3 -z-10
                         origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500
                          peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0
                           peer-focus:scale-75 peer-focus:-translate-y-6">Date
                        Of Birth</label><br>
                    <input type="date" name="dob" value="{{ old('dob', Auth::user()->dob) }}"
                        class="shadow-sm bg-gray-50 @error('dob')
                                placeholder-red-700 border border-red-500 rounded outline-none focus:ring-red-500
                            @enderror border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light">

                    @error('dob')
                        <span class="inline-flex text-sm text-red-700">{{ $message }} </span>
                    @enderror
                </div>

                <div class="flex justify-center">
                    <button type="submit"
                        class="my-3 mx-3 text-white bg-blue-600 hover:bg-wbc-50 font-medium shadow rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </main>
@endsection
