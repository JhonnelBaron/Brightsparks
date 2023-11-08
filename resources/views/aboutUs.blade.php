<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BrightSparks</title>
    <link rel="icon" href="{{ asset('images/brightsparkslogo.png') }}" type="image/x-icon">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <script src="https://kit.fontawesome.com/57a798c9bb.js" crossorigin="anonymous"></script>

</head>

<body class="bg-gray-100">

    <nav class=" fixed top-0 left-0 right-0 z-[1000] bg-blue-900 border-gray-200 dark:bg-gray-900 dark:border-gray-700">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="{{ route('welcome') }}" class="flex items-center space-x-2">
                <img src="{{ asset('images/brightsparkslogo.png') }}" class="w-8 h-58">
                <span class="text-md font-bold whitespace-nowrap text-yellow-300 hover:text-yellow-400">BRIGHTSPARKS
                    MULTIPLE INTELLIGENCE SCHOOL INC.</span>
            </a>
            <button data-collapse-toggle="navbar-dropdown" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-dropdown" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
                <ul class="flex flex-col font-medium p-4 md:p-0 mt-4  md:flex-row md:space-x-8 md:mt-0 md:border-0  ">
                    <li>
                        <a href="{{ route('welcome') }}"
                            class="block py-2 pl-3 pr-4 text-white     {{ Request::is('/') ? ' border-b-2 border-yellow-300' : '' }}"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-gray-100 rounded  md:hover:text-yellow-300   {{ Request::is('/announcement') ? ' border-b-2 border-yellow-300' : '' }}">Announcements</a>
                    </li>
                    <li>
                        <a href="{{ route('aboutus') }}"
                            class="border-b-2 border-yellow-300 block py-2 pl-3 pr-4 text-gray-100  md:hover:text-yellow-300   {{ Request::is('/aboutus') ? ' border-b-2 border-yellow-300' : '' }}">About
                            Us</a>
                    </li>
                    <li>
                        <a href="{{ route('contactus') }}"
                            class="block py-2 pl-3 pr-4 text-gray-100 rounded  md:hover:text-yellow-300   {{ Request::is('/contactus') ? ' border-b-2 border-yellow-300' : '' }}">Contact Us</a>
                    </li>
                    @if (!in_array(request()->path(), ['teacher.login.view', 'student.login.view']))
                        <li>
                            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                                class="font-semibold flex items-center justify-between w-full py-2 pl-3 pr-4 text-gray-100 hover:text-yellow-300 md:w-auto ">Login
                                <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg></button>
                            <!-- Dropdown menu -->
                            <div id="dropdownNavbar"
                                class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-400"
                                    aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <a href="/teacher/login" class="block px-4 py-2 hover:bg-gray-100 "> <i
                                                class="fa-solid fa-chalkboard-user px-2 "></i> Teacher</a>
                                    </li>
                                    <li class="flex hover:bg-gray-100 ">
                                        <img src="{{ asset('images/student.png') }}" class="ml-6 mt-2 w-5 h-5">
                                        <a href="/student/login" class="block px-2 py-2 ">Student</a>
                                    </li>
                    @endif
                </ul>

            </div>
            </li>



            </ul>
        </div>
        </div>
    </nav>
    <section class="mt-8 pb-4 pt-8 flex items-center bg-stone-50 xl:h-screen font-poppins dark:bg-gray-800 ">
        <div class="justify-center flex-1 max-w-6xl py-4 mx-auto lg:py-6 md:px-6">
            <div class="flex flex-wrap items-center ">
                <div class="w-full px-4 mb-10 lg:w-1/2 lg:mb-0">
                    <div class="lg:max-w-md">
                        <span class="text-2xl font-semibold text-blue-600 uppercase dark:text-blue-500">
                            About Us</span>
                        <h2 class="mt-4 mb-6 text-2xl font-bold dark:text-gray-300">
                            Vision Statement</h2>
                        <p class="mb-10 text-gray-600 dark:text-gray-400 ">
                            Brightsparks Multiple Intelligence School, Inc. is an educational institution that
                            puts emphasis on Christian character and leadership alongside academic excellence;
                            ultimately training the next generation to love God and love others.</p>

                            <h2 class="mt-4 mb-6 text-2xl font-bold dark:text-gray-300">
                                Mission Statement</h2>
                            <p class="mb-10 text-gray-600 dark:text-gray-400 ">
                                Brightsparks Multiple Intelligence School, Inc. exists to teach Biblical reasoning,
