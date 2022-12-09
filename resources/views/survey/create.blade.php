<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('新規アンケートの追加') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{ route('survey.store') }}" method="POST">
                    @csrf
                    <div class="p-6 text-gray-900">
                        <p>新規アンケートの追加</p>
                        <div class="bg-white flex flex-col md:mr-auto w-full md:py-8 mt-8 md:mt-0">

                            <div class="relative mb-4">
                                <label for="company" class="block text-sm font-medium text-gray-700">アンケートの題名</label>
                                <div class="mt-1">
                                    <input
                                           type="text"
                                           id="title"
                                           name="title"
                                           value="{{ old('title') }}"
                                           autocomplete="organization"
                                           class="block w-full rounded-md border-gray-300 py-3 px-4 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                    @error('title')
                                    <small class="text-red-500">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="relative mb-4">
                                <label for="description" class="block text-sm font-medium text-gray-700">アンケート概要</label>
                                <div class="mt-1">
                                    <textarea
                                              id="description"
                                              name="description"
                                              rows="4"
                                              class="block w-full resize-none rounded-md border-gray-300 py-3 px-4 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">{{ old('description') }}</textarea>
                                </div>
                                @error('description')
                                <small class="text-red-500">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="sm:col-span-2">
                                <button
                                        type="submit"
                                        class="inline-flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">アンケートを追加</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>