@extends('Admin.layouts.master')
@section('content')
    <main class="h-full pb-16 overflow-y-auto">
        <div class="container px-6 mx-auto grid">
            <div class="pl-2">
                <div class="flex items-center justify-between">
                    <h2 class="my-6 text-xl font-semibold text-gray-700 dark:text-gray-200">
                        Add New Question
                    </h2>
                    <ol class="inline-flex items-center space-x-1 md:space-x-3 text-xs">
                        <li class="inline-flex items-center">
                            <a href="index.html"
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
                                <a href="questions_bank.html"
                                    class="ml-1 font-semibold text-gray-500 hover:text-gray-700 md:ml-2 dark:text-gray-400 dark:hover:text-white">Questions
                                    Bank</a>
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
                                <span class="ml-1 font-semibold text-gray-700 md:ml-2 dark:text-gray-400">Add
                                    Question</span>
                            </div>
                        </li>
                    </ol>
                </div>
                <form action="{{ route('Admin#addQuestionToDB') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="px-4 py-3 mb-8 bg-gray-200 rounded-lg shadow-md dark:bg-gray-800">
                        <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select
                            the Chapter</label>
                        <select id="subject" name="subject" value="{{ old('subject') }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  @error('subject')
                                placeholder-red-700 border border-red-500 rounded outline-none focus:ring-red-500
                            @enderror focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
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
                        <label class="block my-2 text-sm text-gray-700 dark:text-white" for="year">Year</label>
                        {{-- <input
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer  bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            name="year" value="{{ old('year') }}" type="text"> --}}
                        <select name="year" value="{{ old('year') }}"
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer  bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
                            <option selected>Choose year</option>
                            <option>2015</option>
                            <option>2016</option>
                            <option>2017</option>
                            <option>2018</option>
                            <option>2019</option>
                            <option>2020</option>
                            <option>2021</option>
                            <option>2022</option>
                            <option>2023</option>
                        </select>




                        <label class="block my-2 text-sm text-gray-700 dark:text-white" for="year">Season</label>
                        <select id="season" name="season" value="{{ old('season') }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 @error('season')
                                placeholder-red-700 border border-red-500 rounded outline-none focus:ring-red-500
                            @enderror text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Choose season</option>
                            <option value="S">Summer(April)</option>
                            <option value="A">Autumn(October)</option>
                        </select>


                        <label class="block my-2 text-sm text-gray-700 dark:text-white" for="file_input">Question</label>
                        <input name="question_img"
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            id="file_input" type="file">
                        <textarea rows="4" name="question_text"
                            class="block p-2.5 w-full text-sm text-gray-900 @error('question_text')
                                placeholder-red-700 border border-red-500 rounded outline-none focus:ring-red-500
                            @enderror bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Write your question here..."></textarea>

                        <label for="optionA" class="block ml-2 mr-5 p-3 text-sm text-gray-700 dark:text-white">
                            For Option A
                        </label>
                        <input name="optA_img"
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            type="file">
                        <textarea rows="4" name="optA"
                            class="block p-2.5 w-full text-sm text-gray-900 @error('optA')
                                placeholder-red-700 border border-red-500 rounded outline-none focus:ring-red-500
                            @enderror bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Write Answer A here..."></textarea>

                        <label for="optionB" class="block ml-2 mr-5 p-3 text-sm text-gray-700 dark:text-white">
                            For Option B
                        </label>
                        <input name="optB_img"
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            id="file_input" type="file">
                        <textarea id="message" rows="4" name="optB"
                            class="block p-2.5 w-full text-sm text-gray-900 @error('optB')
                                placeholder-red-700 border border-red-500 rounded outline-none focus:ring-red-500
                            @enderror bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Write Answer B here..."></textarea>

                        <label for="optionC" class="block ml-2 mr-5 p-3 text-sm text-gray-700 dark:text-white">
                            For Option C
                        </label>
                        <input name="optC_img"
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            id="file_input" type="file">
                        <textarea id="message" rows="4" name="optC"
                            class="block p-2.5 w-full text-sm text-gray-900  bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Write Answer C here..."></textarea>

                        <label for="optionD" class="block ml-2 mr-5 p-3 text-sm text-gray-700 dark:text-white">
                            For Option D
                        </label>
                        <input name="optD_img"
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            id="file_input" type="file">
                        <textarea id="message" rows="4" name="optD"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Write Answer D here..."></textarea>
                        <label for="answer"
                            class="block mb-2 mt-3 text-sm font-medium text-gray-900 dark:text-white">Select
                            Correct Answer</label>
                        <select name="correct_answer"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Choose correct Answer</option>
                            <option>A</option>
                            <option>B</option>
                            <option>C</option>
                            <option>D</option>
                        </select>

                        <div class="flex items-center justify-between">
                            <button type="cancel"
                                class="px-4 mt-6 py-2 text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                                <a href="questions_bank.html">
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
