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
                    {{ $survey }}

                    {{ $survey->questions }}

                    @foreach ($survey->questions as $question)
                    <hr>
                    {{ $question->question }}<br>
                    {{ $question->answers }}<br>
                    @endforeach

                    <a
                       class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg"
                       href="{{ route('question.create', $survey) }}">Create Question</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>