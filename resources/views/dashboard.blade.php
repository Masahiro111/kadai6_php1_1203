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
                    {{ __("You're logged in!") }}
                    <br>
                    <a
                       class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg"
                       href="{{ route('survey.create') }}">Create a Survey</a>

                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1></h1>
                    <ul>
                        @foreach ($surveys as $survey)
                        <li>
                            <div>
                                <small>{{ $survey->created_at }}</small>
                                <h4> {{ $survey->title }} </h4>
                                <p>{{ $survey->description }}</p>
                                <a
                                   class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg"
                                   href="{{ route('survey.show', $survey) }}">Edit</a>
                            </div>
                            <div>
                                <div>Share Link</div>
                                <a
                                   href="{{ $survey->publicUrl() }}">{{ $survey->publicUrl() }}</a>
                            </div>
                        </li>

                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>