<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="pt-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1>{{ $survey->title }} <small>{{ $survey->created_at }}</small></h1>
                    <p>{{ $survey->description }}</p>
                    <a
                       class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg"
                       href="{{ route('question.create', $survey) }}">Create Question</a>
                </div>
            </div>
        </div>
    </div>

    @foreach ($survey->questions as $question)
    <div class="pt-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2>{{ $question->question }}</h2>
                    @if(sizeof($question->answers) == 0)
                    <div>設定なし</div>
                    @else
                    @foreach ($question->answers as $answer)
                    <p>{{ $answer->answer }}</p>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
    @endforeach

</x-app-layout>