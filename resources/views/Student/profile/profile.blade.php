@extends('Student.layouts.layout')
@section('content')
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
    <main>
        <div class="h-screen flex flex-col">
            <div class="m-3 flex items-center justify-between dark:bg-DMgray-bg">
                <div class="pl-3">
                    <h1 class="text-2xl text-wbc-100 font-bold dark:text-DMgray-primary_text">
                        Profile
                    </h1>
                </div>
                <div>
                    <a href="{{ route('student#showEdit') }}">
                        <button
                            class="flex items-center justify-around text-white bg-wbc-100 shadow-md rounded-full py-2 px-4 hover:bg-wbc-50">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                            </svg>

                            <div class="text-sm">Edit</div>
                        </button>

                    </a>

                </div>
            </div>

            <div class="bg-blue-100 flex-1 flex flex-col dark:bg-DMgray-bg">
                <!-- <div class="h-20 w-full"></div> -->
                <div class="h-full w-full">
                    <!-- <div class="hidden md:block col-span-1"></div> -->
                    <div class="rounded-lg shadow bg-white m-6 dark:bg-DMgray-card">
                        <!--Profile Picture-->
                        <div class="h-16 relative">
                            @if (Auth::user()->image == null)
                                <div
                                    class="bg-gray-100 w-28 h-28 rounded-full absolute m-auto left-0 right-0 bottom-6 shadow-lg">
                                    <img class="w-28 h-28 object-cover rounded-full shadow-lg" src="img/Takagi_S1.jpg"
                                        alt="" />
                                </div>
                            @else
                                <div
                                    class="bg-gray-100 w-28 h-28 rounded-full absolute m-auto left-0 right-0 bottom-6 shadow-lg">
                                    <img class="w-28 h-28 object-cover rounded-full shadow-lg"
                                        src="{{ asset('storage/' . Auth::user()->image) }}" alt="" />
                                </div>
                            @endif

                        </div>
                        <div class="bg-white flex md:flex dark:bg-DMgray-card">
                            <table class="table-fixed mx-5 mb-5 grow text-sm dark:text-DMgray-secondary_text">
                                <tbody>
                                    <tr class="bg-white border-b dark:bg-DMgray-hover dark:border-gray-700">
                                        <th scope="row" class="w-1/2 pl-5 py-3 md:pl-28 font-medium">
                                            Name
                                        </th>
                                        <td class="w-1/2 pl-20 py-3 md:pl-28">{{ Auth::user()->name }}</td>
                                    </tr>
                                    <tr class="border-b bg-blue-50 dark:bg-DMgray-card dark:border-gray-700">
                                        <th scope="row" class="w-1/2 pl-5 py-3 font-medium">
                                            Student ID
                                        </th>
                                        <td class="w-1/2 pl-20 py-3 md:pl-28">FE{{ Auth::user()->id }}</td>
                                    </tr>
                                    <tr class="border-b bg-white dark:bg-DMgray-hover dark:border-gray-700">
                                        <th scope="row" class="w-1/2 pl-5 py-3 font-medium">
                                            Date Of Birth
                                        </th>
                                        <td class="w-1/2 pl-20 py-3 md:pl-28">
                                            @if (Auth::user()->dob == null)
                                                -
                                            @else
                                                {{ Auth::user()->dob }}
                                            @endif
                                        </td>
                                    </tr>
                                    <tr class="border-b bg-blue-50 dark:bg-DMgray-card dark:border-gray-700">
                                        <th scope="row" class="w-1/2 pl-5 py-3 font-medium">
                                            Address
                                        </th>
                                        <td class="w-1/2 pl-20 py-3 md:pl-28">{{ Auth::user()->address }}</td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-DMgray-hover dark:border-gray-700">
                                        <th scope="row" class="w-1/2 pl-5 py-3 font-medium">
                                            Email
                                        </th>
                                        <td class="w-1/2 pl-20 py-3 md:pl-28">
                                            {{ Auth::user()->email }}
                                        </td>
                                    </tr>
                                    <tr class="border-b bg-blue-50 dark:bg-DMgray-card dark:border-gray-700">
                                        <th scope="row" class="w-1/2 pl-5 py-3 font-medium">
                                            Phone No
                                        </th>
                                        <td class="w-1/2 pl-20 py-3 md:pl-28">
                                            {{ Auth::user()->phone }}
                                        </td>
                                    </tr>

                                    <tr class="bg-white border-b-0 dark:bg-DMgray-hover dark:border-gray-700">
                                        <th scope="row" class="w-1/2 pl-5 py-3 md:pl-28 font-medium">
                                            Gender
                                        </th>
                                        <td class="w-1/2 pl-20 py-3 md:pl-28">{{ Auth::user()->gender }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- <div class="hidden md:block col-span-1"></div> -->
                </div>
            </div>
        </div>
    </main>
@endsection
