<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('アンケート管理画面') }}
        </h2>
    </x-slot>

    <div class="mx-auto max-w-7xl py-12 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-none">
            <div class="overflow-hidden bg-white sm:rounded-lg sm:shadow">

                <div class="border-b border-gray-200 bg-white px-4 py-5 sm:px-6">
                    <div class="-ml-4 -mt-4 flex flex-wrap items-center justify-between sm:flex-nowrap">
                        <div class="ml-4 mt-4">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">アンケート一覧</h3>
                            {{-- <p class="mt-1 text-sm text-gray-500">アンケートの一覧をご覧いただけます。新規にアンケートを追加する場合は 「新規アンケート追加」 ボタンを押してください。</p> --}}
                        </div>
                        <div class="ml-4 mt-4 flex-shrink-0">
                            <a
                               href="{{ route('survey.create') }}"
                               class="relative inline-flex items-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">新規アンケート追加</a>
                        </div>
                    </div>
                </div>

                <ul role="list" class="divide-y divide-gray-200">

                    @foreach ($surveys as $survey)
                    <li>
                        <a href="{{ route('survey.show', $survey) }}" class="block hover:bg-indigo-50">
                            <div class="px-4 py-4 sm:px-6">
                                <div class="flex items-center justify-between">
                                    <div class="truncate text-sm font-bold text-indigo-600">
                                        {{ $survey->title }}<br>
                                    </div>
                                    <div class="ml-2 flex flex-shrink-0">
                                        <span class="inline-flex rounded-full bg-green-100 px-2 text-xs font-semibold leading-5 text-green-800">Accepting</span>
                                    </div>
                                </div>
                                <div>
                                    <small>{{ $survey->description }}</small>
                                </div>
                                <div class="mt-2 flex justify-between">
                                    <div class="sm:flex">
                                        <div class="flex items-center text-sm text-gray-500">
                                            <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                                            </svg>
                                            {{ $survey->created_at }}
                                        </div>
                                    </div>
                                    <div class="ml-2 flex items-center text-sm text-gray-500">
                                        <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400" x-description="Heroicon name: mini/map-pin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M9.69 18.933l.003.001C9.89 19.02 10 19 10 19s.11.02.308-.066l.002-.001.006-.003.018-.008a5.741 5.741 0 00.281-.14c.186-.096.446-.24.757-.433.62-.384 1.445-.966 2.274-1.765C15.302 14.988 17 12.493 17 9A7 7 0 103 9c0 3.492 1.698 5.988 3.355 7.584a13.731 13.731 0 002.273 1.765 11.842 11.842 0 00.976.544l.062.029.018.008.006.003zM10 11.25a2.25 2.25 0 100-4.5 2.25 2.25 0 000 4.5z" clip-rule="evenodd"></path>
                                        </svg>
                                        {{ $survey->publicUrl() }}
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    @endforeach

                </ul>
            </div>
        </div>
    </div>



</x-app-layout>