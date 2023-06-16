<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('Student/output.css') }}" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <title>Practice</title>
    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (
            localStorage.getItem("color-theme") === "dark" ||
            (!("color-theme" in localStorage) &&
                window.matchMedia("(prefers-color-scheme: dark)").matches)
        ) {
            document.documentElement.classList.add("dark");
        } else {
            document.documentElement.classList.remove("dark");
        }
    </script>
</head>

<body>
    <div class="flex flex-row h-screen text-black bg-blue-100 dark:bg-DMgray-bg">
        <div class="md:w-64 bg-white hidden md:flex flex-col h-full dark:bg-DMgray-menu">
            <div class="mb-1">
                <h1 class="p-3 font-bold text-lg text-black dark:bg-DMgray-menu dark:text-DMgray-primary_text">
                    ITPEC eXamPrep
                </h1>
            </div>
            <div>
                <ul>
                    <li class="p-3 group relative z-0">
                        @yield('activeIndex')
                        <span
                            class="w-0 h-full bg-wbc-100 absolute top-0 left-0 ease-in-out duration-500 transition-all group-hover:w-64 -z-10 dark:bg-DMgray-hover"></span>
                        <a class="inline-flex items-center w-full font-semibold transition-colors duration-300 ease-in-out group-hover:text-white z-10 dark:text-DMgray-primary_text"
                            href="{{ route('student#index') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-5 h-5">
                                <path
                                    d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
                                <path
                                    d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
                            </svg>

                            <span class="ml-4">Dashboard</span>
                        </a>
                    </li>
                    <li class="p-3 group relative z-0">
                        @yield('activeEscore')
                        <span
                            class="w-0 h-full bg-wbc-100 absolute top-0 left-0 ease-in-out duration-500 transition-all group-hover:w-64 -z-10 dark:bg-DMgray-hover"></span>
                        <a class="inline-flex items-center w-full font-semibold transition-colors duration-300 ease-in-out group-hover:text-white z-10 dark:text-white"
                            href="{{ route('student#score') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-5 h-5">
                                <path fill-rule="evenodd"
                                    d="M5.166 2.621v.858c-1.035.148-2.059.33-3.071.543a.75.75 0 00-.584.859 6.753 6.753 0 006.138 5.6 6.73 6.73 0 002.743 1.346A6.707 6.707 0 019.279 15H8.54c-1.036 0-1.875.84-1.875 1.875V19.5h-.75a2.25 2.25 0 00-2.25 2.25c0 .414.336.75.75.75h15a.75.75 0 00.75-.75 2.25 2.25 0 00-2.25-2.25h-.75v-2.625c0-1.036-.84-1.875-1.875-1.875h-.739a6.706 6.706 0 01-1.112-3.173 6.73 6.73 0 002.743-1.347 6.753 6.753 0 006.139-5.6.75.75 0 00-.585-.858 47.077 47.077 0 00-3.07-.543V2.62a.75.75 0 00-.658-.744 49.22 49.22 0 00-6.093-.377c-2.063 0-4.096.128-6.093.377a.75.75 0 00-.657.744zm0 2.629c0 1.196.312 2.32.857 3.294A5.266 5.266 0 013.16 5.337a45.6 45.6 0 012.006-.343v.256zm13.5 0v-.256c.674.1 1.343.214 2.006.343a5.265 5.265 0 01-2.863 3.207 6.72 6.72 0 00.857-3.294z"
                                    clip-rule="evenodd" />
                            </svg>

                            <span class="ml-4">Exam Scores</span>
                        </a>
                    </li>
                    <li id="exam"
                        class="grid-rows-3 p-3 bg-white dark:bg-DMgray-menu dark:text-DMgray-primary_text group relative z-0">
                        @yield('activeExam')
                        <span
                            class="w-0 h-full bg-wbc-100 absolute top-0 left-0 ease-in-out duration-500 transition-all group-hover:w-64 -z-10 dark:bg-DMgray-hover"></span>
                        <div>
                            <button
                                class="flex items-center w-full font-semibold transition-colors duration-300 ease-in-out group-hover:text-white z-10"
                                onclick="examdrop()">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-5 h-5">
                                    <path
                                        d="M11.25 4.533A9.707 9.707 0 006 3a9.735 9.735 0 00-3.25.555.75.75 0 00-.5.707v14.25a.75.75 0 001 .707A8.237 8.237 0 016 18.75c1.995 0 3.823.707 5.25 1.886V4.533zM12.75 20.636A8.214 8.214 0 0118 18.75c.966 0 1.89.166 2.75.47a.75.75 0 001-.708V4.262a.75.75 0 00-.5-.707A9.735 9.735 0 0018 3a9.707 9.707 0 00-5.25 1.533v16.103z" />
                                </svg>

                                <span class="pl-4">Exams</span>
                            </button>
                        </div>
                        <div class="hidden row-span-2 bg-blue-100 shadow-inner rounded-lg dark:bg-DMgray-bg"
                            id="examdropdown">
                            <a href="{{ route('student#exam') }}">
                                <div class="p-2 hover:bg-blue-200 rounded-lg dark:hover:bg-DMgray-menu">
                                    Take Exam
                                </div>
                            </a>
                            <a href="{{ route('student#practice') }}">
                                <div class="p-2 hover:bg-blue-200 rounded-lg  dark:hover:bg-DMgray-menu">
                                    Practise
                                </div>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="flex flex-1 flex-col w-full">
            <header class="grid grid-cols-2 bg-white shadow-lg relative dark:bg-DMgray-menu">
                <div class="md:hidden block p-4">
                    <!--Mobile Humberger-->
                    <div>
                        <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar"
                            aria-controls="default-sidebar" type="button"
                            class="inline-flex items-center text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                            <span class="sr-only">Open sidebar</span>
                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                    d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                                </path>
                            </svg>
                        </button>
                    </div>
                    <!--mobile hamberger end-->
                    <!--Mobile Drop down-->
                    <aside id="default-sidebar"
                        class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
                        aria-label="Sidebar">
                        <div class="md:w-64 bg-white md:flex flex-col h-full dark:bg-DMgray-menu">
                            <div class="mb-1">
                                <h1 class="p-3 font-bold text-lg text-black dark:text-DMgray-primary_text">
                                    Home
                                </h1>
                            </div>
                            <div>
                                <ul>
                                    <li class="p-3 group relative z-0">
                                        <span
                                            class="w-0 h-full bg-wbc-100 absolute top-0 left-0 ease-in-out duration-500 transition-all group-hover:w-64 -z-10 dark:bg-DMgray-hover"></span>
                                        <a class="inline-flex items-center w-full font-semibold transition-colors duration-300 ease-in-out group-hover:text-white z-10 dark:text-DMgray-primary_text"
                                            href="{{ route('student#index') }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" class="w-5 h-5">
                                                <path
                                                    d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
                                                <path
                                                    d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
                                            </svg>

                                            <span class="ml-4">Dashboard</span>
                                        </a>
                                    </li>
                                    <li class="p-3 group relative z-0">
                                        <span
                                            class="w-0 h-full bg-wbc-100 absolute top-0 left-0 ease-in-out duration-500 transition-all group-hover:w-64 -z-10 dark:bg-DMgray-hover"></span>
                                        <a class="inline-flex items-center w-full font-semibold transition-colors duration-300 ease-in-out group-hover:text-white z-10 dark:text-DMgray-primary_text"
                                            href="{{ route('student#score') }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" class="w-5 h-5">
                                                <path fill-rule="evenodd"
                                                    d="M5.166 2.621v.858c-1.035.148-2.059.33-3.071.543a.75.75 0 00-.584.859 6.753 6.753 0 006.138 5.6 6.73 6.73 0 002.743 1.346A6.707 6.707 0 019.279 15H8.54c-1.036 0-1.875.84-1.875 1.875V19.5h-.75a2.25 2.25 0 00-2.25 2.25c0 .414.336.75.75.75h15a.75.75 0 00.75-.75 2.25 2.25 0 00-2.25-2.25h-.75v-2.625c0-1.036-.84-1.875-1.875-1.875h-.739a6.706 6.706 0 01-1.112-3.173 6.73 6.73 0 002.743-1.347 6.753 6.753 0 006.139-5.6.75.75 0 00-.585-.858 47.077 47.077 0 00-3.07-.543V2.62a.75.75 0 00-.658-.744 49.22 49.22 0 00-6.093-.377c-2.063 0-4.096.128-6.093.377a.75.75 0 00-.657.744zm0 2.629c0 1.196.312 2.32.857 3.294A5.266 5.266 0 013.16 5.337a45.6 45.6 0 012.006-.343v.256zm13.5 0v-.256c.674.1 1.343.214 2.006.343a5.265 5.265 0 01-2.863 3.207 6.72 6.72 0 00.857-3.294z"
                                                    clip-rule="evenodd" />
                                            </svg>

                                            <span class="ml-4"> Exam Scores </span>
                                        </a>
                                    </li>
                                    <li id="mobileexam"
                                        class="grid-rows-3 p-3 bg-white group relative z-0 dark:bg-DMgray-menu dark:text-DMgray-primary_text">
                                        <span
                                            class="w-0 h-full bg-wbc-100 absolute top-0 left-0 ease-in-out duration-500 transition-all group-hover:w-64 -z-10 dark:bg-DMgray-hover"></span>
                                        <div>
                                            <button
                                                class="flex items-center w-full font-semibold transition-colors duration-300 ease-in-out group-hover:text-white z-10"
                                                onclick="mobileexamdrop()">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="currentColor" class="w-5 h-5">
                                                    <path
                                                        d="M11.25 4.533A9.707 9.707 0 006 3a9.735 9.735 0 00-3.25.555.75.75 0 00-.5.707v14.25a.75.75 0 001 .707A8.237 8.237 0 016 18.75c1.995 0 3.823.707 5.25 1.886V4.533zM12.75 20.636A8.214 8.214 0 0118 18.75c.966 0 1.89.166 2.75.47a.75.75 0 001-.708V4.262a.75.75 0 00-.5-.707A9.735 9.735 0 0018 3a9.707 9.707 0 00-5.25 1.533v16.103z" />
                                                </svg>

                                                <span class="pl-4">Exams</span>
                                            </button>
                                        </div>
                                        <div class="hidden row-span-2 bg-blue-100 shadow-inner rounded-lg dark:bg-DMgray-menu"
                                            id="mobileexamdropdown">
                                            <a href="{{ route('student#exam') }}">
                                                <div
                                                    class="p-2 hover:bg-blue-200 rounded-lg dark:hover:bg-DMgray-menu">
                                                    Take Exam
                                                </div>
                                            </a>
                                            <a href="{{ route('student#practice') }}">
                                                <div
                                                    class="p-2 hover:bg-blue-200 rounded-lg dark:hover:bg-DMgray-menu">
                                                    Practise
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                    <!--Mobile Dropdown End-->
                </div>
                <div class="flex px-3 py-2 justify-self-end md:col-span-2">
                    <div>
                        <button id="theme-toggle" type="button"
                            class="text-black mx-4 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg text-sm p-2.5">
                            <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                            </svg>
                            <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                    fill-rule="evenodd" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <button id="profile_icon" class="hover:shadow-md w-10 h-10 rounded-full"
                        onclick="profile_drop()">
                        @if (Auth::user()->image == null)
                            <img id="profile_image" class="w-10 h-10 object-cover rounded-full"
                                src="{{ asset('Student/img/Takagi_S1.jpg') }}" alt="Rounded avatar" />
                        @else
                            <img id="profile_image" class="w-10 h-10 object-cover rounded-full"
                                src="{{ asset('storage/' . Auth::user()->image) }}" alt="Rounded avatar" />
                        @endif

                    </button>

                    <div id="profile_dropdown"
                        class="hidden flex-col items-start bg-white dark:bg-DMgray-card dark:border-0 font-semibold rounded-sm border shadow w-40 z-10 absolute top-[52px] right-4">
                        <a href="{{ route('student#profile') }}"
                            class="p-1 pl-3 w-full flex gap-3 items-center rounded-sm transition ease-in-out delay-75 hover:bg-wbc-100 hover:text-white dark:text-DMgray-secondary_text dark:hover:bg-DMgray-hover">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-5 h-5">
                                <path fill-rule="evenodd"
                                    d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                                    clip-rule="evenodd" />
                            </svg>

                            <span>Profile</span></a>
                        <a href="{{ route('student#changePasswordPage') }}"
                            class="p-1 pl-3 w-full flex gap-3 items-center transition ease-in-out delay-75 hover:bg-wbc-100 hover:text-white dark:text-DMgray-secondary_text dark:hover:bg-DMgray-hover">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-5 h-5">
                                <path fill-rule="evenodd"
                                    d="M11.078 2.25c-.917 0-1.699.663-1.85 1.567L9.05 4.889c-.02.12-.115.26-.297.348a7.493 7.493 0 00-.986.57c-.166.115-.334.126-.45.083L6.3 5.508a1.875 1.875 0 00-2.282.819l-.922 1.597a1.875 1.875 0 00.432 2.385l.84.692c.095.078.17.229.154.43a7.598 7.598 0 000 1.139c.015.2-.059.352-.153.43l-.841.692a1.875 1.875 0 00-.432 2.385l.922 1.597a1.875 1.875 0 002.282.818l1.019-.382c.115-.043.283-.031.45.082.312.214.641.405.985.57.182.088.277.228.297.35l.178 1.071c.151.904.933 1.567 1.85 1.567h1.844c.916 0 1.699-.663 1.85-1.567l.178-1.072c.02-.12.114-.26.297-.349.344-.165.673-.356.985-.57.167-.114.335-.125.45-.082l1.02.382a1.875 1.875 0 002.28-.819l.923-1.597a1.875 1.875 0 00-.432-2.385l-.84-.692c-.095-.078-.17-.229-.154-.43a7.614 7.614 0 000-1.139c-.016-.2.059-.352.153-.43l.84-.692c.708-.582.891-1.59.433-2.385l-.922-1.597a1.875 1.875 0 00-2.282-.818l-1.02.382c-.114.043-.282.031-.449-.083a7.49 7.49 0 00-.985-.57c-.183-.087-.277-.227-.297-.348l-.179-1.072a1.875 1.875 0 00-1.85-1.567h-1.843zM12 15.75a3.75 3.75 0 100-7.5 3.75 3.75 0 000 7.5z"
                                    clip-rule="evenodd" />
                            </svg>

                            <span> Password</span>
                        </a>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit"
                                class="p-1 pl-3 pb-2 w-full flex gap-3 items-center transition ease-in-out delay-75 hover:bg-wbc-100 hover:text-white dark:text-DMgray-secondary_text dark:hover:bg-DMgray-hover">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                                </svg>

                                Logout
                            </button>
                        </form>

                    </div>

                </div>
            </header>
            <main>
                @yield('content')
            </main>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <script src="{{ asset('Student/java.js') }}"></script>
</body>

</html>
