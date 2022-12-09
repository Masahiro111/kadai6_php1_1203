<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

    </head>

    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
                @endauth
            </div>
            @endif


            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <section class="text-gray-600 body-font">
                    <h2 class="text-lg font-bold">アンケート作成アプリ 手順</h2>
                    <div class="container px-5 pt-12 pb-24 mx-auto flex flex-wrap">
                        <div class="flex relative pt-10 pb-20 sm:items-center md:w-2/3 mx-auto">
                            <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
                                <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                            </div>
                            <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-indigo-500 text-white relative z-10 title-font font-medium text-sm">1</div>
                            <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
                                <div class="flex-shrink-0 w-24 h-24 bg-indigo-100 text-indigo-500 rounded-full inline-flex items-center justify-center">
                                    {{-- <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-12 h-12" viewBox="0 0 24 24">
                                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                    </svg> --}}
                                </div>
                                <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                                    <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">ユーザー登録をする</h2>
                                    <p class="leading-relaxed">ユーザー登録してアンケートを作成できます。<a href="{{ route('register') }}" class="text-blue-700 underline font-bold">こちら</a> から登録してください。（ <a href="{{ route('login') }}" class="text-blue-700 underline font-bold">テストアカウントでログインできます</a> メールアドレス「test@example.com」、パスワード「password」でログインできます）</p>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="flex relative pb-20 sm:items-center md:w-2/3 mx-auto">
                            <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
                                <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                            </div>
                            <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-indigo-500 text-white relative z-10 title-font font-medium text-sm">2</div>
                            <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
                                <div class="flex-shrink-0 w-24 h-24 bg-indigo-100 text-indigo-500 rounded-full inline-flex items-center justify-center">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-12 h-12" viewBox="0 0 24 24">
                                        <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                                    </svg>
                                </div>
                                <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                                    <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">The Catalyzer</h2>
                                    <p class="leading-relaxed">VHS cornhole pop-up, try-hard 8-bit iceland helvetica. Kinfolk bespoke try-hard cliche palo santo offal.</p>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="flex relative pb-20 sm:items-center md:w-2/3 mx-auto">
                            <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
                                <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                            </div>
                            <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-indigo-500 text-white relative z-10 title-font font-medium text-sm">3</div>
                            <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
                                <div class="flex-shrink-0 w-24 h-24 bg-indigo-100 text-indigo-500 rounded-full inline-flex items-center justify-center">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-12 h-12" viewBox="0 0 24 24">
                                        <circle cx="12" cy="5" r="3"></circle>
                                        <path d="M12 22V8M5 12H2a10 10 0 0020 0h-3"></path>
                                    </svg>
                                </div>
                                <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                                    <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">The 400 Blows</h2>
                                    <p class="leading-relaxed">VHS cornhole pop-up, try-hard 8-bit iceland helvetica. Kinfolk bespoke try-hard cliche palo santo offal.</p>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="flex relative pb-10 sm:items-center md:w-2/3 mx-auto">
                            <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
                                <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                            </div>
                            <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-indigo-500 text-white relative z-10 title-font font-medium text-sm">4</div>
                            <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
                                <div class="flex-shrink-0 w-24 h-24 bg-indigo-100 text-indigo-500 rounded-full inline-flex items-center justify-center">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-12 h-12" viewBox="0 0 24 24">
                                        <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                </div>
                                <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                                    <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">Neptune</h2>
                                    <p class="leading-relaxed">VHS cornhole pop-up, try-hard 8-bit iceland helvetica. Kinfolk bespoke try-hard cliche palo santo offal.</p>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </section>
            </div>
        </div>
    </body>

</html>