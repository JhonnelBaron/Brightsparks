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
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-gray-100 rounded  md:hover:text-yellow-300   {{ Request::is('/aboutus') ? ' border-b-2 border-yellow-300' : '' }}">About
                            Us</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-gray-100 rounded  md:hover:text-yellow-300   {{ Request::is('/contactu') ? ' border-b-2 border-yellow-300' : '' }}">Contact Us</a>
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

<div class="mt-8 pt-4">
    <div id="default-carousel" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-82 overflow-hidden md:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://scontent.fmnl8-2.fna.fbcdn.net/v/t39.30808-6/286460806_5479879122033030_5614018350097062078_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=52f669&_nc_eui2=AeFNwj6r69C7bqfQjnxYi-zi3-RzziSMyBDf5HPOJIzIENv5NcysdCi60XvAEIVRYugEinE-eCJWASbwaLfq6CGM&_nc_ohc=zhLtHw6ClcAAX_g31ud&_nc_zt=23&_nc_ht=scontent.fmnl8-2.fna&oh=00_AfA5MKKrCJyKYzsusFCyCNf8pOhjZhrWtRuL3mpXStfJSw&oe=6526928F"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://scontent.fmnl8-3.fna.fbcdn.net/v/t1.6435-9/79862515_2838399732847662_259083113173352448_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=0bb214&_nc_eui2=AeHqYny-pediJ2-xhisV6EVIB4PWBdL5tGQHg9YF0vm0ZED5DWXt78jJ6BLezWO-Ou3-yv-4ZBLmoLdLPjqtCU4C&_nc_ohc=CHxRQO_NW00AX9FbWtR&_nc_ht=scontent.fmnl8-3.fna&oh=00_AfAQy0nMfBDci9wQKiGLu3AUb8rlBYrcPxM2PiKkGN_EAQ&oe=65485DBE"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('images/sample3.jpg') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('images/sample4.jpg') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('images/sample5.jpg') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                data-carousel-slide-to="4"></button>
        </div>
        <!-- Slider controls -->
        <button type="button"
            class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
