@extends('Student.layouts.layout')



@section('activeExam')
    <span class="absolute inset-y-0 left-0 w-1 bg-blue-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
@endsection
@section('content')
    <main class="hidden md:block">
        <div class="bg-blue-100 dark:bg-DMgray-bg">
            <div class="px-5 pt-4 pb-3 text-2xl font-bold text-wbc-100 dark:text-white">
                <span>Practice Makes Perfect</span>
            </div>
            <div class="flex flex-col">
                <!--Old Questions-->
                <div class="h-32 m-4 grid grid-cols-6 bg-white rounded-md shadow-md dark:bg-DMgray-card">
                    <div
                        class="bg-wbc-100 col-span-2 h-full rounded-md flex items-center justify-center dark:bg-DMgray-hover">
                        <span class="text-white text-xl font-bold text-center">Old Questions</span>
                    </div>

                    <div class="col-span-3 flex justify-around items-center">
                        <div class="relative">
                            <label for="years"
                                class="hidden md:block mb-2 text-sm font-medium text-gray-900 dark:text-white absolute -top-7 left-4">Select
                                Year</label>
                            <select id="years"
                                class="w-full ml-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-DMgray-menu dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <div class="overflow-y-auto h-12">
                                    <option value="US">Random</option>
                                    <option value="CA">2015</option>
                                    <option value="FR">2016</option>
                                    <option value="DE">2017</option>
                                    <option value="US">2018</option>
                                    <option value="CA">2019</option>
                                    <option value="FR">2020</option>
                                </div>
                            </select>
                        </div>
                        <div class="relative">
                            <label for="years"
                                class="hidden md:block mb-2 text-sm font-medium text-gray-900 dark:text-white absolute -top-4 left-5">Select
                                Season</label>
                            <select id="years"
                                class="m-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-DMgray-menu dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <div class="overflow-y-auto h-12">
                                    <option value="US">Random</option>
                                    <option value="CA">Autumn</option>
                                    <option value="FR">Summer</option>
                                </div>
                            </select>
                        </div>
                    </div>

                    <div class="self-center col-span-1 md:mx-auto">
                        <button class="shine_button bg-wbc-100 p-3 hover:bg-wbc-50 hover:shadow-lg rounded-md text-white">
                            <div class="hidden md:block">Let Go!</div>
                            <div class="md:hidden">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-5 h-5">
                                    <path
                                        d="M3.478 2.405a.75.75 0 00-.926.94l2.432 7.905H13.5a.75.75 0 010 1.5H4.984l-2.432 7.905a.75.75 0 00.926.94 60.519 60.519 0 0018.445-8.986.75.75 0 000-1.218A60.517 60.517 0 003.478 2.405z" />
                                </svg>
                            </div>
                        </button>
                    </div>
                </div>
                <!--Chapters Practices-->
                <div class="h-32 m-4 grid grid-cols-6 bg-white rounded-md shadow-md dark:bg-DMgray-card">
                    <div
                        class="bg-wbc-100 col-span-2 h-full rounded-md flex items-center justify-center dark:bg-DMgray-hover">
                        <span class="text-white text-xl text-center font-bold">Practise Chapters</span>
                    </div>

                    <div class="col-span-3 pl-10 flex items-center relative">
                        <label for="chapters"
                            class="hidden md:block mb-2 text-sm font-medium text-gray-900 dark:text-white absolute top-4 left-14">Select
                            Chapter</label>
                        <select id="chapters"
                            class="m-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-DMgray-menu dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <div class="overflow-y-auto h-12">
                                <option value="US">Hardware</option>
                                <option value="CA">Information Processing System</option>
                                <option value="FR">Software</option>
                                <option value="DE">Database</option>
                                <option value="US">Network</option>
                                <option value="CA">Security</option>
                                <option value="FR">Data Structure and Algorithm</option>
                                <option value="US">Coporate and Legal Affairs</option>
                                <option value="CA">Business Strategy</option>
                                <option value="FR">Information System Stragey</option>
                                <option value="DE">Development Technology</option>
                                <option value="US">Project Management</option>
                                <option value="CA">Service Management</option>
                                <option value="FR">
                                    System Adudit and Internal Control
                                </option>
                            </div>
                        </select>
                    </div>

                    <div class="self-center col-span-1 mx-auto">
                        <button class="shine_button bg-wbc-100 p-3 hover:bg-wbc-50 hover:shadow-lg rounded-md text-white">
                            <div class="hidden md:block">Let Go!</div>
                            <div class="md:hidden">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-5 h-5">
                                    <path
                                        d="M3.478 2.405a.75.75 0 00-.926.94l2.432 7.905H13.5a.75.75 0 010 1.5H4.984l-2.432 7.905a.75.75 0 00.926.94 60.519 60.519 0 0018.445-8.986.75.75 0 000-1.218A60.517 60.517 0 003.478 2.405z" />
                                </svg>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!--Mobile Section-->
    <main class="md:hidden">
        <div class="px-5 pt-4 pb-3 text-2xl font-bold text-wbc-100 dark:text-white">
            <span>Practice Makes Perfect</span>
        </div>
        <div>
            <div class="m-2 mb-3 bg-white rounded-md dark:bg-DMgray-card">
                <div class="bg-wbc-100 rounded text-center text-lg font-semibold text-white p-2 dark:bg-DMgray-hover">
                    Old Question
                </div>
                <div class="bg-blue-50 m-3 shadow-md dark:bg-DMgray-card">
                    <label for="underline_select" class="sr-only">Underline select</label>
                    <select id="underline_select"
                        class="block py-2.5 px-2 w-full rounded-lg bg-transparent border-gray-200 dark:bg-DMgray-menu dark:text-white dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                        <option selected>Choose Year</option>
                        <option value="15">2015</option>
                        <option value="16">2016</option>
                        <option value="17">2017</option>
                        <option value="18">2018</option>
                        <option value="19">2019</option>
                        <option value="20">2020</option>
                    </select>
                </div>
                <div class="bg-blue-50 m-3 shadow-md dark:bg-DMgray-card">
                    <label for="underline_select" class="sr-only">Underline select</label>
                    <select id="underline_select"
                        class="block py-2.5 px-2 w-full rounded-lg bg-transparent border-gray-200 dark:bg-DMgray-menu dark:text-white dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                        <option selected>Choose Season</option>
                        <option value="US">Autumn</option>
                        <option value="CA">Summer</option>
                    </select>
                </div>
                <div class="flex justify-center">
                    <button class="bg-wbc-100 active:bg-wbc-50 text-white rounded px-4 py-2.5 mb-2">
                        Let's Go
                    </button>
                </div>
            </div>
            <div class="m-2 mb-3 bg-white rounded-md shadow-lg dark:bg-DMgray-card">
                <div class="bg-wbc-100 rounded text-center text-lg font-semibold text-white p-2 dark:bg-DMgray-hover">
                    Practise Chapters
                </div>
                <div class="bg-blue-50 m-3 shadow-md dark:bg-DMgray-card">
                    <label for="underline_select" class="sr-only">Underline select</label>
                    <select id="underline_select"
                        class="block py-2.5 px-2 w-full rounded-lg bg-transparent border-gray-200 dark:bg-DMgray-menu dark:text-white dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                        <option selected>Choose Chapter</option>
                        <option value="US">Hardware</option>
                        <option value="CA">Information Processing System</option>
                        <option value="FR">Software</option>
                        <option value="DE">Database</option>
                        <option value="US">Network</option>
                        <option value="CA">Security</option>
                        <option value="FR">Data Structure and Algorithm</option>
                        <option value="US">Coporate and Legal Affairs</option>
                        <option value="CA">Business Strategy</option>
                        <option value="FR">Information System Stragey</option>
                        <option value="DE">Development Technology</option>
                        <option value="US">Project Management</option>
                        <option value="CA">Service Management</option>
                        <option value="FR">System Adudit and Internal Control</option>
                    </select>
                </div>

                <div class="flex justify-center">
                    <button class="bg-wbc-100 active:bg-wbc-50 text-white rounded px-4 py-2.5 mb-2">
                        Let's Go
                    </button>
                </div>
            </div>
        </div>
    </main>
@endsection
