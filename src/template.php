<?php
/**
 * HTML Template using TailwindCSS
 *
 * Filename:        template.php
 * Location:        public
 * Project:         XXX-SaaS-Vanilla-MVC-SN
 * Date Created:    2025-03-13
 *
 * Author:          Adrian Gould <Adrian.Gould@nmtafe.wa.edu.au>
 *
 */
?>

<main class="container mx-auto bg-gray-50 py-8 px-4 shadow shadow-black/25 rounded">
    <article>
        <header class="bg-gray-700 text-gray-200 -mx-4 -mt-8 p-8 text-2xl font-bold mb-8 rounded-t">
            <h1>Vanilla PHP MVC Demo</h1>
        </header>
        <section class="grid grid-cols-2 my-8 gap-4 ">

            <section class="w-full min-w-64 bg-white shadow rounded grid grid-cols-3">
                <header class=" bg-gray-700 text-gray-200 text-lg p-4 rounded-l col-span-1 ">
                    <h4 class="text-center flex flex-col gap-1">
                        <i class="fa fa-list-squares text-5xl text-gray-500"></i>
                        <span class="text-sm">Categories</span>
                    </h4>
                </header>
                <p class="col-span-2 text-3xl ml-6 my-auto text-center">
                    15
                </p>
            </section>
            <section class="w-full min-w-64 bg-white shadow rounded grid grid-cols-3">
                <header class=" bg-gray-700 text-gray-200 text-lg p-4 rounded-l col-span-1 ">
                <h4 class="text-center flex flex-col gap-1">
                    <i class="fa fa-user text-5xl text-gray-500"></i>
                    <span class="text-sm">Users</span>
                </h4>
                </header>
                <p class="col-span-2 text-3xl ml-6 my-auto text-center">
                    6
                </p>
            </section>

        </section>
        <section class="flex flex-wrap gap-8 justify-stretch">
            <!--            article>(header>h4{Name})+(section>p{Description})+(footer>p{Price})-->
            <article class="max-w-96 min-w-64 bg-white shadow rounded p-2 flex flex-col">
                <header class="-mx-2 bg-gray-700 text-gray-200 text-lg p-4 -mt-2 mb-4 rounded-t flex-0">
                    <h4>
                        German Shepherd
                    </h4>
                </header>
                <section class="flex-grow grid grid-cols-5">
                    <p class="ml-4 col-span-2">
                        <img class="w-24 h-24 " src="https://dummyimage.com/200x200/a1a1aa/fff&text=Image+Here"
                             alt="">
                    </p>
                    <p class="col-span-3 text-gray-600">
                        BrickHeadz theme: A BrickHeadz pet set featuring a cute German Shepherd and puppy, great for dog
                        lovers.
                    </p>
                </section>
                <footer class="-mx-2 bg-gray-200 text-gray-900 text-sm px-4 py-1 mt-4 -mb-2 rounded-b flex-0 grid grid-cols-2">
                    <p class="my-auto">Price: $19.99</p>
                    <a href="/products/40440"
                       class="block w-full text-center px-5 py-2.5 shadow-sm rounded border
                                  text-base font-medium text-gray-700 bg-gray-100 hover:bg-gray-200">
                        Details
                    </a>
                </footer>
            </article>
            <!--            article>(header>h4{Name})+(section>p{Description})+(footer>p{Price})-->
            <article class="max-w-96 min-w-64 bg-white shadow rounded p-2 flex flex-col">
                <header class="-mx-2 bg-gray-700 text-gray-200 text-lg p-4 -mt-2 mb-4 rounded-t flex-0">
                    <h4>
                        The Mandalorian & The Child BrickHeadz
                    </h4>
                </header>
                <section class="flex-grow grid grid-cols-5">
                    <p class="ml-4 col-span-2">
                        <img class="w-24 h-24 " src="https://dummyimage.com/200x200/a1a1aa/fff&text=Image+Here"
                             alt="">
                    </p>
                    <p class="col-span-3 text-gray-600">
                        Star Wars theme: A BrickHeadz double pack featuring The Mandalorian and The Child (Baby Yoda),
                        perfect for fans of the popular Star Wars series.
                    </p>
                </section>
                <footer class="-mx-2 bg-gray-200 text-gray-900 text-sm px-4 py-1 mt-4 -mb-2 rounded-b flex-0 grid grid-cols-2">
                    <p class="my-auto">Price: $29.99</p>
                    <a href="/products/75317"
                       class="block w-full text-center px-5 py-2.5 shadow-sm rounded border
                                  text-base font-medium text-gray-700 bg-gray-100 hover:bg-gray-200">
                        Details
                    </a>
                </footer>
            </article>
            <!--            article>(header>h4{Name})+(section>p{Description})+(footer>p{Price})-->
            <article class="max-w-96 min-w-64 bg-white shadow rounded p-2 flex flex-col">
                <header class="-mx-2 bg-gray-700 text-gray-200 text-lg p-4 -mt-2 mb-4 rounded-t flex-0">
                    <h4>
                        Sheep BrickHeadz
                    </h4>
                </header>
                <section class="flex-grow grid grid-cols-5">
                    <p class="ml-4 col-span-2">
                        <img class="w-24 h-24 " src="https://dummyimage.com/200x200/a1a1aa/fff&text=Image+Here"
                             alt="">
                    </p>
                    <p class="col-span-3 text-gray-600">
                        BrickHeadz theme: This set features an adorable sheep with a cute, blocky design, perfect for
                        collectors and fans of the BrickHeadz series.
                    </p>
                </section>
                <footer class="-mx-2 bg-gray-200 text-gray-900 text-sm px-4 py-1 mt-4 -mb-2 rounded-b flex-0 grid grid-cols-2">
                    <p class="my-auto">Price: $19.99</p>
                    <a href="/products/40380"
                       class="block w-full text-center px-5 py-2.5 shadow-sm rounded border
                                  text-base font-medium text-gray-700 bg-gray-100 hover:bg-gray-200">
                        Details
                    </a>
                </footer>
            </article>

        </section>

    </article>
</main>