<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

<!-- This is an example component -->
<div>
    <nav class="bg-white border-b border-gray-200 fixed z-30 w-full">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start">
                    <button id="toggleSidebarMobile" aria-expanded="true" aria-controls="sidebar"
                            class="lg:hidden mr-2 text-gray-600 hover:text-gray-900 cursor-pointer p-2 hover:bg-gray-100 focus:bg-gray-100 focus:ring-2 focus:ring-gray-100 rounded">
                        <svg id="toggleSidebarMobileHamburger" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <svg id="toggleSidebarMobileClose" class="w-6 h-6 hidden" fill="currentColor"
                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                  clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <a href="#" class="text-xl font-bold flex items-center lg:ml-2.5">
                        <img src="https://demo.themesberg.com/windster/images/logo.svg" class="h-6 mr-2"
                             alt="Windster Logo">
                        <span class="self-center whitespace-nowrap">


                           @auth

                                <div>

                                   Welcome , {{ auth()->user()->name }}

                               </div>

                            @endauth


                        </span>



                        <span class="self-center whitespace-nowrap">


                           @auth

                                <div>
                                    <br>

                                  Last login , {{ Carbon\Carbon::parse(auth()->user()->last_login_at)->diffForHumans() }}

                               </div>

                            @endauth


                        </span>

{{--                        <div>--}}

{{--                        {{ Carbon\Carbon::parse(auth()->user()->last_login_at)->diffForHumans() }}--}}

