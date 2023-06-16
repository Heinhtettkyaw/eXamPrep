@extends('Student.layouts.layout')
@section('activeExam')
    <span class="absolute inset-y-0 left-0 w-1 bg-blue-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
@endsection
@section('content')
    <main class="overflow-y-auto">
        <!--Header-->
        <div class="bg-blue-100 pl-10 py-2 mb-2 dark:bg-DMgray-bg">
            <h1 class="text-2xl text-wbc-100 font-bold dark:text-white">
                Exam Detail
            </h1>
        </div>

        <!--Exam Rules-->
        <div class="bg-white rounded-md shadow-md ml-10 mr-10 mt-3 mb-3 dark:bg-DMgray-card">
            <div class="font-semibold rounded-t-lg bg-wbc-100 text-white text-lg px-6 py-2 text-left dark:bg-DMgray-hover">
                Exam Rules!
            </div>
            <div class="px-6 py-3 text-left dark:text-white">
                <p>
                    Please do not open book.<br />
                    Don't use internet.<br />
                    Don't use ChatGpt.
                </p>
            </div>
        </div>

        <!--Exam Confirmation-->
        <div class="ml-10 mr-10 mt-3 shadow rounded-md bg-white dark:bg-DMgray-card">
            <div class="py-3 px-6 bg-wbc-100 rounded-t-lg dark:bg-DMgray-hover">
                <span class="font-semibold text-lg text-white">Confirm Data</span>
            </div>

            <!--Exam Description-->
            <div>
                <div class="flex sm:rounded-lg">
                    <table class="grow mx-4 m-3 text-sm text-left text-black dark:text-gray-400">
                        <tbody>
                            <tr class="bg-white dark:bg-DMgray-menu">
                                <th scope="row" class="px-6 py-3 font-medium dark:text-white">
                                    Exam name
                                </th>
                                <td class="px-6 py-3">Fe Morning Question</td>
                            </tr>
                            <tr class="bg-blue-50 dark:bg-DMgray-card">
                                <th scope="row" class="px-6 py-3 font-medium dark:text-white">
                                    Lecturer
                                </th>
                                <td class="px-6 py-3">Daw Hla</td>
                            </tr>
                            <tr class="bg-white dark:bg-DMgray-menu">
                                <th scope="row" class="px-6 py-3 font-medium dark:text-white">
                                    Class
                                </th>
                                <td class="px-6 py-3">Batch 2</td>
                            </tr>
                            <tr class="bg-blue-50 dark:bg-DMgray-card">
                                <th scope="row" class="px-6 py-3 font-medium dark:text-white">
                                    Number of qusetions
                                </th>
                                <td class="px-6 py-3">50</td>
                            </tr>

                            <tr class="bg-white dark:bg-DMgray-menu">
                                <th scope="row" class="px-6 py-3 font-medium dark:text-white">
                                    Time
                                </th>
                                <td class="px-6 py-3">1:00:00</td>
                            </tr>
                            <tr class="bg-blue-50 dark:bg-DMgray-card">
                                <th scope="row" class="px-6 py-3 font-medium text-gray-900 dark:text-white">
                                    Late
                                </th>
                                <td class="px-6 py-3">2/3/2012 3:00 pm</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--Exam Start Button-->

        <div class="flex mx-8 my-3 items-center">
            <button
                class="bg-wbc-100 flex items-center text-white shine_button hover:bg-wbc-50 shadow py-2 px-4 m-2 rounded">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                </svg>
                <span class="p-1">Start</span>
            </button>

            <div
                class="flex shadow rounded bg-white py-3 px-3 text-center items-center border border-black dark:bg-DMgray-card dark:text-white dark:border-white">
                <span>Time Remaining :</span>
                <div class="ml-5">1: 9: 30</div>
            </div>
        </div>
    </main>
@endsection
