@extends('Student.layouts.layout')
@section('activeIndex')
    <span class="absolute inset-y-0 left-0 w-1 bg-blue-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
@endsection
@section('content')
    <main class="bg-blue-100 h-screen dark:bg-DMgray-bg">
        <div class="px-5 pt-4 pb-1 text-2xl font-bold text-wbc-50 dark:text-DMgray-primary_text">
            <span>Dashboard</span>
        </div>
        <!--Cards-->
        <div class="grid gap-1 m-4 lg:grid-cols-2">
            <!--Card1-->
            <div class="flex flex-row justify-items-center p-4 bg-white rounded-lg shadow-md m-2 dark:bg-DMgray-card">
                <div
                    class="flex-auto basis-1/4 flex h-15 w-5 bg-blue-100 shadow-inner rounded-md dark:bg-DMgray-secondary_text">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="w-6 h-6 self-center grow">
                        <path
                            d="M11.25 4.533A9.707 9.707 0 006 3a9.735 9.735 0 00-3.25.555.75.75 0 00-.5.707v14.25a.75.75 0 001 .707A8.237 8.237 0 016 18.75c1.995 0 3.823.707 5.25 1.886V4.533zM12.75 20.636A8.214 8.214 0 0118 18.75c.966 0 1.89.166 2.75.47a.75.75 0 001-.708V4.262a.75.75 0 00-.5-.707A9.735 9.735 0 0018 3a9.707 9.707 0 00-5.25 1.533v16.103z" />
                    </svg>
                </div>
                <div class="basis-2/4 flex flex-col text-black">
                    <p class="self-center mb-2 text-lg font-medium dark:text-DMgray-secondary_text">
                        Total Exams
                    </p>
                    <p class="self-center text-lg font-semibold dark:text-DMgray-secondary_text">
                        10
                    </p>
                </div>
                <div class="basis-1/4 flex text-cnf-500">
                    <div class="self-center">
                        <a href="examscores.html"
                            class="flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-wbc-100 border-2 rounded-full shadow-md hover:bg-wbc-50 hover:text-white hover:shadow-inner focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-wbc-100 dark:hover:bg-wbc-50 dark:border-0">
                            <div>Details</div>
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
            <!--Card 1 end-->

            <!--Card 2-->
            <div class="flex flex-row justify-items-center p-4 bg-white rounded-lg shadow-md m-2 dark:bg-DMgray-card">
                <div
                    class="flex-auto basis-1/4 flex h-15 w-5 bg-blue-100 shadow-inner rounded-md dark:bg-DMgray-secondary_text">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="w-6 h-6 self-center grow">
                        <path
                            d="M11.25 4.533A9.707 9.707 0 006 3a9.735 9.735 0 00-3.25.555.75.75 0 00-.5.707v14.25a.75.75 0 001 .707A8.237 8.237 0 016 18.75c1.995 0 3.823.707 5.25 1.886V4.533zM12.75 20.636A8.214 8.214 0 0118 18.75c.966 0 1.89.166 2.75.47a.75.75 0 001-.708V4.262a.75.75 0 00-.5-.707A9.735 9.735 0 0018 3a9.707 9.707 0 00-5.25 1.533v16.103z" />
                    </svg>
                </div>
                <div class="basis-2/4 flex flex-col">
                    <p class="self-center mb-2 text-lg font-medium dark:text-DMgray-secondary_text">
                        Upcoming Exams
                    </p>
                    <p class="self-center text-lg font-semibold dark:text-DMgray-secondary_text">
                        5
                    </p>
                </div>
                <div class="basis-1/4 flex">
                    <div class="self-center">
                        <a href="examscores.html"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center bg-wbc-100 text-white border-2 rounded-full shadow-md hover:bg-wbc-50 hover:shadow-inner focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-wbc-100 dark:hover:bg-wbc-50 dark:border-0">
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
            <!--Card 2 End-->
            <!--Card 3 -->
            <div class="flex flex-row justify-items-center p-4 bg-white rounded-lg shadow-md m-2 dark:bg-DMgray-card">
                <div
                    class="flex-auto basis-1/4 flex h-15 w-5 bg-blue-100 shadow-inner rounded-md dark:bg-DMgray-secondary_text">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="w-6 h-6 self-center grow">
                        <path
                            d="M7.493 18.75c-.425 0-.82-.236-.975-.632A7.48 7.48 0 016 15.375c0-1.75.599-3.358 1.602-4.634.151-.192.373-.309.6-.397.473-.183.89-.514 1.212-.924a9.042 9.042 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75 2.25 2.25 0 012.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H14.23c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23h-.777zM2.331 10.977a11.969 11.969 0 00-.831 4.398 12 12 0 00.52 3.507c.26.85 1.084 1.368 1.973 1.368H4.9c.445 0 .72-.498.523-.898a8.963 8.963 0 01-.924-3.977c0-1.708.476-3.305 1.302-4.666.245-.403-.028-.959-.5-.959H4.25c-.832 0-1.612.453-1.918 1.227z" />
                    </svg>
                </div>
                <div class="basis-2/4 flex flex-col">
                    <p class="self-center mb-2 font-medium text-lg dark:text-DMgray-secondary_text">
                        Passed Exams
                    </p>
                    <p class="self-center text-lg font-semibold dark:text-DMgray-secondary_text">
                        10
                    </p>
                </div>
                <div class="basis-1/4 flex">
                    <div class="self-center">
                        <a href="examscores.html"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-wbc-100 rounded-full shadow-md border-2 hover:bg-wbc-50 hover:text-white hover:shadow-inner focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-wbc-100 dark:hover:bg-wbc-50 dark:border-0">
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
            <!--Card 3 End-->
            <!--Card 4-->
            <div class="flex flex-row justify-items-center p-4 bg-white rounded-lg shadow-md dark:bg-DMgray-card m-2">
                <div
                    class="flex-auto basis-1/4 flex h-15 w-5 bg-blue-100 shadow-inner rounded-md dark:bg-DMgray-secondary_text">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="w-6 h-6 self-center grow">
                        <path
                            d="M15.73 5.25h1.035A7.465 7.465 0 0118 9.375a7.465 7.465 0 01-1.235 4.125h-.148c-.806 0-1.534.446-2.031 1.08a9.04 9.04 0 01-2.861 2.4c-.723.384-1.35.956-1.653 1.715a4.498 4.498 0 00-.322 1.672V21a.75.75 0 01-.75.75 2.25 2.25 0 01-2.25-2.25c0-1.152.26-2.243.723-3.218C7.74 15.724 7.366 15 6.748 15H3.622c-1.026 0-1.945-.694-2.054-1.715A12.134 12.134 0 011.5 12c0-2.848.992-5.464 2.649-7.521.388-.482.987-.729 1.605-.729H9.77a4.5 4.5 0 011.423.23l3.114 1.04a4.5 4.5 0 001.423.23zM21.669 13.773c.536-1.362.831-2.845.831-4.398 0-1.22-.182-2.398-.52-3.507-.26-.85-1.084-1.368-1.973-1.368H19.1c-.445 0-.72.498-.523.898.591 1.2.924 2.55.924 3.977a8.959 8.959 0 01-1.302 4.666c-.245.403.028.959.5.959h1.053c.832 0 1.612-.453 1.918-1.227z" />
                    </svg>
                </div>
                <div class="basis-2/4 flex flex-col">
                    <p class="self-center mb-2 font-medium text-lg dark:text-DMgray-secondary_text">
                        Failed Exams
                    </p>
                    <p class="self-center text-lg font-semibold dark:text-DMgray-secondary_text">
                        15
                    </p>
                </div>
                <div class="basis-1/4 flex">
                    <div class="self-center">
                        <a href="examscores.html"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center bg-wbc-100 text-white rounded-full shadow-md border-2 hover:text-white hover:bg-wbc-50 hover:shadow-inner focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-wbc-100 dark:hover:bg-wbc-50 dark:border-0">
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
            <!--Card 4 End-->
        </div>
    </main>
@endsection
