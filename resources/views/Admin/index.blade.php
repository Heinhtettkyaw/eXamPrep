@extends('Admin.layouts.master')
@section('activeIndex')
<span class="absolute inset-y-0 left-0 w-1 bg-blue-600 rounded-tr-lg rounded-br-lg"
aria-hidden="true"></span>

@endsection
@section('content')

<main class="h-full overflow-y-auto">
    <div class="container px-6 mx-auto grid">
      <div class="flex items-center justify-between">
        <h2 class="my-6 text-xl font-semibold text-gray-700 dark:text-gray-200">
          Dashboard
        </h2>
        <ol class="inline-flex items-center space-x-1 md:space-x-3 text-xs">
          <li class="inline-flex items-center">
            <a href="#" class="inline-flex items-center font-semibold text-gray-700 dark:text-gray-400">
              <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
              Dashboard
            </a>
          </li>
          <li aria-current="page">
            <div class="flex items-center">
              <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
              <span class="ml-1 font-semibold text-gray-700 md:ml-2 dark:text-gray-400">App Data</span>
            </div>
          </li>
        </ol>
      </div>
      <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-2">
        <!-- Card 1 -->
        <div class="flex items-center justify-between p-4 bg-gray-200 rounded-lg shadow-xs dark:bg-gray-800">
          <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-gray-700">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
              <path
                d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
              </path>
            </svg>
          </div>
          <div class="relative w-full max-w-xl mr-8">
            <p class="mb-2 text-xl font-bold text-gray-700 dark:text-gray-400">
              Total Students
            </p>
            <p class="text-lg font-semibold text-gray-600 dark:text-gray-200">
              6389
            </p>
          </div>
          <div>
            <a href="students.html"
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
        <!-- Card 2 -->
        <div class="flex items-center justify-between p-4 bg-gray-200 rounded-lg shadow-xs dark:bg-gray-800">
          <div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-500 dark:bg-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
              stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M10 21h7a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v11m0 5l4.879-4.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242z" />
            </svg>

          </div>
          <div class="relative w-full max-w-xl mr-8">
            <p class="mb-2 text-xl font-bold text-gray-700 dark:text-gray-400">
              Results
            </p>
          </div>
          <div>
            <a href="results.html"
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
        <!-- Card 3 -->
        <div class="flex items-center justify-between p-4 bg-gray-200 rounded-lg shadow-xs dark:bg-gray-800">
          <div
            class="p-3 mr-4 text-gray-600 bg-gray-100 rounded-full rounded-full dark:text-gray-200 dark:bg-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
              stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
            </svg>
          </div>
          <div class="relative w-full max-w-xl mr-8">
            <p class="mb-2 text-xl font-bold text-gray-700 dark:text-gray-400">
              Exam
            </p>
            <p class="text-lg font-semibold text-gray-600 dark:text-gray-200">
              14
            </p>
          </div>
          <div>
            <a href="exam.html"
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
        <!-- Card 4 -->
        <div class="flex items-center justify-between p-4 bg-gray-200 rounded-lg shadow-xs dark:bg-gray-800">
          <div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-500 dark:bg-gray-700">
            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" stroke-linecap="round"
              stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
              <path d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
              <path d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
            </svg>
          </div>
          <div class="relative w-full max-w-xl mr-8">
            <p class="mb-2 text-xl font-bold text-gray-700 dark:text-gray-400">
              Exam Result Summary
            </p>
            <p class="text-lg font-semibold text-gray-600 dark:text-gray-200">
              Graph and Charts
            </p>
          </div>
          <div>
            <a href="ExamResultSummary.html"
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

      <div
        class="max-w-xl p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
          <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">
            Need a help?
          </h5>
        </a>
        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Go to this step by step guideline:</p>
        <a href="#" class=" inline-flex items-center text-blue-600 hover:underline dark:text-gray-300">
          See our guideline
          <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z">
            </path>
            <path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"></path>
          </svg>
        </a>
      </div>
    </div>
  </main>


@endsection