application, and self-governance by putting the Word of God at the heart of every
subject.</p>
                    </div>
                </div>
                <div class=" mt-8 pt-8 w-full px-4 mb-10 lg:w-1/2 lg:mb-0">
                    <span class=" text-2xl  font-semibold text-blue-600 uppercase dark:text-blue-500">
                        Our Core Values</span>
                    <div class="flex mb-4 mt-4">
                        <span
                            class="flex items-center justify-center flex-shrink-0 w-12 h-12 mr-6 bg-blue-500 rounded dark:bg-blue-500 dark:text-gray-100 text-gray-50">
                         
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M347.1 215.4c11.7-32.6 45.4-126.9 45.4-157.1 0-26.6-15.7-48.9-43.7-48.9-44.6 0-84.6 131.7-97.1 163.1C242 144 196.6 0 156.6 0c-31.1 0-45.7 22.9-45.7 51.7 0 35.3 34.2 126.8 46.6 162-6.3-2.3-13.1-4.3-20-4.3-23.4 0-48.3 29.1-48.3 52.6 0 8.9 4.9 21.4 8 29.7-36.9 10-51.1 34.6-51.1 71.7C46 435.6 114.4 512 210.6 512c118 0 191.4-88.6 191.4-202.9 0-43.1-6.9-82-54.9-93.7zM311.7 108c4-12.3 21.1-64.3 37.1-64.3 8.6 0 10.9 8.9 10.9 16 0 19.1-38.6 124.6-47.1 148l-34-6 33.1-93.7zM142.3 48.3c0-11.9 14.5-45.7 46.3 47.1l34.6 100.3c-15.6-1.3-27.7-3-35.4 1.4-10.9-28.8-45.5-119.7-45.5-148.8zM140 244c29.3 0 67.1 94.6 67.1 107.4 0 5.1-4.9 11.4-10.6 11.4-20.9 0-76.9-76.9-76.9-97.7.1-7.7 12.7-21.1 20.4-21.1zm184.3 186.3c-29.1 32-66.3 48.6-109.7 48.6-59.4 0-106.3-32.6-128.9-88.3-17.1-43.4 3.8-68.3 20.6-68.3 11.4 0 54.3 60.3 54.3 73.1 0 4.9-7.7 8.3-11.7 8.3-16.1 0-22.4-15.5-51.1-51.4-29.7 29.7 20.5 86.9 58.3 86.9 26.1 0 43.1-24.2 38-42 3.7 0 8.3.3 11.7-.6 1.1 27.1 9.1 59.4 41.7 61.7 0-.9 2-7.1 2-7.4 0-17.4-10.6-32.6-10.6-50.3 0-28.3 21.7-55.7 43.7-71.7 8-6 17.7-9.7 27.1-13.1 9.7-3.7 20-8 27.4-15.4-1.1-11.2-5.7-21.1-16.9-21.1-27.7 0-120.6 4-120.6-39.7 0-6.7.1-13.1 17.4-13.1 32.3 0 114.3 8 138.3 29.1 18.1 16.1 24.3 113.2-31 174.7zm-98.6-126c9.7 3.1 19.7 4 29.7 6-7.4 5.4-14 12-20.3 19.1-2.8-8.5-6.2-16.8-9.4-25.1z"/></svg>
                        </span>
                        <div>
                            <h2 class="mb-4 text-xl font-bold leading-tight dark:text-gray-300 md:text-2xl">
                                Christian Character
                            </h2>
                            <p class="text-base leading-loose text-gray-500 dark:text-gray-400">
                                Christian character begins with the love for God. It is further nurtured through the
