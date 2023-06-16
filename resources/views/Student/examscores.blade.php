@extends('Student.layouts.layout')
@section('activeEscore')
    <span class="absolute inset-y-0 left-0 w-1 bg-blue-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
@endsection
@section('content')
    <main class="hidden sm:block">
        <div class="px-5 pt-4 pb-3 text-2xl font-bold text-wbc-100 dark:text-DMgray-primary_text">
            <span>Exam Scores</span>
        </div>
        <div class="overflow-y-auto shadow-lg sm:rounded-lg my-2 mx-5">
            <table class="w-full text-sm text-left text-gray-500 dark:text-white">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-DMgray-card dark:text-white">
                    <tr>
                        <th scope="col" class="px-6 py-4">Exam Name</th>
                        <th scope="col" class="px-6 py-4">Scores</th>
                        <th scope="col" class="px-6 py-4">Status</th>
                        <th scope="col" class="px-6 py-4">View Details</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-DMgray-menu dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                            Apple MacBook Pro 17"
                        </th>
                        <td class="px-6 py-4">Silver</td>
                        <td class="px-6 py-4">Laptop</td>
                        <td class="px-6 py-4">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View</a>
                        </td>
                    </tr>
                    <tr class="border-b bg-gray-50 dark:bg-DMgray-card dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Microsoft Surface Pro
                        </th>
                        <td class="px-6 py-4">White</td>
                        <td class="px-6 py-4">Laptop PC</td>
                        <td class="px-6 py-4">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View</a>
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-DMgray-menu dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Magic Mouse 2
                        </th>
                        <td class="px-6 py-4">Black</td>
                        <td class="px-6 py-4">Accessories</td>
                        <td class="px-6 py-4">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View</a>
                        </td>
                    </tr>
                    <tr class="border-b bg-gray-50 dark:bg-DMgray-card dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                            Google Pixel Phone
                        </th>
                        <td class="px-6 py-4">Gray</td>
                        <td class="px-6 py-4">Phone</td>
                        <td class="px-6 py-4">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
    <!--Mobile Table View-->
    <main class="sm:hidden">
        <div class="px-5 pt-4 pb-3 text-2xl font-bold text-wbc-100 dark:text-DMgray-primary_text">
            <span>Exam Scores</span>
        </div>
        <div class="m-2">
            <table class="w-full text-lg text-left text-gray-500 dark:text-white">
                <thead class="text-gray-700 uppercase bg-gray-50 dark:bg-DMgray-card dark:text-white">
                    <tr>
                        <th scope="col" class="px-6 py-3">Exam Name</th>

                        <th scope="col" class="px-6 py-3">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-DMgray-menu dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                            Hardware
                        </th>

                        <td class="px-6 py-4">
                            <a href="#" class="font-medium text-green-500 hover:underline">Passed</a>
                        </td>
                    </tr>
                    <tr class="border-b bg-gray-50 dark:bg-DMgray-card dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                            Data Structure and Algorithm
                        </th>

                        <td class="px-6 py-4">
                            <a href="#" class="font-medium text-red-500 hover:underline">Failed</a>
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-DMgray-menu dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                            Security
                        </th>

                        <td class="px-6 py-4">
                            <a href="#" class="font-medium text-green-500 hover:underline">Passed</a>
                        </td>
                    </tr>
                    <tr class="border-b bg-gray-50 dark:bg-DMgray-card dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                            Fe AM Questions
                        </th>

                        <td class="px-6 py-4">
                            <a href="#" class="font-medium text-green-500 hover:underline">Passed</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
@endsection
