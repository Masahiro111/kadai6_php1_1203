<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $survey->title }}
        </h2>
    </x-slot>

    <div class="pt-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="mx-auto max-w-7xl">

                        <div class="lg:flex lg:items-center lg:justify-between">
                            <div class="min-w-0 flex-1">
                                <h2 class="mt-2 text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">{{ $survey->title }}</h2>
                                <div class="mt-1 flex flex-col sm:mt-0 sm:flex-row sm:flex-wrap sm:space-x-6">
                                    <div class="mt-2 flex items-center text-sm text-gray-500">
                                        {{ $survey->description }}
                                        {{-- <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400" x-description="Heroicon name: mini/calendar" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z" clip-rule="evenodd"></path>
                                        </svg>
                                        {{ $survey->created_at }} --}}
                                    </div>
                                </div>
                            </div>
                            <div class="mt-5 flex lg:mt-0 lg:ml-4">

                                <span class="ml-3 hidden sm:block">
                                    <a
                                       href="{{ env('APP_URL') }}/survey/take/{{ $survey->id . '-' . $survey->title }}"
                                       class="inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                        <svg class="-ml-1 mr-2 h-5 w-5 text-gray-500" x-description="Heroicon name: mini/link" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path d="M12.232 4.232a2.5 2.5 0 013.536 3.536l-1.225 1.224a.75.75 0 001.061 1.06l1.224-1.224a4 4 0 00-5.656-5.656l-3 3a4 4 0 00.225 5.865.75.75 0 00.977-1.138 2.5 2.5 0 01-.142-3.667l3-3z"></path>
                                            <path d="M11.603 7.963a.75.75 0 00-.977 1.138 2.5 2.5 0 01.142 3.667l-3 3a2.5 2.5 0 01-3.536-3.536l1.225-1.224a.75.75 0 00-1.061-1.06l-1.224 1.224a4 4 0 105.656 5.656l3-3a4 4 0 00-.225-5.865z"></path>
                                        </svg>
                                        アンケートに答える
                                    </a>
                                </span>

                                <span class="sm:ml-3">
                                    <a
                                       href="{{ route('question.create', $survey) }}"
                                       class="inline-flex items-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                        <svg class="-ml-1 mr-2 h-5 w-5" x-description="Heroicon name: mini/check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd"></path>
                                        </svg>
                                        アンケート項目を追加
                                    </a>
                                </span>

                                <!-- Dropdown -->
                                <div x-data="Components.menu({ open: false })" x-init="init()" @keydown.escape.stop="open = false; focusButton()" @click.away="onClickAway($event)" class="relative ml-3 sm:hidden">
                                    <button type="button" class="inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2" id="mobile-menu-button" x-ref="button" @click="onButtonClick()" @keyup.space.prevent="onButtonEnter()" @keydown.enter.prevent="onButtonEnter()" aria-expanded="false" aria-haspopup="true" x-bind:aria-expanded="open.toString()" @keydown.arrow-up.prevent="onArrowUp()" @keydown.arrow-down.prevent="onArrowDown()">
                                        More
                                        <svg class="-mr-1 ml-2 h-5 w-5 text-gray-500" x-description="Heroicon name: mini/chevron-down" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd"></path>
                                        </svg>
                                    </button>


                                    <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 z-10 mt-2 -mr-1 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" x-ref="menu-items" x-description="Dropdown menu, show/hide based on menu state." x-bind:aria-activedescendant="activeDescendant" role="menu" aria-orientation="vertical" aria-labelledby="mobile-menu-button" tabindex="-1" @keydown.arrow-up.prevent="onArrowUp()" @keydown.arrow-down.prevent="onArrowDown()" @keydown.tab="open = false" @keydown.enter.prevent="open = false; focusButton()" @keyup.space.prevent="open = false; focusButton()" style="display: none;">
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700" x-state:on="Active" x-state:off="Not Active" :class="{ 'bg-gray-100': activeIndex === 0 }" role="menuitem" tabindex="-1" id="mobile-menu-item-0" @mouseenter="activeIndex = 0" @mouseleave="activeIndex = -1" @click="open = false; focusButton()">Edit</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700" :class="{ 'bg-gray-100': activeIndex === 1 }" role="menuitem" tabindex="-1" id="mobile-menu-item-1" @mouseenter="activeIndex = 1" @mouseleave="activeIndex = -1" @click="open = false; focusButton()">View</a>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>


    @foreach ($survey->questions as $question)
    <div class="mx-auto max-w-7xl py-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-none">
            <div class="overflow-hidden bg-white sm:rounded-lg sm:shadow">

                <div class="border-b border-gray-200 bg-white px-4 py-5 sm:px-6">
                    <div class="-ml-4 -mt-4 flex flex-wrap items-center justify-between sm:flex-nowrap">
                        <div class="ml-4 mt-4">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">{{ $question->question }} （{{ $question->responses->count() > 0 ? $question->responses->count() : '投票なし'}}）</h3>
                        </div>
                        <div class="ml-4 mt-4 flex-shrink-0">
                            <form action="{{ route('question.delete', [$survey,$question]) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button
                                        class="relative inline-flex items-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                                        type="submit">delete</button>
                            </form>
                        </div>
                    </div>
                </div>

                <ul role="list" class="divide-y divide-gray-200">
                    @foreach ($question->answers as $answer)
                    <li>
                        <div class="block hover:bg-indigo-50">
                            <div class="px-4 py-4 sm:px-6">
                                <div class="flex items-center justify-between">
                                    <div class="truncate text-sm font-bold text-indigo-600">
                                        {{ $answer->answer }}
                                        @if ($question->responses->count() > 0)
                                        <small>（ {{ intval($answer->responses->count() * 100 / $question->responses->count()) }}% ）</small>
                                        @endif
                                    </div>
                                    <div class="ml-2 flex flex-shrink-0">
                                        {{-- <span class="inline-flex rounded-full bg-green-100 px-2 text-xs font-semibold leading-5 text-green-800">Accepting</span> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>

            </div>
        </div>
    </div>
    @endforeach


</x-app-layout>