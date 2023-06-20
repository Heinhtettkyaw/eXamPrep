@extends('Admin.layouts.master')
@section('content')
    <main class="h-full pb-16 overflow-y-auto">
        <div class="container grid px-6 mx-auto">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <a href="{{ route('admin#showStudents') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5 mr-2 text-gray-500 hover:text-gray-700">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                        </svg>
                    </a>
                    <h2 class="text-lg my-6 font-semibold text-gray-700 dark:text-gray-200">
                        Edit Student
                    </h2>
                </div>
                <ol class="inline-flex items-center space-x-1 md:space-x-3 text-xs">
                    <li class="inline-flex items-center">
                        <a href="{{ route('admin#dashboard') }}"
                            class="inline-flex items-center font-semibold text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:text-gray-400 dark:hover:text-white">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                                </path>
                            </svg>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <a href="{{ route('admin#showStudents') }}"
                                class="ml-1 font-semibold text-gray-500 hover:text-gray-700 md:ml-2 dark:text-gray-400 dark:hover:text-white">Students</a>
                        </div>
                    </li>

                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-1 font-semibold text-gray-700 md:ml-2 dark:text-gray-400">Edit Student</span>
                        </div>
                    </li>
                </ol>
            </div>
            <form action="{{ route('admin#editStudent') }}" method="post">
                @csrf


                <input type="hidden" name="id" value="{{ $student['id'] }}">
                <div class="px-4 py-3 mb-8 bg-white rounded-l-lg shadow-md dark:bg-gray-800">
                    <div class="mb-3">
                        <label for="name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                        <input type="text" name="name" value="{{ old('name', $student['name']) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('name')
                                placeholder-red-700 border border-red-500 rounded outline-none focus:ring-red-500
                            @enderror dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @error('name')
                            <span class="inline-flex text-sm text-red-700">{{ $message }} </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="block text-sm text-gray-700 dark:text-gray-400">Email</label>
                        <input type="email" name="email" value="{{ old('email', $student['email']) }}"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 @error('email')
                                placeholder-red-700 border border-red-500 rounded outline-none focus:ring-red-500
                            @enderror dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light">
                        @error('email')
                            <span class="inline-flex text-sm text-red-700">{{ $message }} </span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="Phone" class="block text-sm text-gray-700 dark:text-gray-400">Phone</label>
                        <input type="tel" name="phone" value="{{ old('phone', $student['phone']) }}"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 @error('phone')
                                placeholder-red-700 border border-red-500 rounded outline-none focus:ring-red-500
                            @enderror dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light">
                        @error('phone')
                            <span class="inline-flex text-sm text-red-700">{{ $message }} </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="address" class="block text-sm text-gray-700 dark:text-gray-400">Address</label>
                        <input type="text" name="address" value="{{ old('address', $student['address']) }}"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 @error('address')
                                placeholder-red-700 border border-red-500 rounded outline-none focus:ring-red-500
                            @enderror dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light">
                        @error('address')
                            <span class="inline-flex text-sm text-red-700">{{ $message }} </span>
                        @enderror
                    </div>

                    <div date-rangepicker class="mb-2 flex items-center">
                        <span class="block text-sm text-gray-700 dark:text-gray-400 mr-5">Date of Birth</span><br>

                        <div class="relative">

                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input name="dateOfBirth" type="date" value="{{ old('dateOfBirth', $student['dob']) }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 @error('dateOfBirth')
                                placeholder-red-700 border border-red-500 rounded outline-none focus:ring-red-500
                            @enderror  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Select date ">
                            @error('dateOfBirth')
                                <span class="inline-flex text-sm text-red-700">{{ $message }} </span>
                            @enderror
                        </div>
                    </div>



                    <label class="mb-4 font-semibold text-gray-900 dark:text-white">Gender Identification</label>

                    <div class="flex">

                        @switch($student['gender'])
                            @case('male')
                                <div class="flex items-center mr-4">
                                    <input checked id="inline-checked-radio" type="radio" value="male" name="gender"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="inline-radio"
                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Male</label>
                                </div>
                                <div class="flex items-center mr-4">
                                    <input id="inline-2-radio" type="radio" value="female" name="gender"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="inline-2-radio"
                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Female</label>
                                </div>
                                <div class="flex items-center mr-4">
                                    <input id="inline-2-radio" type="radio" value="other" name="gender"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="inline-checked-radio"
                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Other</label>
                                </div>
                            @break

                            @case('female')
                                <div class="flex items-center mr-4">
                                    <input id="inline-2-radio" type="radio" value="male" name="gender"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="inline-radio"
                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Male</label>
                                </div>
                                <div class="flex items-center mr-4">
                                    <input checked id="inline-checked-radio" type="radio" value="female" name="gender"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="inline-2-radio"
                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Female</label>
                                </div>
                                <div class="flex items-center mr-4">
                                    <input id="inline-2-radio" type="radio" value="other" name="gender"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="inline-checked-radio"
                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Other</label>
                                </div>
                            @break

                            @case('other')
                                <div class="flex items-center mr-4">
                                    <input id="inline-2-radio" type="radio" value="male" name="gender"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="inline-radio"
                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Male</label>
                                </div>
                                <div class="flex items-center mr-4">
                                    <input id="inline-2-radio" type="radio" value="female" name="gender"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="inline-2-radio"
                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Female</label>
                                </div>
                                <div class="flex items-center mr-4">
                                    <input checked id="inline-checked-radio" type="radio" value="other" name="gender"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="inline-checked-radio"
                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Other</label>
                                </div>
                            @break

                            @default
                        @endswitch


                    </div>





                    <div class="flex items-center justify-between">
                        <button type="cancel"
                            class="px-4 mt-6 py-2 text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                            <a href="{{ route('admin#showStudents') }}">
                                Cancel
                            </a>
                        </button>
                        <button type="submit"
                            class="px-4 mt-6 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue">
                            Submit
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </main>
@endsection
