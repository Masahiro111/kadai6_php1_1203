<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('question.store', $survey) }}" method="POST">

                        @csrf
                        <div class="p-6 text-gray-900">
                            <p>{{ __("Page Survey") }}</p>
                            <div class="bg-white flex flex-col md:mr-auto w-full md:py-8 mt-8 md:mt-0">
                                <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">質問</h2>

                                <div class="relative mb-4">
                                    <label for="question" class="leading-7 text-sm text-gray-600">質問</label>
                                    <input
                                           type="text"
                                           id="question"
                                           name="question[question]"
                                           value="{{ old('question.question') }}"
                                           class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    @error('question.question')
                                    <small class="text-red-500">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="relative mb-4">
                                    <label for="answer" class="leading-7 text-sm text-gray-600">答え</label>
                                    <input type="text" id="answer" name="answers[][answer]" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    @error('answers.0.answer')
                                    <small class="text-red-500">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="relative mb-4">
                                    <label for="answer" class="leading-7 text-sm text-gray-600">答え</label>
                                    <input type="text" id="answer" name="answers[][answer]" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    @error('answers.1.answer')
                                    <small class="text-red-500">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="relative mb-4">
                                    <label for="answer" class="leading-7 text-sm text-gray-600">答え</label>
                                    <input type="text" id="answer" name="answers[][answer]" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    @error('answers.2.answer')
                                    <small class="text-red-500">{{ $message }}</small>
                                    @enderror
                                </div>

                                <button
                                        type="submit"
                                        class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Add Question</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>