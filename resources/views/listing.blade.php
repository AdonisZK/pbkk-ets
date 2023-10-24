<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Listing') }}
        </h2>
    </x-slot>


    <div class="container w-full mx-auto flex flex-col sm:flex-row flex-wrap justify-center pt-5 mt-5">
        <div class="w-full max-w-md p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
            <div class="flex items-center justify-between mb-4">
                <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Your Listing</h5>
            </div>
            @foreach ($forms as $form)
            <div class="flow-root ">
                <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                    <li class="py-3 sm:py-4">
                        <div class="flex items-center space-x-4">
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    {{ $form->title }}
                                </p>
                                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                    {{ $form->topic }}
                                </p>
                            </div>
                            <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <a href="{{ route('form.edit', $form->id) }}">Edit</a>
                            </button>
                            <form action="{{ route('form.destroy', $form->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-red dark:hover:bg-red-700 dark:focus:ring-red-800">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
            @endforeach
        </div>
    </div>

</x-app-layout>