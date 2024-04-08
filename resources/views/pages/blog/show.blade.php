<x-layout>

    <!-- blog post page. source: https://flowbite.com/blocks/marketing/blog/   -->

    <!-- 
Install the "flowbite-typography" NPM package to apply styles and format the article content: 

URL: https://flowbite.com/docs/components/typography/ 
-->

    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <div class="mb-4 lg:mb-6 not-format">
                    <address class="flex items-center mb-6 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                            <img class="mr-4 w-16 h-16 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Jese Leos">
                            <div>
                                <a href="#" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">David Gardner</a>
                                <p class="text-base text-gray-500 dark:text-gray-400">CEO DevOps Consulting</p>
                                <p class="text-base text-gray-500 dark:text-gray-400"><time pubdate datetime="2024-04-08" title="April 8th, 2024">April 8, 2024</time></p>
                            </div>
                        </div>
                    </address>
                    <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">{{ $blogpost->title }}</h1>
                </div>
                <div>
                    <p>{{ $blogpost->content }}</p>
                </div>

            </article>
        </div>
    </main>


</x-layout>