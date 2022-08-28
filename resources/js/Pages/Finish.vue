
<template>
    <Head title="Welcome" />
    <div class="min-h-full">
        <nav class="bg-gray-800">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img class="h-20 w-20" src="https://prostatecanceruk.org/media/xekcug1t/prostate-20uk-20header-20logo.svg" alt="Workflow">
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                                <a href="#" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Predict</a>

                                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">View live scores</a>
                            </div>
                        </div>
                    </div>

                    <div class="-mr-2 flex md:hidden">
                        <!-- Mobile menu button -->
                        <button type="button" class="bg-gray-800 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <!--
                              Heroicon name: outline/menu

                              Menu open: "hidden", Menu closed: "block"
                            -->
                            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                            <!--
                              Heroicon name: outline/x

                              Menu open: "block", Menu closed: "hidden"
                            -->
                            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="md:hidden" id="mobile-menu">
                <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">Predict</a>

                    <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">View Live Scores</a>

                </div>
            </div>
        </nav>

        <header class="bg-white shadow-sm">
            <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
                <h1 class="text-lg leading-6 font-semibold text-gray-900">The Great Disc Golf Race</h1>
            </div>
        </header>
        <div class="relative bg-white overflow-hidden">
            <div class="max-w-7xl mx-auto">
                <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">


                    <div>
                        <div class="relative pt-6 px-4 sm:px-6 lg:px-8">

                        </div>

                        <!--
                          Mobile menu, show/hide based on menu open state.

                          Entering: "duration-150 ease-out"
                            From: "opacity-0 scale-95"
                            To: "opacity-100 scale-100"
                          Leaving: "duration-100 ease-in"
                            From: "opacity-100 scale-100"
                            To: "opacity-0 scale-95"
                        -->
                        <div class="absolute z-10 top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">

                        </div>
                    </div>

                    <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                        <div class="sm:text-center lg:text-left">
                            <h1 class="text-4xl tracking-tight font-bold text-gray-900 sm:text-5xl md:text-6xl">
                                <span class="block xl:inline">Harry, Noah, Adam, Shane and Jamie take on fundraising for </span>
                                <span class="block text-indigo-600 xl:inline">Prostate Cancer UK</span>
                            </h1>
                            <!--                            <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">100 Holes of Disc Golf. 5 Courses. Par 314. Total Distance: 9505m</p>-->
                            <!--                            <p class="mt-3">-->
                            <!--                                <ul>-->
                            <!--                                    <li>  1) Donate at least £5 to our <a href="https://www.justgiving.com/fundraising/great-discgolf-race">JustGiving Campaign</a> <br>-->
                            <!--                                    </li>-->
                            <!--                                    <li>   2) Predict below on each of the 5 categories-->
                            <!--                                    </li>-->
                            <!--                                    <li>   3) Correctly guessing closest will enter you into various draws to win EPIC prizes including vouchers, bags, hats, discs and much much more!-->
                            <!--                                    </li>-->
                            <!--                                </ul>-->
                            <!--                            </p>-->
                        </div>
                    </main>
                </div>
            </div>
            <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
                <img class="h-56 w-full object-contain sm:h-72 md:h-96 lg:w-full lg:h-full" src="https://images.jg-cdn.com/image/b4bdd305-d3ca-4d27-87d9-4063a789ede5.jpg?template=PagesUIFeatureImage" alt="">
            </div>
        </div>
        <main>
            <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
                <!-- Replace with your content -->
                <div class="px-4 py-4 sm:px-0">
                    <div class="border-4 border-dashed border-gray-200 rounded-lg h-85 p-3">
                        <h1 class="text-3xl tracking-tight font-bold text-gray-900 sm:text-4xl md:text-4xl"> <span class="block text-indigo-600 xl:inline">Thank you so much for your support!</span></h1>

                        <div class="bg-white shadow sm:rounded-lg">
                            <div class="px-4 py-5 sm:p-6">
                                <h3 class="text-lg leading-6 font-medium text-gray-900">If you want to be in with a chance of a prize if you are a winner or are drawn, please enter your name and email below</h3>
                                <div class="mt-2 max-w-xl text-sm text-gray-500">
                                    <p>If you chose to donate anonymously on GoFundMe, we will ask you to privately verify you have donated before 5pm on Friday 9th September</p>
                                    <p>Haven't donated yet? <a href="https://www.justgiving.com/fundraising/great-discgolf-race"> Please donate at least £5.00 before Friday 9th at 5pm to be included in the prize draw </a>, but feel free to predict anyway if you like! </p>
                                </div>
                                <form class="mt-5 sm:flex sm:items-center" action="/real-finish" method="get">
                                    <div class="w-full sm:max-w-xs">
                                        <input type="text" name="name" id="name" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="harry">
                                        <input type="email" name="email" id="email" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="harry@prostatecancer.sucks">
                                    </div>
                                    <button type="submit" class="mt-3 w-full inline-flex items-center justify-center px-4 py-2 border border-transparent shadow-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Finish!</button>
                                </form>
                            </div>
                        </div>


                    </div>
                </div>
                <!-- /End replace -->
            </div>
        </main>
    </div>

</template>
