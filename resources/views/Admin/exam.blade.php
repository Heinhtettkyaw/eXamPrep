@extends('Admin.layouts.master')
@section('activeExam')
<span class="absolute inset-y-0 left-0 w-1 bg-blue-600 rounded-tr-lg rounded-br-lg"
aria-hidden="true"></span>

@endsection
@section('content')
<main class="h-full pb-16 overflow-y-auto">
    <div class="container px-6 mx-auto grid">
      <div class="flex items-center justify-between">
        <h2 class="my-6 text-xl font-semibold text-gray-700 dark:text-gray-200">
          Exam Management
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
              <span class="ml-1 font-semibold text-gray-700 md:ml-2 dark:text-gray-400">Exam</span>
            </div>
          </li>
        </ol>
      </div>
      <!-- CTA -->
      <!-- <a
        class="flex items-end justify-end p-4 mb-8 text-sm font-semibold text-blue-100 bg-blue-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-blue"> -->
      <div class="flex item-end justify-end">
        <a href="add_exam.html">
          <button
          class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue">
            Add Exam
            <span class="ml-2" aria-hidden="true">+</span>
          </button>
      </a>
      </div>
      <!-- </a> -->
      <!-- Upcoming Exams -->
      <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
        Exams
      </h4>
      <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
          <table class="w-full whitespace-no-wrap">
            <thead>
              <tr
                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                <th class="px-4 py-3">Exam Name</th>
                <th class="px-4 py-3">Status</th>
                <th class="px-4 py-3">Date & Time</th>
                <th class="px-4 py-3">Add</th>
                <th class="px-4 py-3">Actions</th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
              <tr class="text-gray-700 dark:text-gray-400">
                <td class="px-4 py-3">
                  <div class="flex items-center text-sm">
                    <!-- Avatar with inset shadow -->
                    <div>
                      <p class="font-semibold">Hardware</p>
                    </div>
                  </div>
                </td>
                <td class="px-4 py-3 text-xs">
                  <span
                    class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-gray-700 dark:text-green-400">
                    Approved
                  </span>
                </td>
                <td class="px-4 py-3 text-sm">
                  <div>
                    <p class="font-semibold">6/23/2023</p>
                    <p class="text-sm text-gray-600 dark:text-gray-400">
                      10:00 AM
                    </p>
                  </div>
                </td>
                <td class="px-4 py-3 text-sm">
                  <div class="flex items-center text-sm">
                    <a href="add_question.html">
                      <button
                      class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue">
                      Add Questions
                      </button>
                    </a>
                  </div>
                </td>
                <td class="px-4 py-3">
                  <div class="flex items-center space-x-4 text-sm">
                    <button
                      class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-blue-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                      aria-label="Edit">
                      <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path
                          d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                        </path>
                      </svg>
                    </button>
                    <button
                      class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-blue-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                      aria-label="Delete">
                      <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
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
                      <p class="font-semibold">Software</p>
                    </div>
                  </div>
                </td>
                <td class="px-4 py-3 text-xs">
                  <span
                    class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full dark:text-blue-300 dark:bg-gray-700">
                    Pending
                  </span>
                </td>
                <td class="px-4 py-3 text-sm">
                  <div>
                    <p class="font-semibold">6/24/2023</p>
                    <p class="text-sm text-gray-600 dark:text-gray-400">
                      10:00 AM
                    </p>
                  </div>
                </td>
                <td class="px-4 py-3 text-sm">
                  <div class="flex items-center text-sm">
                    <a href="add_question.html">
                      <button
                      class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue">
                      Add Questions
                      </button>
                    </a>
                  </div>
                </td>
                <td class="px-4 py-3">
                  <div class="flex items-center space-x-4 text-sm">
                    <button
                      class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-blue-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                      aria-label="Edit">
                      <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path
                          d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                        </path>
                      </svg>
                    </button>
                    <button
                      class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-blue-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                      aria-label="Delete">
                      <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
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
                      <p class="font-semibold">Network</p>
                    </div>
                  </div>
                </td>
                <td class="px-4 py-3 text-xs">
                  <span
                    class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-400 dark:bg-gray-700">
                    Denied
                  </span>
                </td>
                <td class="px-4 py-3 text-sm">
                  <div>
                    <p class="font-semibold">6/24/2023</p>
                    <p class="text-sm text-gray-600 dark:text-gray-400">
                      10:00 AM
                    </p>
                  </div>
                </td>
                <td class="px-4 py-3 text-sm">
                  <div class="flex items-center text-sm">
                    <a href="add_question.html">
                      <button
                      class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue">
                      Add Questions
                      </button>
                    </a>
                  </div>
                </td>
                <td class="px-4 py-3">
                  <div class="flex items-center space-x-4 text-sm">
                    <button
                      class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-blue-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                      aria-label="Edit">
                      <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path
                          d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                        </path>
                      </svg>
                    </button>
                    <button
                      class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-blue-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                      aria-label="Delete">
                      <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
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
                      <p class="font-semibold">Information System Strategy</p>
                    </div>
                  </div>
                </td>
                <td class="px-4 py-3 text-xs">
                  <span
                    class="px-2 py-1 font-semibold leading-tight text-gray-700 bg-gray-100 rounded-full dark:text-gray-100 dark:bg-gray-700">
                    Expired
                  </span>
                </td>
                <td class="px-4 py-3 text-sm">
                  <div>
                    <p class="font-semibold">6/24/2023</p>
                    <p class="text-sm text-gray-600 dark:text-gray-400">
                      10:00 AM
                    </p>
                  </div>
                </td>
                <td class="px-4 py-3 text-sm">
                  <div class="flex items-center text-sm">
                    <a href="add_question.html">
                      <button
                      class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue">
                      Add Questions
                      </button>
                    </a>
                  </div>
                </td>
                <td class="px-4 py-3">
                  <div class="flex items-center space-x-4 text-sm">
                    <button
                      class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-blue-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                      aria-label="Edit">
                      <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path
                          d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                        </path>
                      </svg>
                    </button>
                    <button
                      class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-blue-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                      aria-label="Delete">
                      <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                          d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                          clip-rule="evenodd"></path>
                      </svg>
                    </button>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
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
