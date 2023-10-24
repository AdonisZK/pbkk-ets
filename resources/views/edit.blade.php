<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit') }}
        </h2>
    </x-slot>

    <div class="container mx-auto flex flex-col sm:flex-row flex-wrap justify-center pt-5">
        <form class="w-4/5 mt-5" method="post" action="{{ route('form.update', $form->id) }}">
            @csrf
            @method('PUT')
            <div class="relative z-0 w-full mb-6 group">
                <select name="category" id="floating_category" class="bg-transparent block py-2.5 px-0 w-full text-sm text-red-500 border-0 border-b-2 border-gray-300 appearance-none text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                <!-- Rest of the code -->
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <input type="text" name="title" id="floating_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required value="{{ old('title', $form->title) }}" />
                <label for="floating_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Title</label>
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <textarea name="description" id="floating_description" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required required>{{ old('description', $form->description) }}</textarea>
                <label for="floating_description" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Description</label>
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <input type="text" name="minus" id="floating_minus" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required value="{{ old('minus', $form->minus) }}" />
                <label for="floating_minus" class="peer-focus:font- medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Minus</label>
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <select name="condition" id="floating_condition" class="block bg-transparent py-2.5 px-0 w-full text-sm text-red-500 border-0 border-b-2 border-gray-300 appearance-none text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                    @foreach ($conditions as $condition)
                    <option value="{{ $condition->id }}">{{ $condition->name }}</option>
                    @endforeach
                </select>
                <!-- Rest of the code -->
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <input type="number" name="quantity" id="floating_quantity" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required value="{{ old('quantity', $form->quantity) }}" />
                <label for="floating_quantity" class="peer-focus:font- medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Quantity</label>
            </div>
            <div class="mb-6">
                <label for="image" class="block mb-2 text-sm font-medium text-gray-900">Image (PNG, JPG, JPEG)</label>
                <input type="file" id="image" name="image" class="@error('title') is-invalid @enderror shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="{{ old('image') }}">
                <!-- @error('image')
                <div class="text-red-500">PNG, JPG, JPEG, Max: 4MB</div>
                @enderror -->
            </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Update
            </button>
        </form>
    </div>

</x-app-layout>