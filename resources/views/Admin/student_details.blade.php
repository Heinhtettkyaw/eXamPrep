@extends('Admin.layouts.master')
@section('activeStudent')
    <span class="absolute inset-y-0 left-0 w-1 bg-blue-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
@endsection
@section('content')
    <main class="h-full pb-16 overflow-y-auto">
        <div class="container grid px-6 mx-auto">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <a href="{{ route('admin#dashboard') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5 mr-2 text-gray-500 hover:text-gray-700">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                        </svg>
                    </a>
                    <h2 class="text-lg my-6 font-semibold text-gray-700 dark:text-gray-200">
                        Students
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

                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-1 font-semibold text-gray-700 md:ml-2 dark:text-gray-400">Students</span>
                        </div>
                    </li>
                </ol>
            </div>
            <div>
                <div class="flex items-center justify-between mb-4">
                    <div class="relative z-0 mb-2">

                        <form action="{{ route('admin#showStudents') }}" method="get">

                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">

                                </div>
                                <input type="search" id="floating_standard" name="searchKey"
                                    class="block py-2.5 px-0 w-64 text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    value="{{ request('searchKey') }}" />
                                <label for="floating_standard"
                                    class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                    <div class="flex items-center">

                                        <span class="pl-2">Search</span>
                                    </div>
                                </label>
                                <button type="submit"
                                    class="text-white absolute right-0 bottom-0  p-2.5 text-sm font-medium text-white bg-blue-700 rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                    </svg>
                                </button>
                            </div>
                        </form>

                    </div>
                    <!-- <button id="dropdownActionButton" data-dropdown-toggle="dropdownAction" class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" type="button">
                                                                                                                                                                                                                                                                            <span class="sr-only">Action button</span>
                                                                                                                                                                                                                                                                            Action
                                                                                                                                                                                                                                                                            <svg class="w-3 h-3 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                                                                                                                                                                                                                                                          </button>
                                                                                                                                                                                                                                                                          <div>
                                                                                                                                                                                                                                                                            Dropdown menu
                                                                                                                                                                                                                                                                            <div id="dropdownAction" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                                                                                                                                                                                                                                                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownActionButton">
                                                                                                                                                                                                                                                                                    <li>
                                                                                                                                                                                                                                                                                      <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Activate account</a>
                                                                                                                                                                                                                                                                                    </li>
                                                                                                                                                                                                                                                                                  </ul>
                                                                                                                                                                                                                                                                                <div class="py-1">
                                                                                                                                                                                                                                                                                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete User</a>
                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                          </div> -->
                    <a href="{{ route('admin#addStudent') }}" class="mx-4">
                        <button
                            class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue">
                            Add Student
                            <span class="ml-2" aria-hidden="true">+</span>
                        </button>
                    </a>
                </div>
                <div class="w-full overflow-hidden rounded-lg shadow-xs">
                    <div class="w-full overflow-x-auto">

                        <table class="w-full whitespace-no-wrap">
                            <thead>
                                <tr
                                    class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                    <th class="px-4 py-3">Student Name</th>
                                    <th class="px-4 py-3">Emails</th>
                                    <th class="px-4 py-3">Phone No.</th>
                                    <th class="px-4 py-3">Status</th>
                                    <th class="px-4 py-3">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                                @foreach ($students as $student)
                                    <tr class="text-gray-700 dark:text-gray-400">
                                        <td class="px-4 py-3">
                                            <div class="flex items-center text-sm">
                                                <div>
                                                    <p class="font-semibold"> {{ $student['name'] }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-3">
                                            <div class="flex items-center text-sm">
                                                <div>
                                                    <p class="font-semibold">{{ $student['email'] }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-3">
                                            <div class="flex items-center text-sm">
                                                <div>
                                                    <p class="font-semibold"> {{ $student['phone'] }} </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="flex items-center text-sm">

                                                @if ($student['account_status'] == 'active')
                                                    <div class="h-2.5 w-2.5 rounded-full bg-green-500 mr-2"></div> active
                                                @else
                                                    <span
                                                        class="px-2 py-1 font-normal leading-tight text-gray-700 bg-gray-100 rounded-full dark:text-gray-300 dark:bg-gray-700">
                                                        Expired
                                                    </span>
                                                @endif
                                            </div>
                                        </td>
                                        <td class="px-4 py-3">
                                            <div class="flex items-center space-x-4 text-sm">
                                                <button
                                                    class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-blue-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                                    aria-label="Edit">
                                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                        viewBox="0 0 20 20">
                                                        <path
                                                            d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                        </path>
                                                    </svg>
                                                </button>
                                                <button
                                                    class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-blue-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                                    aria-label="Delete">
                                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                        viewBox="0 0 20 20">
                                                        <path fill-rule="evenodd"
                                                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach


                                {{-- <tr class="text-gray-700 dark:text-gray-400">
                                    <td class="px-4 py-3">
                                        <div class="flex items-center text-sm">
                                            <div>
                                                <p class="font-semibold">Aung Aung</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-3">
                                        <div class="flex items-center text-sm">
                                            <div>
                                                <p class="font-semibold">aungaung@gmail.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-3">
                                        <div class="flex items-center text-sm">
                                            <div>
                                                <p class="font-semibold">09883848</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center text-sm">
                                            <div class="h-2.5 w-2.5 rounded-full bg-red-500 mr-2"></div> Offline
                                        </div>
                                    </td>
                                    <td class="px-4 py-3">
                                        <div class="flex items-center space-x-4 text-sm">
                                            <button
                                                class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-blue-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                                aria-label="Edit">
                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                    </path>
                                                </svg>
                                            </button>
                                            <button
                                                class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-blue-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                                aria-label="Delete">
                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="text-gray-700 dark:text-gray-400">
                                    <td class="px-4 py-3">
                                        <div class="flex items-center text-sm">
                                            <div>
                                                <p class="font-semibold">Kyaw Kyaw</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-3">
                                        <div class="flex items-center text-sm">
                                            <div>
                                                <p class="font-semibold">Kyaw Kyaw@gmail.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-3">
                                        <div class="flex items-center text-sm">
                                            <div>
                                                <p class="font-semibold">093748273</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        <span
                                            class="px-2 py-1 font-normal leading-tight text-gray-700 bg-gray-100 rounded-full dark:text-gray-300 dark:bg-gray-700">
                                            Expired
                                        </span>
                                    </td>
                                    <td class="px-4 py-3">
                                        <div class="flex items-center space-x-4 text-sm">
                                            <button
                                                class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-blue-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                                aria-label="Edit">
                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                    </path>
                                                </svg>
                                            </button>
                                            <button
                                                class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-blue-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                                aria-label="Delete">
                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                </tr> --}}
                            </tbody>
                        </table>


                    </div>

                    {{ $students->links() }}
                    <!-- <div
                                                                                                                                                                                                                                                                            class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                                                                                                                                                                                                                                                                            <span class="flex items-center col-span-3">
                                                                                                                                                                                                                                                                              Showing 21-30 of 100
                                                                                                                                                                                                                                                                            </span>
                                                                                                                                                                                                                                                                            <span class="col-span-2"></span> -->
                    <!-- Pagination
                                                                                                                                                       <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">

                                                                                                                                                                                                                                                                              <nav aria-label="Table navigation">
                                                                                                                                                                                                                                                                                <ul class="inline-flex items-center">
                                                                                                                                                                                                                                                                                  <li>
                                                                                                                                                                                                                                                                                    <button class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-blue"
                                                                                                                                                                                                                                                                                      aria-label="Previous">
                                                                                                                                                                                                                                                                                      <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                                                                                                                                                                                                                                                                                        <path
                                                                                                                                                                                                                                                                                          d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                                                                                                                                                                                                                                                                          clip-rule="evenodd" fill-rule="evenodd"></path>
                                                                                                                                                                                                                                                                                      </svg>
                                                                                                                                                                                                                                                                                    </button>
                                                                                                                                                                                                                                                                                  </li>
                                                                                                                                                                                                                                                                                  <li>
                                                                                                                                                                                                                                                                                    <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-blue">
                                                                                                                                                                                                                                                                                      1
                                                                                                                                                                                                                                                                                    </button>
                                                                                                                                                                                                                                                                                  </li>
                                                                                                                                                                                                                                                                                  <li>
                                                                                                                                                                                                                                                                                    <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-blue">
                                                                                                                                                                                                                                                                                      2
                                                                                                                                                                                                                                                                                    </button>
                                                                                                                                                                                                                                                                                  </li>
                                                                                                                                                                                                                                                                                  <li>
                                                                                                                                                                                                                                                                                    <button
                                                                                                                                                                                                                                                                                      class="px-3 py-1 text-white transition-colors duration-150 bg-blue-600 border border-r-0 border-blue-600 rounded-md focus:outline-none focus:shadow-outline-blue">
                                                                                                                                                                                                                                                                                      3
                                                                                                                                                                                                                                                                                    </button>
                                                                                                                                                                                                                                                                                  </li>
                                                                                                                                                                                                                                                                                  <li>
                                                                                                                                                                                                                                                                                    <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-blue">
                                                                                                                                                                                                                                                                                      4
                                                                                                                                                                                                                                                                                    </button>
                                                                                                                                                                                                                                                                                  </li>
                                                                                                                                                                                                                                                                                  <li>
                                                                                                                                                                                                                                                                                    <span class="px-3 py-1">...</span>
                                                                                                                                                                                                                                                                                  </li>
                                                                                                                                                                                                                                                                                  <li>
                                                                                                                                                                                                                                                                                    <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-blue">
                                                                                                                                                                                                                                                                                      8
                                                                                                                                                                                                                                                                                    </button>
                                                                                                                                                                                                                                                                                  </li>
                                                                                                                                                                                                                                                                                  <li>
                                                                                                                                                                                                                                                                                    <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-blue">
                                                                                                                                                                                                                                                                                      9
                                                                                                                                                                                                                                                                                    </button>
                                                                                                                                                                                                                                                                                  </li>
                                                                                                                                                                                                                                                                                  <li>
                                                                                                                                                                                                                                                                                    <button class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-blue"
                                                                                                                                                                                                                                                                                      aria-label="Next">
                                                                                                                                                                                                                                                                                      <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                                                                                                                                                                                                                                                                                        <path
                                                                                                                                                                                                                                                                                          d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                                                                                                                                                                                                                                                          clip-rule="evenodd" fill-rule="evenodd"></path>
                                                                                                                                                                                                                                                                                      </svg>
                                                                                                                                                                                                                                                                                    </button>
                                                                                                                                                                                                                                                                                  </li>
                                                                                                                                                                                                                                                                                </ul>
                                                                                                                                                                                                                                                                              </nav>
                                                                                                                                                                                                                                                                            </span>
                                                                                                                                                                                                                                                                          </div> -->
                </div>
            </div>
    </main>
@endsection
