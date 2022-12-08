<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="md:w-1/3 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3>Question : {{ $survey->title }}</h3>

                    <form action="/survey/take/{{ $survey->id . '-' . $survey->title }}" method="POST">
                        @csrf

                        <div class="bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
                            <div class="relative mb-4">
                                <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                                <input
                                       type="text"
                                       id="name"
                                       name="info[name]"
                                       class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                @error('info.name')
                                <small>{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="relative mb-4">
                                <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                                <input
                                       type="email"
                                       id="email"
                                       name="info[email]"
                                       class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                @error('info.email')
                                <small>{{ $message }}</small>
                                @enderror
                            </div>
                        </div>


                        @foreach ($survey->questions as $key => $question)
                        <div class="pt-12">
                            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                    <div class="p-6 text-gray-900">
                                        <h2>{{ ++$key }} : {{ $question->question }}</h2>

                                        @error('responses' . $key . 'answer_id')
                                        <small class="text-red-500">{{ $message }}</small>
                                        @enderror

                                        @if(sizeof($question->answers) == 0)
                                        <div>設定なし</div>
                                        @else
                                        @foreach ($question->answers as $answer)
                                        <p>
                                            <input
                                                   type="radio"
                                                   name="responses[{{ $key }}][answer_id]"
                                                   value="{{ $answer->id }}"
                                                   id="answer_{{ $answer->id }}"
                                                   {{ (old('responses.' . $key . '.answer_id' )==$answer->id) ? 'checked' : ''}}
                                            >
                                            {{ $answer->answer }}

                                            <input
                                                   type="hidden"
                                                   name="responses[{{ $key }}][question_id]"
                                                   value="{{ $question->id }}">
                                        </p>
                                        @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        <button type="submit">save</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>