curriculum, which incorporates models of great character. One important virtue that
the school desires to instill among its pupils is Christian self-governance, the ability to
govern oneself under Biblical values.
                            </p>
                        </div>
                    </div>
                    <div class="flex mb-4">
                        <span
                            class="flex items-center justify-center flex-shrink-0 w-12 h-12 mr-6 bg-blue-500 rounded dark:bg-blue-500 dark:text-gray-100 text-gray-50">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M72 88a56 56 0 1 1 112 0A56 56 0 1 1 72 88zM64 245.7C54 256.9 48 271.8 48 288s6 31.1 16 42.3V245.7zm144.4-49.3C178.7 222.7 160 261.2 160 304c0 34.3 12 65.8 32 90.5V416c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V389.2C26.2 371.2 0 332.7 0 288c0-61.9 50.1-112 112-112h32c24 0 46.2 7.5 64.4 20.3zM448 416V394.5c20-24.7 32-56.2 32-90.5c0-42.8-18.7-81.3-48.4-107.7C449.8 183.5 472 176 496 176h32c61.9 0 112 50.1 112 112c0 44.7-26.2 83.2-64 101.2V416c0 17.7-14.3 32-32 32H480c-17.7 0-32-14.3-32-32zm8-328a56 56 0 1 1 112 0A56 56 0 1 1 456 88zM576 245.7v84.7c10-11.3 16-26.1 16-42.3s-6-31.1-16-42.3zM320 32a64 64 0 1 1 0 128 64 64 0 1 1 0-128zM240 304c0 16.2 6 31 16 42.3V261.7c-10 11.3-16 26.1-16 42.3zm144-42.3v84.7c10-11.3 16-26.1 16-42.3s-6-31.1-16-42.3zM448 304c0 44.7-26.2 83.2-64 101.2V448c0 17.7-14.3 32-32 32H288c-17.7 0-32-14.3-32-32V405.2c-37.8-18-64-56.5-64-101.2c0-61.9 50.1-112 112-112h32c61.9 0 112 50.1 112 112z"/></svg>
                        </span>
                        <div>
                            <h2 class="mb-4 text-xl font-bold leading-tight dark:text-gray-300 md:text-2xl">
                                Leadership
                            </h2>
                            <p class="text-base leading-loose text-gray-500 dark:text-gray-400">
                                Leadership is following Christ’s example and leading others to follow. It is serving
others and putting their needs before one’s own. Students are taught to think beyond
themselves and to extend their vision to include the community, the nation and the
world.
                            </p>
                        </div>
                    </div>
                    <div class="flex mb-4">
                        <span
                            class="flex items-center justify-center flex-shrink-0 w-12 h-12 mr-6 bg-blue-500 rounded dark:bg-blue-500 dark:text-gray-100 text-gray-50">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M160 96a96 96 0 1 1 192 0A96 96 0 1 1 160 96zm80 152V512l-48.4-24.2c-20.9-10.4-43.5-17-66.8-19.3l-96-9.6C12.5 457.2 0 443.5 0 427V224c0-17.7 14.3-32 32-32H62.3c63.6 0 125.6 19.6 177.7 56zm32 264V248c52.1-36.4 114.1-56 177.7-56H480c17.7 0 32 14.3 32 32V427c0 16.4-12.5 30.2-28.8 31.8l-96 9.6c-23.2 2.3-45.9 8.9-66.8 19.3L272 512z"/></svg>
                        </span>
                        <div>
                            <h2 class="mb-4 text-xl font-bold leading-tight dark:text-gray-300 md:text-2xl">
                                Academic Excellence
                            </h2>
                            <p class="text-base leading-loose text-gray-500 dark:text-gray-400">
                                Academic excellence starts with the love for learning. Students aren’t only fed
                                information, but encouraged to be genuinely curious and to use their learning in
                                everyday application. We encourage students to become great thinkers who will
                                contribute to the betterment of the society.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
        <div class="w-full">
            <x-footer />
        </div>



</body>


</html>
