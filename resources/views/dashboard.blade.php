<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>

    </div>

    <div class="container mx-auto px-5 flex flex-col sm:flex-row flex-wrap justify-center">
        @foreach ($forms as $form)
        <div class="max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700 mx-5 my-5">
            <div class="flex justify-between">
                <h5 class="mb-4 text-xl font-medium text-gray-500 dark:text-gray-400 float-left">Category: {{ $form->category }}</h5>
            </div>
            <div class="flex items-baseline text-gray-900 dark:text-white">
                <span class="text-5xl font-extrabold tracking-tight">{{ $form->title }}</span>
            </div>
            <div class="max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700 mx-5 my-5 flex justify-center items-center">
                <img src="{{ $form->image }}" alt="{{ $form->title }}">
            </div>
            <ul role="list" class="space-y-5 my-7">
                <li class="flex space-x-3 items-center">
                    <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">{{ $form->description }}</span>
                </li>
            </ul>
            <div class="flex justify-between">
                <h5 class="mb text-lg font-medium text-gray-500 dark:text-gray-400 float-left">Minus: {{ $form->condition }}</h5>
            </div>
            <div class="flex justify-between">
                <h5 class="mb text-lg font-medium text-gray-500 dark:text-gray-400 float-left">Minus: {{ $form->minus }}</h5>
            </div>
            <div class="flex justify-between">
                <h5 class="mb-4 text-lg font-medium text-gray-500 dark:text-gray-400 float-left">Stock: {{ $form->quantity }}</h5>
            </div>
            <div class="flex flex-col text-right">
                <div class="mb text-md font-medium text-gray-500 dark:text-gray-400 ">{{ $form->created_at }}</div>
                <div class="mb-4 text-md font-medium text-gray-500 dark:text-gray-400 ">{{ $form->user->name }}</div>

            </div>
            <button type="button" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-200 dark:focus:ring-blue-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">Choose plan</button>

        </div>
        @endforeach
    </div>

</x-app-layout>