@extends('Admin.layouts.master')
@section('activeResult')
<span class="absolute inset-y-0 left-0 w-1 bg-blue-600 rounded-tr-lg rounded-br-lg"
aria-hidden="true"></span>

@endsection
@section('content')
<main class="h-full pb-16 overflow-y-auto">
    <div class="container grid px-6 mx-auto">
      <div class="flex items-center justify-between">
        <h2 class="my-6 text-xl font-semibold text-gray-700 dark:text-gray-200">
          Exam Results
        </h2>
        <ol class="inline-flex items-center space-x-1 md:space-x-3 text-xs">
          <li class="inline-flex items-center">
            <a href="index.html" class="inline-flex items-center font-semibold text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:text-gray-400 dark:hover:text-white">
              <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
              Dashboard
            </a>
          </li>
          <li aria-current="page">
            <div class="flex items-center">
              <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
              <span class="ml-1 font-semibold text-gray-700 md:ml-2 dark:text-gray-400">Exam Results</span>
            </div>
          </li>
        </ol>
      </div>
      <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-2">
        <!-- Exam Cards -->
        <div class="flex items-center justify-between p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
          <div
            class="p-3 mr-4 text-gray-600 bg-gray-100 rounded-full rounded-full dark:text-gray-200 dark:bg-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
              stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
            </svg>
          </div>
          <div class="relative w-full max-w-xl mr-8">
            <p class="mb-2 text-lg font-semibold text-gray-700 dark:text-gray-300">
              Software
            </p>
            <p class="text-sm font-normal text-gray-600 dark:text-gray-400">
              23/6/2023
            </p>
            <p class="text-sm font-normal text-gray-600 dark:text-gray-400">
              10:00 AM
            </p>
          </div>
          <div>
            <a href="result_details.html"
              class="inline-flex items-end px-4 py-2 text-xs font-normal rounded-full leading-5 text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue">
              Details
              <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                  clip-rule="evenodd"></path>
              </svg>
            </a>
          </div>
        </div>
        <!-- card  -->
        <div class="flex items-center justify-between p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
          <div
            class="p-3 mr-4 text-gray-600 bg-gray-100 rounded-full rounded-full dark:text-gray-200 dark:bg-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
              stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
            </svg>
          </div>
          <div class="relative w-full max-w-xl mr-8">
            <p class="mb-2 text-lg font-semibold text-gray-700 dark:text-gray-300">
              Hardware
            </p>
            <p class="text-sm font-normal text-gray-600 dark:text-gray-400">
              23/6/2023
            </p>
            <p class="text-sm font-normal text-gray-600 dark:text-gray-400">
              10:00 AM
            </p>
          </div>
          <div>
            <a href="result_details.html"
              class="inline-flex items-end px-4 py-2 text-xs font-normal rounded-full leading-5 text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue">
              Details
              <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                  clip-rule="evenodd"></path>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </main>

@endsection
