@extends('Admin.layouts.master')
@section('content')
<main class="h-full pb-16 overflow-y-auto">
    <div class="container px-6 mx-auto grid">
        <div class="pl-2">
          <div class="flex items-center justify-between">
            <h2 class="text-lg my-6 font-semibold text-gray-700 dark:text-gray-200">
              Add New Exam
            </h2>
            <ol class="inline-flex items-center space-x-1 md:space-x-3 text-xs">
              <li class="inline-flex items-center">
                <a href="index.html" class="inline-flex items-center font-semibold text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:text-gray-400 dark:hover:text-white">
                  <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                  Dashboard
                </a>
              </li>
              <li>
                <div class="flex items-center">
                  <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                  <a href="exam.html" class="ml-1 font-semibold text-gray-500 hover:text-gray-700 md:ml-2 dark:text-gray-400 dark:hover:text-white">Exam</a>
                </div>
              </li>
              <li aria-current="page">
                <div class="flex items-center">
                  <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                  <span class="ml-1 font-semibold text-gray-700 md:ml-2 dark:text-gray-400">Add Exam</span>
                </div>
              </li>
            </ol>
          </div>
            <form>
                <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                  <label for="chapters" class="block mb-2 text-sm font-medium text-gray-700 dark:text-white">Select the Chapter</label>
                  <select id="chapters" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                      <option selected>Choose a Chapter</option>
                    <option>Hardware</option>
                    <option>Information Processing System</option>
                    <option>Software</option>
                    <option>Database</option>
                    <option>Network</option>
                    <option>Security</option>
                    <option>Data Structure and Algurithm</option>
                    <option>Corporate and Legal Affair</option>
                    <option>Business Strategy</option>
                    <option>information System Strategy</option>
                    <option>Development Technology</option>
                    <option>Project Management</option>
                    <option>Service Management</option>
                    <option>System Audit and Internal Control</option>
                  </select>
                    <label class="block text-sm">
                        <span class="my-2 text-gray-700 dark:text-gray-400">Status</span>
                        <select
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-blue-400 focus:outline-none focus:shadow-outline-blue dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                            <option>Approved</option>
                            <option>Pending</option>
                            <option>Denied</option>
                            <option>Expired</option>
                        </select>
                    </label>

                    <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Date</span>
                        <input type="date"
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-blue-400 focus:outline-none focus:shadow-outline-blue dark:text-gray-300 dark:focus:shadow-outline-gray form-input" />
                    </label>
                    <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Time</span>
                        <input type="time"
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-blue-400 focus:outline-none focus:shadow-outline-blue dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder="00:00:00" />
                    </label>
                    <div class="flex items-center justify-between">
                        <button type="cancel"
                            class="px-4 mt-6 py-2 text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                            <a href="exam.html">
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
    </div>
</main>

@endsection