{{--                        </div>--}}



                    </a>
                    <form action="#" method="GET" class="hidden lg:block lg:pl-32">
                        <label for="topbar-search" class="sr-only">Search</label>
                        <div class="mt-1 relative lg:w-64">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                          clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input type="text" name="email" id="topbar-search"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full pl-10 p-2.5"
                                   placeholder="Search">
                        </div>
                    </form>

                </div>

                <ul>
                    <li>
                        <form method="POST" action="{{ route('logout') }}" class="mt-2">
                            @csrf
                            <button type="submit"
                                    class="font-bold w-full mx-auto  border-2 rounded-xl px-4 py-2 hover:bg-teal-500">
                                Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>

    </nav>
    <div class="flex overflow-hidden bg-white pt-16">
        <aside id="sidebar"
               class="fixed hidden z-20 h-full top-0 left-0 pt-16 flex lg:flex flex-shrink-0 flex-col w-64 transition-width duration-75"
               aria-label="Sidebar">
            <div class="relative flex-1 flex flex-col min-h-0 border-r border-gray-200 bg-white pt-0">
                <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
                    <div class="flex-1 px-3 bg-white divide-y space-y-1">
                        <ul class="space-y-2 pb-2">
                            <li>
                                <form action="#" method="GET" class="lg:hidden">
                                    <label for="mobile-search" class="sr-only">Search</label>
                                    <div class="relative">
                                        <div
                                            class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                                            </svg>
                                        </div>
                                        <input type="text" name="email" id="mobile-search"
                                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-600 focus:ring-cyan-600 block w-full pl-10 p-2.5"
                                               placeholder="Search">
                                    </div>
                                </form>
                            </li>
                            <li>
                                <a href="{{ route('main') }}"
                                   class="text-base text-gray-900 font-normal rounded-lg flex items-center p-2 hover:bg-gray-100 group">
                                    <svg class="w-6 h-6 text-gray-500 group-hover:text-gray-900 transition duration-75"
                                         fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                        <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                                    </svg>
                                    <span class="ml-3">Dashboard</span>
                                </a>
                            </li>
                            <li>
{{--                                <a href=""--}}
{{--                                   class="text-base text-gray-900 font-normal rounded-lg flex items-center p-2 hover:bg-gray-100 group">--}}
{{--                                    <svg class="w-6 h-6 text-gray-500 group-hover:text-gray-900 transition duration-75"--}}
{{--                                         fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>--}}
{{--                                        <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>--}}
{{--                                    </svg>--}}
{{--                                    <span class="ml-3">Users</span>--}}
{{--                                </a>--}}
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

        </aside>
        <div class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10" id="sidebarBackdrop"></div>
        <div id="main-content" class="h-full w-full bg-gray-50 relative overflow-y-auto lg:ml-64">
            <main>
                <div class="pt-6 px-4">
                    <div class="w-full grid grid-cols-1 xl:grid-cols-2 2xl:grid-cols-3 gap-4">
                        <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8  2xl:col-span-2">
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex-shrink-0">
                                    <span
                                        class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">$45,385</span>
                                    <h3 class="text-base font-normal text-gray-500">Sales this week</h3>
                                </div>
                                <div class="flex items-center justify-end flex-1 text-green-500 text-base font-bold">
                                    12.5%
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                              d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="main-chart"></div>
                        </div>
                        <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
                            <div class="mb-4 flex items-center justify-between">
                                <div>
                                    <h3 class="text-xl font-bold text-gray-900 mb-2">Latest Transactions</h3>
                                    <span class="text-base font-normal text-gray-500">This is a list of latest transactions</span>
                                </div>
                                <div class="flex-shrink-0">
                                    <a href="#"
                                       class="text-sm font-medium text-cyan-600 hover:bg-gray-100 rounded-lg p-2">View
                                        all</a>
                                </div>
                            </div>
                            <div class="flex flex-col mt-8">
                                <div class="overflow-x-auto rounded-lg">
                                    <div class="align-middle inline-block min-w-full">
                                        <div class="shadow overflow-hidden sm:rounded-lg">
                                            <table class="min-w-full divide-y divide-gray-200">
                                                <thead class="bg-gray-50">
                                                <tr>
                                                    <th scope="col"
                                                        class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Transaction
                                                    </th>
                                                    <th scope="col"
                                                        class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Date & Time
                                                    </th>
                                                    <th scope="col"
                                                        class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Amount
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody class="bg-white">
                                                <tr>
                                                    <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                                                        Payment from <span class="font-semibold">Bonnie Green</span>
                                                    </td>
                                                    <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                                                        Apr 23 ,2021
                                                    </td>
                                                    <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                                        $2300
                                                    </td>
                                                </tr>
                                                <tr class="bg-gray-50">
                                                    <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900 rounded-lg rounded-left">
                                                        Payment refund to <span class="font-semibold">#00910</span>
                                                    </td>
                                                    <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                                                        Apr 23 ,2021
                                                    </td>
                                                    <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                                        -$670
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                                                        Payment failed from <span class="font-semibold">#087651</span>
                                                    </td>
                                                    <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                                                        Apr 18 ,2021
                                                    </td>
                                                    <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                                        $234
                                                    </td>
                                                </tr>
                                                <tr class="bg-gray-50">
                                                    <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900 rounded-lg rounded-left">
                                                        Payment from <span class="font-semibold">Lana Byrd</span>
                                                    </td>
                                                    <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                                                        Apr 15 ,2021
                                                    </td>
                                                    <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                                        $5000
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                                                        Payment from <span class="font-semibold">Jese Leos</span>
                                                    </td>
                                                    <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                                                        Apr 15 ,2021
                                                    </td>
                                                    <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                                        $2300
                                                    </td>
                                                </tr>
                                                <tr class="bg-gray-50">
                                                    <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900 rounded-lg rounded-left">
                                                        Payment from <span class="font-semibold">THEMESBERG LLC</span>
                                                    </td>
                                                    <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                                                        Apr 11 ,2021
                                                    </td>
                                                    <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                                        $560
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                                                        Payment from <span class="font-semibold">Lana Lysle</span>
                                                    </td>
                                                    <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                                                        Apr 6 ,2021
                                                    </td>
                                                    <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                                        $1437
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


            <div class="mt-4 w-full grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
                        <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">2,340</span>
                                    <h3 class="text-base font-normal text-gray-500">New products this week</h3>
                                </div>
                                <div
                                    class="ml-5 w-0 flex items-center justify-end flex-1 text-green-500 text-base font-bold">
                                    14.6%
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                              d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">5,355</span>
                                    <h3 class="text-base font-normal text-gray-500">Visitors this week</h3>
                                </div>
                                <div
                                    class="ml-5 w-0 flex items-center justify-end flex-1 text-green-500 text-base font-bold">
                                    32.9%
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                              d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">385</span>
                                    <h3 class="text-base font-normal text-gray-500">User signups this week</h3>
                                </div>
                                <div
                                    class="ml-5 w-0 flex items-center justify-end flex-1 text-red-500 text-base font-bold">
                                    -2.7%
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                              d="M14.707 12.293a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l2.293-2.293a1 1 0 011.414 0z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 2xl:grid-cols-2 xl:gap-4 my-4">
                        <div class="bg-white shadow rounded-lg mb-4 p-4 sm:p-6 h-full">
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-xl font-bold leading-none text-gray-900">Customers Count</h3>
                                <a href="{{ route('show') }}"
                                   class="text-sm font-medium text-cyan-600 hover:bg-gray-100 rounded-lg inline-flex items-center p-2">
                                    View all
                                </a>
                            </div>
{{--                            <div class="flow-root">--}}
{{--                                <ul role="list" class="divide-y divide-gray-200">--}}
{{--                                    <li class="py-3 sm:py-4">--}}
{{--                                        <div class="flex items-center space-x-4">--}}
{{--                                            <div class="flex-shrink-0">--}}
{{--                                                <img class="h-8 w-8 rounded-full"--}}
{{--                                                     src="https://demo.themesberg.com/windster/images/users/neil-sims.png"--}}
{{--                                                     alt="Neil image">--}}
{{--                                            </div>--}}
{{--                                            <div class="flex-1 min-w-0">--}}
{{--                                                <p class="text-sm font-medium text-gray-900 truncate">--}}
{{--                                                    Neil Sims--}}
{{--                                                </p>--}}
{{--                                                <p class="text-sm text-gray-500 truncate">--}}
{{--                                                    <a href="/cdn-cgi/l/email-protection" class="__cf_email__"--}}
{{--                                                       data-cfemail="17727a767e7b57607e7973646372653974787a">[email&#160;protected]</a>--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                            <div class="inline-flex items-center text-base font-semibold text-gray-900">--}}
{{--                                                $320--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li class="py-3 sm:py-4">--}}
{{--                                        <div class="flex items-center space-x-4">--}}
{{--                                            <div class="flex-shrink-0">--}}
{{--                                                <img class="h-8 w-8 rounded-full"--}}
{{--                                                     src="https://demo.themesberg.com/windster/images/users/bonnie-green.png"--}}
{{--                                                     alt="Neil image">--}}
{{--                                            </div>--}}
{{--                                            <div class="flex-1 min-w-0">--}}
{{--                                                <p class="text-sm font-medium text-gray-900 truncate">--}}
{{--                                                    Bonnie Green--}}
{{--                                                </p>--}}
{{--                                                <p class="text-sm text-gray-500 truncate">--}}
{{--                                                    <a href="/cdn-cgi/l/email-protection" class="__cf_email__"--}}
{{--                                                       data-cfemail="d4b1b9b5bdb894a3bdbab0a7a0b1a6fab7bbb9">[email&#160;protected]</a>--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                            <div class="inline-flex items-center text-base font-semibold text-gray-900">--}}
{{--                                                $3467--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li class="py-3 sm:py-4">--}}
{{--                                        <div class="flex items-center space-x-4">--}}
{{--                                            <div class="flex-shrink-0">--}}
{{--                                                <img class="h-8 w-8 rounded-full"--}}
{{--                                                     src="https://demo.themesberg.com/windster/images/users/michael-gough.png"--}}
{{--                                                     alt="Neil image">--}}
{{--                                            </div>--}}
{{--                                            <div class="flex-1 min-w-0">--}}
{{--                                                <p class="text-sm font-medium text-gray-900 truncate">--}}
{{--                                                    Michael Gough--}}
{{--                                                </p>--}}
{{--                                                <p class="text-sm text-gray-500 truncate">--}}
{{--                                                    <a href="/cdn-cgi/l/email-protection" class="__cf_email__"--}}
{{--                                                       data-cfemail="57323a363e3b17203e3933242332257934383a">[email&#160;protected]</a>--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                            <div class="inline-flex items-center text-base font-semibold text-gray-900">--}}
{{--                                                $67--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li class="py-3 sm:py-4">--}}
{{--                                        <div class="flex items-center space-x-4">--}}
{{--                                            <div class="flex-shrink-0">--}}
{{--                                                <img class="h-8 w-8 rounded-full"--}}
{{--                                                     src="https://demo.themesberg.com/windster/images/users/thomas-lean.png"--}}
{{--                                                     alt="Neil image">--}}
{{--                                            </div>--}}
{{--                                            <div class="flex-1 min-w-0">--}}
{{--                                                <p class="text-sm font-medium text-gray-900 truncate">--}}
{{--                                                    Thomes Lean--}}
{{--                                                </p>--}}
{{--                                                <p class="text-sm text-gray-500 truncate">--}}
{{--                                                    <a href="/cdn-cgi/l/email-protection" class="__cf_email__"--}}
{{--                                                       data-cfemail="284d45494144685f41464c5b5c4d5a064b4745">[email&#160;protected]</a>--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                            <div class="inline-flex items-center text-base font-semibold text-gray-900">--}}
{{--                                                $2367--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li class="pt-3 sm:pt-4 pb-0">--}}
{{--                                        <div class="flex items-center space-x-4">--}}
{{--                                            <div class="flex-shrink-0">--}}
{{--                                                <img class="h-8 w-8 rounded-full"--}}
{{--                                                     src="https://demo.themesberg.com/windster/images/users/lana-byrd.png"--}}
{{--                                                     alt="Neil image">--}}
{{--                                            </div>--}}
{{--                                            <div class="flex-1 min-w-0">--}}
{{--                                                <p class="text-sm font-medium text-gray-900 truncate">--}}
{{--                                                    Lana Byrd--}}
{{--                                                </p>--}}
{{--                                                <p class="text-sm text-gray-500 truncate">--}}
{{--                                                    <a href="/cdn-cgi/l/email-protection" class="__cf_email__"--}}
{{--                                                       data-cfemail="a2c7cfc3cbcee2d5cbccc6d1d6c7d08cc1cdcf">[email&#160;protected]</a>--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                            <div class="inline-flex items-center text-base font-semibold text-gray-900">--}}
{{--                                                $367--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
                            <h3 class="text-xl leading-none font-bold text-gray-900 mb-10">Acquisition Overview</h3>
                            <div class="block w-full overflow-x-auto">
                                <table class="items-center w-full bg-transparent border-collapse">
                                    <thead>
                                    <tr>
                                        <th class="px-4 bg-gray-50 text-gray-700 align-middle py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0 whitespace-nowrap">
                                            Top Channels
                                        </th>
                                        <th class="px-4 bg-gray-50 text-gray-700 align-middle py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0 whitespace-nowrap">
                                            Users
                                        </th>
                                        <th class="px-4 bg-gray-50 text-gray-700 align-middle py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0 whitespace-nowrap min-w-140-px"></th>
                                    </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-100">
                                    <tr class="text-gray-500">
                                        <th class="border-t-0 px-4 align-middle text-sm font-normal whitespace-nowrap p-4 text-left">
                                            Organic Search
                                        </th>
                                        <td class="border-t-0 px-4 align-middle text-xs font-medium text-gray-900 whitespace-nowrap p-4">
                                            5,649
                                        </td>
                                        <td class="border-t-0 px-4 align-middle text-xs whitespace-nowrap p-4">
                                            <div class="flex items-center">
                                                <span class="mr-2 text-xs font-medium">30%</span>
                                                <div class="relative w-full">
                                                    <div class="w-full bg-gray-200 rounded-sm h-2">
                                                        <div class="bg-cyan-600 h-2 rounded-sm"
                                                             style="width: 30%"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="text-gray-500">
                                        <th class="border-t-0 px-4 align-middle text-sm font-normal whitespace-nowrap p-4 text-left">
                                            Referral
                                        </th>
                                        <td class="border-t-0 px-4 align-middle text-xs font-medium text-gray-900 whitespace-nowrap p-4">
                                            4,025
                                        </td>
                                        <td class="border-t-0 px-4 align-middle text-xs whitespace-nowrap p-4">
                                            <div class="flex items-center">
                                                <span class="mr-2 text-xs font-medium">24%</span>
                                                <div class="relative w-full">
                                                    <div class="w-full bg-gray-200 rounded-sm h-2">
                                                        <div class="bg-orange-300 h-2 rounded-sm"
                                                             style="width: 24%"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="text-gray-500">
                                        <th class="border-t-0 px-4 align-middle text-sm font-normal whitespace-nowrap p-4 text-left">
                                            Direct
                                        </th>
                                        <td class="border-t-0 px-4 align-middle text-xs font-medium text-gray-900 whitespace-nowrap p-4">
                                            3,105
                                        </td>
                                        <td class="border-t-0 px-4 align-middle text-xs whitespace-nowrap p-4">
                                            <div class="flex items-center">
                                                <span class="mr-2 text-xs font-medium">18%</span>
                                                <div class="relative w-full">
                                                    <div class="w-full bg-gray-200 rounded-sm h-2">
                                                        <div class="bg-teal-400 h-2 rounded-sm"
                                                             style="width: 18%"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="text-gray-500">
                                        <th class="border-t-0 px-4 align-middle text-sm font-normal whitespace-nowrap p-4 text-left">
                                            Social
                                        </th>
                                        <td class="border-t-0 px-4 align-middle text-xs font-medium text-gray-900 whitespace-nowrap p-4">
                                            1251
                                        </td>
                                        <td class="border-t-0 px-4 align-middle text-xs whitespace-nowrap p-4">
                                            <div class="flex items-center">
                                                <span class="mr-2 text-xs font-medium">12%</span>
                                                <div class="relative w-full">
                                                    <div class="w-full bg-gray-200 rounded-sm h-2">
                                                        <div class="bg-pink-600 h-2 rounded-sm"
                                                             style="width: 12%"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="text-gray-500">
                                        <th class="border-t-0 px-4 align-middle text-sm font-normal whitespace-nowrap p-4 text-left">
                                            Other
                                        </th>
                                        <td class="border-t-0 px-4 align-middle text-xs font-medium text-gray-900 whitespace-nowrap p-4">
                                            734
                                        </td>
                                        <td class="border-t-0 px-4 align-middle text-xs whitespace-nowrap p-4">
                                            <div class="flex items-center">
                                                <span class="mr-2 text-xs font-medium">9%</span>
                                                <div class="relative w-full">
                                                    <div class="w-full bg-gray-200 rounded-sm h-2">
                                                        <div class="bg-indigo-600 h-2 rounded-sm"
                                                             style="width: 9%"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="text-gray-500">
                                        <th class="border-t-0 align-middle text-sm font-normal whitespace-nowrap p-4 pb-0 text-left">
                                            Email
                                        </th>
                                        <td class="border-t-0 align-middle text-xs font-medium text-gray-900 whitespace-nowrap p-4 pb-0">
                                            456
                                        </td>
                                        <td class="border-t-0 align-middle text-xs whitespace-nowrap p-4 pb-0">
                                            <div class="flex items-center">
                                                <span class="mr-2 text-xs font-medium">7%</span>
                                                <div class="relative w-full">
                                                    <div class="w-full bg-gray-200 rounded-sm h-2">
                                                        <div class="bg-purple-500 h-2 rounded-sm"
                                                             style="width: 7%"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </main>
            <footer
                class="bg-white md:flex md:items-center md:justify-between shadow rounded-lg p-4 md:p-6 xl:p-8 my-6 mx-4">

                <p class="text-center text-sm text-gray-500 my-10">
                    &copy; 2019-2021 <a href="#" class="hover:underline" target="_blank">Themesberg</a>. All rights
                    reserved.
                </p>

            </footer>
        </div>
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <script src="https://demo.themesberg.com/windster/app.bundle.js"></script>
    </div>

</div>
</body>
</html>
