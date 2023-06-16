@extends('Admin.layouts.master')
@section('content')
    {{-- Password Fail Alert --}}
    @if (session('updateSuccess'))
        <div id="alert-border-3"
            class="flex p-4 mb-4 text-green-800 border-t-4 border-green-300 bg-green-50 dark:text-green-400 dark:bg-gray-800 dark:border-green-800"
            role="alert">
            <svg class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                    clip-rule="evenodd"></path>
            </svg>
            <div class="ml-3 text-sm font-medium">
                {{ session('updateSuccess') }}
            </div>
            <button type="button"
                class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
                data-dismiss-target="#alert-border-3" aria-label="Close">
                <span class="sr-only">Dismiss</span>
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    @endif
    <main class="h-full overflow-y-auto">
        <div class="container px-6 mx-auto grid">
            <div class="flex items-center justify-between">
                <h2 class="text-lg my-6 font-semibold text-gray-700 dark:text-gray-200">
                    Profile
                </h2>
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
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-1 font-semibold text-gray-700 md:ml-2 dark:text-gray-400">Profile</span>
                        </div>
                    </li>
                </ol>
            </div>
            <div class="flex justify-center mb-8">
                <!-- profile Card -->
                <div
                    class="w-full max-w-xl bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex justify-end px-4 pt-4">
                        {{-- <button id="dropdownButton" data-dropdown-toggle="dropdown"
                            class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5"
                            type="button">
                            <span class="sr-only">Open dropdown</span>
                            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                </path>
                            </svg>
                        </button> --}}
                        <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                            class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5"
                            type="button"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                            </svg>
                        </button>

                    </div>
                    <div class="flex flex-col items-center">
                        <div class="relative w-14 h-14 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                            {{-- <svg class="absolute w-14 h-14 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                    clip-rule="evenodd"></path>
                            </svg> --}}
                            @if (Auth::user()->image == null)
                                <img src="{{ asset('image/default_profile.jpg') }}" alt="">
                            @else
                                <img src="{{ asset('storage/' . Auth::user()->image) }}" alt="">
                            @endif

                        </div>
                        <h5 class="my-4 text-xl font-medium text-gray-900 dark:text-white"> {{ Auth::user()->name }}</h5>


                        {{-- Start Of table --}}
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

                            <table class="w-full  text-sm text-gray-500 dark:text-gray-400 mt-2 ">

                                <tbody>
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-left uppercase text-gray-900 whitespace-nowrap dark:text-white">
                                            Full Name
                                        </th>
                                        <td class="px-6 py-4 text-gray-700 dark:text-gray-300 text-center">
                                            {{ Auth::user()->name }}
                                        </td>
                                    </tr>
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-left uppercase text-gray-900 whitespace-nowrap dark:text-white">
                                            ID
                                        </th>
                                        <td class="px-6 py-4 text-gray-700 dark:text-gray-300 text-center">
                                            Tr{{ Auth::user()->id }}
                                        </td>
                                    </tr>
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-left uppercase text-gray-900 whitespace-nowrap dark:text-white">
                                            Role
                                        </th>
                                        <td class="px-6 py-4 text-gray-700 dark:text-gray-300 text-center">
                                            {{ Auth::user()->role }}
                                        </td>
                                    </tr>
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-left uppercase text-gray-900 whitespace-nowrap dark:text-white">
                                            Email
                                        </th>
                                        <td class="px-6 py-4 text-gray-700 dark:text-gray-300 text-center">
                                            {{ Auth::user()->email }}
                                        </td>
                                    </tr>
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-left uppercase text-gray-900 whitespace-nowrap dark:text-white">
                                            Mobile Number
                                        </th>
                                        <td class="px-6 py-4 text-gray-700 dark:text-gray-300 text-center">
                                            {{-- +959423859203 --}}
                                            {{ Auth::user()->phone }}
                                        </td>
                                    </tr>
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-left uppercase text-gray-900 whitespace-nowrap dark:text-white">
                                            Address
                                        </th>
                                        <td class="px-6 py-4 text-gray-700 dark:text-gray-300 text-center">
                                            {{-- +959423859203 --}}
                                            {{ Auth::user()->address }}
                                        </td>
                                    </tr>
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-left uppercase text-gray-900 whitespace-nowrap dark:text-white">
                                            Date Of Birth
                                        </th>
                                        <td class="px-6 py-4 text-gray-700 dark:text-gray-300 text-center">
                                            {{-- +959423859203 --}}
                                            @if (Auth::user()->dob == null)
                                                -
                                            @else
                                                {{ Auth::user()->dob }}
                                            @endif
                                        </td>
                                    </tr>
                                    {{-- <tr
                                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            <th scope="row"
                                                class="px-6 py-4 font-medium text-left uppercase text-gray-900 whitespace-nowrap dark:text-white">
                                                Batchs
                                            </th>
                                            <td class="px-6 py-4 text-gray-700 dark:text-gray-300 text-center">
                                                B1 , B2
                                            </td>
                                        </tr> --}}
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-left uppercase text-gray-900 whitespace-nowrap dark:text-white">
                                            Lectures
                                        </th>
                                        <td class="px-6 py-4 text-gray-700 dark:text-gray-300 text-center">
                                            Database, Software, Business Strategy
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="my-5">

                        </div>
                        {{-- End of table --}}
                        {{-- <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                                class="w-full my-5  text-white bg-blue-600 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 ">Edit
                                Profile</button> --}}
                    </div>



                    <!-- Main modal -->
                    <div id="authentication-modal" tabindex="-1" aria-hidden="true"
                        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative w-full max-w-xl max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <button type="button"
                                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                    data-modal-hide="authentication-modal">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                                <div class="px-6 py-6 lg:px-8">
                                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Update Your
                                        Profile Data</h3>
                                    <form class="space-y-3" action="{{ route('admin#updateProfile', Auth::user()->id) }}"
                                        method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col">
                                                @if (Auth::user()->image == null)
                                                    <div
                                                        class="relative w-14 h-14 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">

                                                        <img src="{{ asset('image/default_profile.jpg') }}"
                                                            alt="">
                                                    </div>
                                                @else
                                                    <div
                                                        class="relative w-14 h-14 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                                                        <img src="{{ asset('storage/' . Auth::user()->image) }}"
                                                            alt="">
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="mt-4">
                                                <input type="file" name="image" class="form-control">
                                            </div>
                                        </div>

                                        <div>
                                            <label class="block text-sm">
                                                <span class="text-gray-700 dark:text-gray-400">Name</span>
                                            </label>
                                            <input
                                                class="block w-full mt-1 @error('name')
                                placeholder-red-700 border border-red-500 rounded outline-none focus:ring-red-500
                            @enderror text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-blue-400 focus:outline-none focus:shadow-outline-blue dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                name="name" value="{{ old('name', Auth::user()->name) }}"
                                                placeholder="Name" />
                                            @error('name')
                                                <span class="inline-flex text-sm text-red-700">{{ $message }} </span>
                                            @enderror
                                        </div>

                                        <div>
                                            <label for="dob"
                                                class="block text-sm text-gray-700 dark:text-gray-400">Date Of
                                                Birth</label>
                                            <input type="date" name="dob"
                                                value="{{ old('dob', Auth::user()->dob) }}"
                                                class="shadow-sm bg-gray-50 @error('dob')
                                placeholder-red-700 border border-red-500 rounded outline-none focus:ring-red-500
                            @enderror border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light">
                                            @error('dob')
                                                <span class="inline-flex text-sm text-red-700">{{ $message }} </span>
                                            @enderror
                                        </div>


                                        <div>
                                            <label for="id"
                                                class="block text-sm text-gray-700 dark:text-gray-400">ID</label>
                                            <input type="text" id="disabled-input" aria-label="disabled input"
                                                class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                value="{{ old('id', Auth::user()->id) }}" readonly>
                                        </div>
                                        <div>
                                            <input type="hidden" name="email" aria-label="disabled input"
                                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                                value="{{ old('email', Auth::user()->email) }}">
                                        </div>
                                        <div>
                                            <label for="Phone"
                                                class="block text-sm text-gray-700 dark:text-gray-400">Phone</label>
                                            <input type="tel" name="phone"
                                                value="{{ old('phone', Auth::user()->phone) }}"
                                                class="shadow-sm bg-gray-50 @error('phone')
                                placeholder-red-700 border border-red-500 rounded outline-none focus:ring-red-500
                            @enderror border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light">
                                            @error('phone')
                                                <span class="inline-flex text-sm text-red-700">{{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div>
                                            <label for="Address"
                                                class="block text-sm text-gray-700 dark:text-gray-400">Address</label>
                                            <input type="text" name="address"
                                                value="  {{ old('address', Auth::user()->address) }}"
                                                class="@error('address')
                                placeholder-red-700 border border-red-500 rounded outline-none focus:ring-red-500
                            @enderror shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light">
                                            @error('address')
                                                <span class="inline-flex text-sm text-red-700">{{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="my-6">
                                            <button type="submit"
                                                class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- End of Modal --}}
                </div>

            </div>
        </div>
        </div>
        </div>
    </main>
@endsection
