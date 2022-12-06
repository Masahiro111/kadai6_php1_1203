<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{ route('survey.store') }}" method="POST">
                    @csrf
                    <div class="p-6 text-gray-900">
                        <p>{{ __("Page Survey") }}</p>
                        <div class="bg-white flex flex-col md:mr-auto w-full md:py-8 mt-8 md:mt-0">
                            <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Feedback</h2>
                            <p class="leading-relaxed mb-5 text-gray-600">Post-ironic portland shabby chic echo park, banjo fashion axe</p>
                            <div class="relative mb-4">
                                <label for="title" class="leading-7 text-sm text-gray-600">Title</label>
                                <input type="text" id="title" name="title" value="{{ old('title') }}" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                @error('title')
                                <small class="text-red-500">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="relative mb-4">
                                <label for="description" class="leading-7 text-sm text-gray-600">Description</label>
                                <textarea id="description" name="description" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out">{{ old('description') }}</textarea>
                                @error('description')
                                <small class="text-red-500">{{ $message }}</small>
                                @enderror
                            </div>
                            <button
                                    type="submit"
                                    class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
                            <p class="text-xs text-gray-500 mt-3">Chicharrones blog helvetica normcore iceland tousled brook viral artisan.</p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>