</div>

    <!-- Text Header -->
    <header class="w-full container mx-auto">
        <div class="flex flex-col items-center py-12">
            <a class="font-bold text-blue-900 uppercase  text-5xl" href="#">
                Announcements and Advisories
            </a>
        </div>
    </header>




    <div class="container mx-auto flex flex-wrap py-6">

        <!-- Posts Section -->
        <section class="w-full md:w-2/3 flex flex-col items-center px-3">

            <article class="flex flex-col shadow my-4">
                <!-- Article Image -->
                <a href="#" class="hover:opacity-75">
                    <img src="https://scontent.fmnl8-1.fna.fbcdn.net/v/t39.30808-6/370413921_719838036823835_400586698225941978_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=49d041&_nc_eui2=AeHDPrRk3Lf3udnG2NU1fYRt_7_3PH92GCT_v_c8f3YYJPtPV2x52vJgwyxQLkWWJoiUXBYjerxu4voYHIBFAtGc&_nc_ohc=xzyo4075RCwAX_lpnTn&_nc_zt=23&_nc_ht=scontent.fmnl8-1.fna&oh=00_AfC0tJOnKEFStuDJAJeB0SlZiYfPXwBbRUedeN0czE9H7A&oe=65260A26">
                </a>
                <div class="bg-white flex flex-col justify-start p-6">
                    <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4">Hiring</a>
                    <a href="#" class="text-3xl font-bold hover:text-gray-700 pb-4">Pre School Teacher</a>
                    <p href="#" class="text-sm pb-3">

                        October 25, 2023
                    </p>
                    <a href="#" class="pb-6">We are looking for a Preschool Major who has a heart for children and can facilitate meaningful learning experiences among preschoolers. 
                        Kindly email us your updated resume at admin@brightsparksph.com or visit us at the 
                        Victory Bulacan Complex, 8004 Sumapang Matanda, McArthur Highway, City of Malolos, Bulacan. 
                        Thank you, and we look forward to working with you!</a>
                    <a href="#" class="uppercase text-gray-800 hover:text-black">Continue Reading <i
                            class="fas fa-arrow-right"></i></a>
                </div>
            </article>

            <article class="flex flex-col shadow my-4">
                <!-- Article Image -->
                <a href="#" class="hover:opacity-75">
                    <img src="https://scontent.fmnl8-3.fna.fbcdn.net/v/t39.30808-6/367675112_711157414358564_7964408478554930475_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=49d041&_nc_eui2=AeG10NlgugtCGnk5SuTawzHHByZmCiTcR1sHJmYKJNxHW_I69WCRT7dhH0QR4VmeEyWEM126ZZtPsk9IVQrZnDAW&_nc_ohc=WucYgC1bxhwAX_NHf_9&_nc_zt=23&_nc_ht=scontent.fmnl8-3.fna&oh=00_AfCqAH4Ebf4zAalFCRObrIC_Kzi1HWIjG4veZyfYhjid7A&oe=6526D61F">
                </a>
                <div class="bg-white flex flex-col justify-start p-6">
                    <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4">Announcement</a>
                    <a href="#" class="text-3xl font-bold hover:text-gray-700 pb-4">STUDENTS ORIENTATION</a>
                    <p href="#" class="text-sm pb-3">
                        October 20, 2023
                    </p>
                    <a href="#" class="pb-6">Kindly take note of the following reminders:

                        1. Please follow your regular class schedule.
                        2. Wear your complete school uniform.
                        3. Bring your school materials for inspection.
                        4. Bring your own food and snacks (as our cafeteria is not yet open)
                        
                        NOTE:
                        To all Online Students: As previously emailed by the admin, you have a separate online orientation tomorrow. Please check the prior email.
                        
                        To all Homeschoolers: Your Student Orientation will be during your first Campus Day on Friday.</a>
                    <a href="#" class="uppercase text-gray-800 hover:text-black">Continue Reading <i
                            class="fas fa-arrow-right"></i></a>
                </div>
            </article>

            <article class="flex flex-col shadow my-4">
                <!-- Article Image -->
                <a href="#" class="hover:opacity-75">
                    <img src="https://scontent.fmnl8-1.fna.fbcdn.net/v/t39.30808-6/366374762_707722261368746_2078633909162928408_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=49d041&_nc_eui2=AeHssfPI3ky6ss5sPapPdcqH_EgX7YbtFrz8SBfthu0WvGo-m2eqNkbDJl2V202yZ6UnrgICFseb5bSQXQs8iUF3&_nc_ohc=kl-kPrRVTB4AX9fIfHY&_nc_zt=23&_nc_ht=scontent.fmnl8-1.fna&oh=00_AfBDP-Ro31yRej9aV26b7gr0rfh3UrGi_JFl2nlV_BFALA&oe=65269E83">
                </a>
                <div class="bg-white flex flex-col justify-start p-6">
                    <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4">Announcement</a>
                    <a href="#" class="text-3xl font-bold hover:text-gray-700 pb-4">Opening of Classes</a>
                    <p href="#" class="text-sm pb-3">
                        October 19, 2023
                    </p>
                    <a href="#" class="pb-6">We are excited for the opening of classes for the School Year 2023-2024! In line with this, kindly take note of our schedule next week:

                        AUGUST 14<br>
                        10:00-12:00 General Parents' Orientation (for both regular and homeschool parents)<br>
                        1:00-3:00 Homeschool Parents' Training and Orientation
                        </a>
                    <a href="#" class="uppercase text-gray-800 hover:text-black">Continue Reading <i
                            class="fas fa-arrow-right"></i></a>
                </div>
            </article>

            <!-- Pagination -->
            <div class="flex items-center py-8">
                <a href="#"
                    class="h-10 w-10 bg-blue-800 hover:bg-blue-600 font-semibold text-white text-sm flex items-center justify-center">1</a>
                <a href="#"
                    class="h-10 w-10 font-semibold text-gray-800 hover:bg-blue-600 hover:text-white text-sm flex items-center justify-center">2</a>
                <a href="#"
                    class="h-10 w-10 font-semibold text-gray-800 hover:text-gray-900 text-sm flex items-center justify-center ml-3">Next
                    <i class="fas fa-arrow-right ml-2"></i></a>
            </div>

        </section>

        <!-- Sidebar Section -->
        <aside class="w-full md:w-1/3 flex flex-col items-center px-3">

            <div class="w-full bg-white shadow flex flex-col my-4 p-6">
                <p class="text-xl font-semibold pb-5">About Us</p>
                <p class="pb-2">Brightsparks Multiple Intelligence School, Inc. is an educational institution that
                    puts emphasis on Christian character and leadership alongside academic excellence; ultimately
                    training the next generation to love God and love others. Brightsparks Multiple Intelligence School,
                    Inc. exists to teach Biblical reasoning, application, and self-governance by putting the Word of God
                    at the heart of every subject.</p>
                <a href="#"
                    class="w-full bg-blue-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-4">
                    Get to know us
                </a>
            </div>

            <div class="w-full bg-white shadow flex flex-col my-4 p-6">
                <p class="text-xl font-semibold pb-5">Media Gallery</p>
                <div class="grid grid-cols-3 gap-3">
                    <img class="hover:opacity-75" src="https://scontent.fmnl8-1.fna.fbcdn.net/v/t39.30808-6/351493338_268022212566620_4744053399186652987_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=49d041&_nc_eui2=AeEO-cuXDl_OY4HEmDmbUfmIbZ7yzZ8Vl4ltnvLNnxWXiXLyo3QVQ8AF0IAkaWZaCHSGhr4NMoKQijo7dpXO6oad&_nc_ohc=ShSuVzEl-JkAX8Bgy-d&_nc_zt=23&_nc_ht=scontent.fmnl8-1.fna&oh=00_AfBQUSfup5zVB8cBZDIPtlf_rDybnAdqYzKNVQ16Z6__bQ&oe=6526CBB8">
                    <img class="hover:opacity-75" src="https://scontent.fmnl8-3.fna.fbcdn.net/v/t39.30808-6/351462316_804891181153983_3290338608646200213_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=49d041&_nc_eui2=AeEmO1eavSUhlZ6gmAZqB3hoKn5EvCdzs74qfkS8J3OzvrDfwkuxilDxP_mS1k4BGZNJHW2PQIfsR0hSPINk2yQK&_nc_ohc=UEa2yIv1w6IAX_YKGbq&_nc_zt=23&_nc_ht=scontent.fmnl8-3.fna&oh=00_AfCUuBYF74jX9jf2Ni1f4CPXoEqZo3vZCgTROhuqF26Z_A&oe=6526F0D2">
                    <img class="hover:opacity-75" src="https://scontent.fmnl8-2.fna.fbcdn.net/v/t39.30808-6/352035863_209910531917277_8024075949646891078_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=49d041&_nc_eui2=AeGjwJIj0jszwGKJnkPBGHHu5UIfgX_0GEHlQh-Bf_QYQXueNjjyKqqZlWa3W2cV7vUBTTaPlJSOqMMYgcOxoKw0&_nc_ohc=qmRLGFAjYwMAX-C7uPZ&_nc_zt=23&_nc_ht=scontent.fmnl8-2.fna&oh=00_AfCMycAIjsb142keFk1FkIWUNHq1NJ8EpJxBy7FYrJJW5w&oe=652537FE">
                    <img class="hover:opacity-75" src="https://scontent.fmnl8-3.fna.fbcdn.net/v/t39.30808-6/352375548_1275567196385801_8965258033474101462_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=49d041&_nc_eui2=AeHK8PCcBDX8QRj7AAL0VEdEG4P6JokgcB4bg_omiSBwHi-IWXILfZw-kJFnVxaw5UFSUS9_7RtqdTa2cKsdHDU8&_nc_ohc=8SByIBPZ94wAX_bF29a&_nc_zt=23&_nc_ht=scontent.fmnl8-3.fna&oh=00_AfBaX97h8Wy2yrGTSatK5IR2W2GLivnwW5B0PnqsgQIi_w&oe=6526C4CC">
                    <img class="hover:opacity-75" src="https://scontent.fmnl8-2.fna.fbcdn.net/v/t39.30808-6/351510527_806338964173611_3790335518210276304_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=49d041&_nc_eui2=AeHu4M5Y_aQZdyrwSQ11p2VAgKaHXt_h34uApode3-Hfi9CxQbFA0OxaDQ-prI09lUBDl2emTi5BmF3g5PfJL0hq&_nc_ohc=mrFYLXpHxtgAX9ewDCv&_nc_zt=23&_nc_ht=scontent.fmnl8-2.fna&oh=00_AfANHh4gPjHVCZCoWT-0b7M5srWk3gewE-T2I-lx1xxluA&oe=6525F7A9">
                    <img class="hover:opacity-75" src="https://scontent.fmnl8-3.fna.fbcdn.net/v/t39.30808-6/352363466_983397982689500_426803149469300659_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=49d041&_nc_eui2=AeFfObs9W3DxNn7TtWEr2qCW0RSJW0KNhOfRFIlbQo2E5_nKfRRfpWfVG5oXqKEGKWtfWlEDcPvmxiUqf6DNtkeC&_nc_ohc=SoHxcJBBAV8AX_4eECJ&_nc_zt=23&_nc_ht=scontent.fmnl8-3.fna&oh=00_AfDNhUjsg_05NejslZCDwY076_wWBsKUCS2BZZu1U04RoA&oe=652564E1">
                    <img class="hover:opacity-75" src="https://scontent.fmnl8-2.fna.fbcdn.net/v/t39.30808-6/351491439_2530748563751198_2907915908088907246_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=49d041&_nc_eui2=AeHDdV3CdzSpoMUjKJhMBouavq9sR1XhqWO-r2xHVeGpY2gyN86n1DuzdekhMPFvlSqYGp2xm-Unz1usDzF1i3Fe&_nc_ohc=6Ij-6hOFOf8AX9bzGaw&_nc_zt=23&_nc_ht=scontent.fmnl8-2.fna&oh=00_AfCtqQIXt4fY5Usuld1ZttIu4wPbb-NnHnRaQ7gVDyzHmA&oe=6525E836">
                    <img class="hover:opacity-75" src="https://scontent.fmnl8-1.fna.fbcdn.net/v/t39.30808-6/352323528_1196716244350502_6394182408387446788_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=49d041&_nc_eui2=AeEJ8y_WG93qT7Fs7cLaQj0xWHU3Ed0NzeBYdTcR3Q3N4NZrp5ArilzqFmw6ero_bajfOD2VVnifxVjqHFrymFQJ&_nc_ohc=e_SkyAKVf7wAX_7aOW3&_nc_zt=23&_nc_ht=scontent.fmnl8-1.fna&oh=00_AfAyDPpEIvcgVBmyrFtXZ8UlsXVGfd3zHQutvfr8ztIUXg&oe=652536B8">
                    <img class="hover:opacity-75" src="https://scontent.fmnl8-3.fna.fbcdn.net/v/t39.30808-6/352374948_1515410165654549_8912041838191668616_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=49d041&_nc_eui2=AeFFl2jryvIQal-yw-WCUl3mm7nsMfco8HObuewx9yjwc704qYd-nBkyJ57nIS9q6KR6JtnhPNRn8fOfBPbLaYxH&_nc_ohc=Mf9DcPdRDVkAX9dbMcV&_nc_zt=23&_nc_ht=scontent.fmnl8-3.fna&oh=00_AfC2wJglsBrnNqOygokArU3CVlXj8EIfzEZIHe-haBZtIg&oe=65269BE9">
                </div>
                <a href="https://facebook.com/BrightSparksPH/?_rdc=1&_rdr" target="_blank"
                    class="w-full bg-blue-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-6">
                    <i class="fab fa-instagram mr-2"></i> Follow @BrightSparks
                </a>
            </div>

        </aside>

        <div class="w-full">
            <x-footer />
        </div>



</body>


</html>
