<div>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <section class="p-6 dark:bg-gray-800 dark:text-gray-50">
        <form wire:submit.prevent="submit" novalidate="" action=""
            class=" w-auto lg:w-[50rem] container flex-col mx-auto space-y-12 ng-untouched ng-pristine ng-valid">
            <fieldset class="grid grid-cols-4 gap-6 p-6 rounded-md shadow-sm dark:bg-gray-900">
                <div class="space-y-2 col-span-full lg:col-span-1">
                    <p class="font-medium">{{ $pages[$currentPage]['heading'] }}</p>
                    <p class="text-xs">{{ $pages[$currentPage]['subheading'] }}
                    </p>
                </div>
                <div class="grid grid-cols-1 gap-4 col-span-full lg:col-span-3">
                    {{-- failed message --}}
                    @if ($errors->isNotEmpty())
                    <div class="col-span-full sm:col-span-3 text-sm bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4"
                        role="alert">
                        <strong class="font-bold">Oops!</strong>
                        <span class="block sm:inline">There are some errors with your submission.</span>
                    </div>
                    @endif
                    {{-- success message --}}
                    @if ($success)
                    <div class="col-span-full sm:col-span-3 text-sm bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4"
                        role="alert">
                        <span class="block sm:inline">succes </span>
                        <span wire:click="resetSuccess" class="absolute top-0 bottom-0 right-0 px-4 py-3">
                            <svg class="fill-current h-6 w-6 text-green-500" role="button"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <title>Close</title>
                                <path
                                    d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                            </svg>
                        </span>
                    </div>
                    @endif
                    {{-- --}}

                    @if ($currentPage === 1)
                    <div class="col-span-full sm:col-span-3">
                        <label for="firstName" class="text-sm">First name</label>
                        <input wire:model.lazy="firstName" id="firstName" type="text" placeholder="First name"
                            class="w-full rounded-md focus:ring focus:ring-opacity-75 focus:ring-violet-400 dark:border-gray-700 dark:text-gray-900">
                        @error('firstName')<span class="text-xs text-red-500 mt-1">{{ $message }}</span>@enderror
                    </div>

                    <div class="col-span-full sm:col-span-3">
                        <label for="lastName" class="text-sm">Last name</label>
                        <input wire:model.lazy="lastName" id="lastName" type="text" placeholder="Last name"
                            class="w-full rounded-md focus:ring focus:ring-opacity-75 focus:ring-violet-400 dark:border-gray-700 dark:text-gray-900">
                        @error('lastName')<span class="text-xs text-red-500 mt-1">{{ $message }}</span>@enderror

                    </div>
                    <div class="col-span-full sm:col-span-3">
                        <label for="email" class="text-sm">Email</label>
                        <input wire:model.lazy="email" id="email" type="email" placeholder="Email"
                            class="w-full rounded-md focus:ring focus:ring-opacity-75 focus:ring-violet-400 dark:border-gray-700 dark:text-gray-900">
                        @error('email')<span class="text-xs text-red-500 mt-1">{{ $message }}</span>@enderror
                    </div>



                    <div class="flex py-3">

                        <div class="px-4">
                            <input wire:model="trainerType" id="default-radio-1" type="radio" value="student"
                                name="default-radio"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-radio-1"
                                class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Student</label>
                        </div>

                        <div class="px-4">
                            <input wire:model="trainerType" id="default-radio-2" type="radio" value="graduated"
                                name="default-radio"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-radio-2"
                                class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Graduated</label>
                        </div>

                    </div>

                    @if($trainerType == "student")
                    <div class="col-span-full sm:col-span-3">
                        <label for="firstName1" class="text-sm">First name1</label>
                        <input wire:model.lazy="firstName1" id="firstName1" type="text" placeholder="First name1"
                            class="w-full rounded-md focus:ring focus:ring-opacity-75 focus:ring-violet-400 dark:border-gray-700 dark:text-gray-900">
                        @error('firstName1')<span class="text-xs text-red-500 mt-1">{{ $message }}</span>@enderror
                    </div>
                    @elseif($trainerType == "graduated")
                    @endif



                    @elseif ($currentPage === 2)
                    <div class="col-span-full sm:col-span-3">
                        <label for="password" class="text-sm">Password</label>
                        <input wire:model.lazy="password" id="password" type="password" placeholder="password"
                            class="w-full rounded-md focus:ring focus:ring-opacity-75 focus:ring-violet-400 dark:border-gray-700 dark:text-gray-900">
                        @error('password')<span class="text-xs text-red-500 mt-1">{{ $message }}</span>@enderror
                    </div>
                    <div class="col-span-full sm:col-span-3">
                        <label for="confirmPassword" class="text-sm">Confirm Password</label>
                        <input wire:model.lazy="confirmPassword" id="confirmPassword" type="password"
                            placeholder="confirmPassword"
                            class="w-full rounded-md focus:ring focus:ring-opacity-75 focus:ring-violet-400 dark:border-gray-700 dark:text-gray-900">
                        @error('confirmPassword')<span class="text-xs text-red-500 mt-1">{{ $message }}</span>@enderror

                    </div>
                    @endif


                    <div class=" flex items-center justify-between px-4 py-5 text-right sm:px-6">
                        @if ($currentPage === 1)
                        <div></div>

                        @else
                        <button wire:click="goToPreviousPage" type="button"
                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-400 hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400">
                            Back
                        </button>
                        @endif

                        @if ($currentPage === count($pages))
                        <button type="submit"
                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Submit
                        </button>
                        @else
                        <button wire:click="goToNextPage" type="button"
                            class="inline-flex justify-center py-2 px-3 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Next

                        </button>
                        @endif
                    </div>
                </div>
</div>

</fieldset>

</form>
</section>
</div>