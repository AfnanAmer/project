<script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
<section class="p-6 dark:bg-gray-800 dark:text-gray-50">
    <form novalidate="" action="" class="container flex flex-col mx-auto space-y-12 ng-untouched ng-pristine ng-valid">
        <fieldset class="grid grid-cols-4 gap-6 p-6 rounded-md shadow-sm dark:bg-gray-900">
            <div class="space-y-2 col-span-full lg:col-span-1">
                <p class="font-medium">Personal Inormation</p>
                <p class="text-xs">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci fuga autem eum!
                </p>
            </div>
            <div class="grid grid-cols-1 gap-4 col-span-full lg:col-span-3">
                {{-- failed message --}}
                <div class="col-span-full sm:col-span-3 text-sm bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4"
                    role="alert">
                    <strong class="font-bold">Oops!</strong>
                    <span class="block sm:inline">There are some errors with your submission.</span>
                </div>
                {{-- success message --}}
                <div class="col-span-full sm:col-span-3 text-sm bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <span class="block sm:inline">succes </span>
                    <span  class="absolute top-0 bottom-0 right-0 px-4 py-3">
                        <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                    </span>
                </div>
                {{--  --}}

                <div class="col-span-full sm:col-span-3">
                    <label for="firstname" class="text-sm">First name</label>
                    <input id="firstname" type="text" placeholder="First name"
                        class="w-full rounded-md focus:ring focus:ring-opacity-75 focus:ring-violet-400 dark:border-gray-700 dark:text-gray-900">
                        <span class="text-xs text-red-500 mt-1">message</span>
                </div>
                <div class="col-span-full sm:col-span-3">
                    <label for="lastname" class="text-sm">Last name</label>
                    <input id="lastname" type="text" placeholder="Last name"
                        class="w-full rounded-md focus:ring focus:ring-opacity-75 focus:ring-violet-400 dark:border-gray-700 dark:text-gray-900">
                        <span class="text-xs text-red-500 mt-1">message</span>
                        
                </div>
                <div class="col-span-full sm:col-span-3">
                    <label for="email" class="text-sm">Email</label>
                    <input id="email" type="email" placeholder="Email"
                        class="w-full rounded-md focus:ring focus:ring-opacity-75 focus:ring-violet-400 dark:border-gray-700 dark:text-gray-900">
                        <span class="text-xs text-red-500 mt-1">message</span> 

                </div>
                <div class="col-span-full sm:col-span-3">
                    <label for="password" class="text-sm">Password</label>
                    <input id="password" type="password" placeholder="password"
                        class="w-full rounded-md focus:ring focus:ring-opacity-75 focus:ring-violet-400 dark:border-gray-700 dark:text-gray-900">
                        <span class="text-xs text-red-500 mt-1">message</span> 
                </div>
                <div class="col-span-full sm:col-span-3">
                    <label for="conformpassword" class="text-sm">Conform Password</label>
                    <input id="conformpassword" type="password" placeholder="password"
                        class="w-full rounded-md focus:ring focus:ring-opacity-75 focus:ring-violet-400 dark:border-gray-700 dark:text-gray-900">
                        <span class="text-xs text-red-500 mt-1">message</span>

                </div>
                <div class="flex items-center justify-between px-4 py-3  text-right sm:px-6">
                    <button type="button"
                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-400 hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400">
                        Back
                    </button>
                    <button type="button"
                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-400 hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400">
                        Next
                    </button>
                    <button type="submit"
                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-400 hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400">
                        Submit
                    </button>
                </div>

            </div>
        </fieldset>

    </form>
</section>