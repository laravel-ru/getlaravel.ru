<header
    x-trap.inert.noscroll="navIsOpen"
    class="relative z-50 text-gray-700"
    @keydown.window.escape="navIsOpen = false"
    @click.away="navIsOpen = false"
>
    <div class="relative max-w-screen-2xl mx-auto w-full py-4 bg-white transition duration-200 lg:bg-transparent lg:py-6">
        <div class="max-w-screen-xl mx-auto px-5 flex items-center justify-between">
            <div class="flex-1">
                <a href="/" class="inline-flex items-center">
                    <img class="w-12" src="/img/logomark.min.svg" alt="Laravel" width="50" height="52">
                    <img class="ml-5 sm:block" src="/img/logotype.min.svg" alt="Laravel" width="114" height="29">
                </a>
            </div>
            <ul class="relative hidden lg:flex lg:items-center lg:justify-center lg:gap-6 xl:gap-10">
                <li><a href="https://forge.laravel.com">Forge</a></li>
                <li><a href="https://vapor.laravel.com">Vapor</a></li>
                <li x-data="{ expanded: false }" class="relative" @keydown.window.escape="expanded = false">
                    <button class="flex items-center justify-center" @click="expanded = !expanded">
                        Экосистема
                        <span class="ml-3 shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" :class="{ 'rotate-180': expanded }" class="h-4 w-4 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                        </span>
                    </button>
                    <div
                        x-show="expanded"
                        x-cloak
                        class="absolute left-28 z-20 transition transform -translate-x-1/2"
                        x-transition:enter="duration-250 ease-out"
                        x-transition:enter-start="opacity-0 -translate-y-8"
                        x-transition:enter-end="opacity-100"
                        x-transition:leave="duration-250 ease-in"
                        x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0 -translate-y-8"
                    >
                        <div
                            class="mt-4 w-224 p-8 bg-white shadow-lg transform transition-transform origin-top"
                            @click.away="expanded = false"
                        >
                            <ul class="grid gap-6 relative sm:grid-cols-2 md:grid-cols-3">
                                <li>
                                    <a href="/docs/{{DEFAULT_VERSION}}/starter-kits#laravel-breeze" class="flex">
                                        <div class="relative shrink-0 w-12 h-12 bg-breeze flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="/img/ecosystem/breeze.min.svg" alt="Icon" class="w-7 h-7" width="47" height="32">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Breeze</div>
                                            <span class="text-gray-700 text-xs">Легковесные основы для стартового комплекта для новых приложений с Blade или Inertia.</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/{{DEFAULT_VERSION}}/billing" class="flex">
                                        <div class="relative shrink-0 w-12 h-12 bg-cashier flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="/img/ecosystem/cashier.min.svg" alt="Icon" class="w-7 h-7" width="47" height="32">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Cashier</div>
                                            <span class="text-gray-700 text-xs">Избавьтесь от необходимости управлять подписками на Stripe или Paddle.</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/{{DEFAULT_VERSION}}/dusk" class="flex">
                                        <div class="relative shrink-0 w-12 h-12 bg-dusk flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="/img/ecosystem/dusk.min.svg" alt="Icon" class="w-7 h-7" width="45" height="44">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Dusk</div>
                                            <span class="text-gray-700 text-xs">Автоматическое тестирование браузера для уверенной отправки вашего приложения.</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/{{DEFAULT_VERSION}}/broadcasting" class="flex">
                                        <div class="relative shrink-0 w-12 h-12 bg-echo flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="/img/ecosystem/echo.min.svg" alt="Icon" class="w-7 h-7" width="48" height="48">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Echo</div>
                                            <span class="text-gray-700 text-xs">Слушайте события WebSocket, транслируемые вашим приложением Laravel.</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://envoyer.io" class="flex">
                                        <div class="relative shrink-0 w-12 h-12 bg-envoyer flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="/img/ecosystem/envoyer.min.svg" alt="Icon" class="w-7 h-7" width="41" height="50">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Envoyer</div>
                                            <span class="text-gray-700 text-xs">Развертывайте свои приложения Laravel клиентам без простоев.</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://forge.laravel.com" class="flex">
                                        <div class="relative shrink-0 w-12 h-12 bg-forge flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="/img/ecosystem/forge.min.svg" alt="Icon" class="w-7 h-7" width="41" height="32">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Forge</div>
                                            <span class="text-gray-700 text-xs">Управление сервером не должно быть кошмаром.</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/{{DEFAULT_VERSION}}/horizon" class="flex">
                                        <div class="relative shrink-0 w-12 h-12 bg-horizon flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="/img/ecosystem/horizon.min.svg" alt="Icon" class="w-7 h-7" width="48" height="48">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Horizon</div>
                                            <span class="text-gray-700 text-xs">Красивый пользовательский интерфейс для мониторинга очередей Laravel, управляемых Redis.</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://jetstream.laravel.com" class="flex">
                                        <div class="relative shrink-0 w-12 h-12 bg-jetstream flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="/img/ecosystem/jetstream.min.svg" alt="Icon" class="w-7 h-7" width="150" height="150">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Jetstream</div>
                                            <span class="text-gray-700 text-xs">Надежный стартовый комплект, включающий аутентификацию и управление командой.</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/{{DEFAULT_VERSION}}/mix" class="flex">
                                        <div class="relative shrink-0 w-12 h-12 bg-mix flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="/img/ecosystem/mix.min.svg" alt="Icon" class="w-7 h-7" width="48" height="44">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Mix</div>
                                            <span class="text-gray-700 text-xs">Скомпилируйте свой JavaScript и CSS с помощью Webpack без настройки.</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://nova.laravel.com/" class="flex">
                                        <div class="relative shrink-0 w-12 h-12 bg-nova flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="/img/ecosystem/nova.min.svg" alt="Icon" class="w-7 h-7" width="39" height="40">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Nova</div>
                                            <span class="text-gray-700 text-xs">Продуманно разработанная панель администрирования для ваших приложений Laravel.</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/{{DEFAULT_VERSION}}/octane" class="flex">
                                        <div class="relative shrink-0 w-12 h-12 bg-octane flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="/img/ecosystem/octane.min.svg" alt="Icon" class="w-7 h-7" width="32" height="33">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Octane</div>
                                            <span class="text-gray-700 text-xs">Повышайте производительность вашего приложения, сохраняя его в памяти.</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/{{DEFAULT_VERSION}}/sail" class="flex">
                                        <div class="relative shrink-0 w-12 h-12 bg-sail flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="/img/ecosystem/sail.min.svg" alt="Icon" class="w-7 h-7" width="48" height="48">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Sail</div>
                                        <span class="text-xs text-g7ay-600">Опыт локальной разработки Laravel вручную с использованием Docker.</span>
                                    </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/{{DEFAULT_VERSION}}/sanctum" class="flex">
                                        <div class="relative shrink-0 w-12 h-12 bg-sanctum flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="/img/ecosystem/sanctum.min.svg" alt="Laravel Sanctum logomark" class="w-7 h-7" width="48" height="48">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Sanctum</div>
                                            <span class="text-xs te7t-gray-600">Аутентификация API и мобильного приложения без желания рвать на себе волосы.</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/{{DEFAULT_VERSION}}/scout" class="flex">
                                        <div class="relative shrink-0 w-12 h-12 bg-scout flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="/img/ecosystem/scout.min.svg" alt="Icon" class="w-7 h-7" width="36" height="36">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Scout</div>
                                            <span class="text-gray-700 text-xs">Молниеносный полнотекстовый поиск моделей Eloquent вашего приложения.</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/{{DEFAULT_VERSION}}/socialite" class="flex">
                                        <div class="relative shrink-0 w-12 h-12 bg-socialite flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="/img/ecosystem/socialite.min.svg" alt="Icon" class="w-7 h-7" width="32" height="33">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Socialite</div>
                                            <span class="text-gray-700 text-xs">Социальная аутентификация через Facebook, Twitter, GitHub, LinkedIn и т. д.</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://spark.laravel.com" class="flex">
                                        <div class="relative shrink-0 w-12 h-12 bg-spark flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="/img/ecosystem/spark.min.svg" alt="Icon" class="w-7 h-7" width="48" height="48">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Spark</div>
                                            <span class="text-gray-700 text-xs">Начните свой следующий бизнес с помощью нашего полнофункционального платежного портала.</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/{{DEFAULT_VERSION}}/telescope" class="flex">
                                        <div class="relative shrink-0 w-12 h-12 bg-telescope flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="/img/ecosystem/telescope.min.svg" alt="Icon" class="w-7 h-7" width="42" height="43">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Telescope</div>
                                            <span class="text-gray-700 text-xs">Отлаживайте свое приложение с помощью нашего пользовательского интерфейса для отладки и анализа.</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/{{DEFAULT_VERSION}}/valet" class="flex">
                                        <div class="relative shrink-0 w-12 h-12 bg-valet flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="/img/ecosystem/valet.min.svg" alt="Icon" class="w-7 h-7" width="40" height="26">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Valet</div>
                                            <span class="text-gray-700 text-xs">Самая быстрая локальная разработка Laravel — исключительно для macOS.</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://vapor.laravel.com" class="flex">
                                        <div class="relative shrink-0 w-12 h-12 bg-vapor flex items-center justify-center rounded-lg overflow-hidden">
                                            <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,0)]"></span>
                                            <img src="/img/ecosystem/vapor.min.svg" alt="Icon" class="w-7 h-7" width="150" height="150">
                                        </div>
                                        <div class="ml-4 leading-5">
                                            <div class="text-gray-900">Vapor</div>
                                            <span class="text-gray-700 text-xs">Laravel Vapor — это бессерверная платформа для развертывания Laravel на базе AWS.</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li><a href="https://laravel-news.com">Новости</a></li>
                <li><a href="https://partners.laravel.com">Партнеры</a></li>
            </ul>
            <div class="flex-1 flex items-center justify-end">
                <button @click.prevent="$dispatch('toggle-search-modal')">
                    <svg class="w-6 h-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                </button>
                <x-button.secondary href="/docs" class="hidden lg:ml-4 lg:inline-flex">Документация</x-button.secondary>
                <button
                    class="ml-2 relative w-10 h-10 inline-flex items-center justify-center p-2 text-gray-700 lg:hidden"
                    aria-label="Toggle Menu"
                    @click.prevent="navIsOpen = !navIsOpen"
                >
                    <svg x-show="! navIsOpen" class="w-6" viewBox="0 0 28 12" fill="none" xmlns="http://www.w3.org/2000/svg"><line y1="1" x2="28" y2="1" stroke="currentColor" stroke-width="2"/><line y1="11" x2="28" y2="11" stroke="currentColor" stroke-width="2"/></svg>
                    <svg x-show="navIsOpen" x-cloak class="absolute inset-0 mt-2.5 ml-2.5 w-5" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg"><rect y="1.41406" width="2" height="24" transform="rotate(-45 0 1.41406)" fill="currentColor"/><rect width="2" height="24" transform="matrix(0.707107 0.707107 0.707107 -0.707107 0.192383 16.9707)" fill="currentColor"/></svg>
                </button>
            </div>
        </div>
    </div>
    <div
        x-show="navIsOpen"
        class="lg:hidden"
        x-transition:enter="duration-150"
        x-transition:leave="duration-100 ease-in"
        x-cloak
    >
        <nav
            x-show="navIsOpen"
            x-transition.opacity
            x-cloak
            class="fixed inset-0 w-full pt-[4.2rem] z-10 pointer-events-none"
        >
            <div class="relative h-full w-full py-8 px-5 bg-white pointer-events-auto overflow-y-auto">
                <ul>
                    <li><a class="block w-full py-2" href="https://forge.laravel.com">Forge</a></li>
                    <li><a class="block w-full py-2" href="https://vapor.laravel.com">Vapor</a></li>
                    <li><a class="block w-full py-3" href="https://laravel-news.com">Новости</a></li>
                    <li><a class="block w-full py-3" href="https://partners.laravel.com">Партнеры</a></li>
                    <li class="flex sm:justify-center"><x-button.secondary class="mt-3 w-full max-w-md" href="/docs">Документация</x-button.secondary></li>
                </ul>
            </div>
        </nav>
    </div>
</header>
