@extends('partials.layout')

@section('content')
    @include('partials.header')

    <div class="overflow-hidden">
        <div class="max-w-screen-xl px-8 mx-auto">
            <div class="py-3 sm:transform sm:-translate-x-8 sm:py-6 2xl:-translate-x-24">
                <a href="https://laracon.eu/" class="max-w-md flex bg-gray-100 transition hover:bg-gray-200">
                    <div class="w-10 h-10 flex items-center justify-center bg-vapor sm:w-12 sm:h-12">
                        <!-- <img src="/img/ecosystem/vapor.min.svg" alt="Vapor" class="w-7 h-7"> -->
                        <img src="/img/ecosystem/laracon-online.svg" alt="Laracon Online" class="w-7 h-7">
                    </div>
                    <div class="px-3 self-stretch flex items-center">
                        <p class="text-gray-700 text-xs sm:text-sm">
                            Скоро событие Laracon EU Online! <span class="whitespace-nowrap">Зарегистрироваться Сегодня! →</span>
                        </p>
                    </div>
                </a>
            </div>
        </div>

        <section class="py-12 md:py-20 xl:py-28">
            <div class="relative max-w-screen-xl px-8 mx-auto">
                <div style="z-index: -9998" class="hidden md:w-full md:transform md:translate-x-1/4 md:absolute md:-top-16 md:-right-16 md:h-80 md:flex md:items-center lg:w-3/4 lg:right-16 lg:h-96">
                    <video poster="/img/hero/hero_poster.jpg" playsinline autoplay muted loop>
                        <source src="/img/hero/hero.mp4" type="video/mp4">
                    </video>
                </div>
                <h1 class="max-w-xl font-medium text-3xl tracking-tight sm:text-4xl lg:text-5xl lg:leading-tight xl:max-w-3xl xl:pr-8 xl:text-5xl">Фреймворк PHP для <span class="whitespace-nowrap">Веб-Мастеров</span></h1>
                <p class="mt-3 max-w-md text-gray-600 sm:mt-5 lg:mt-8 lg:max-w-xl lg:text-lg xl:max-w-2xl">Laravel - это фреймворк для веб-приложений с выразительным элегантным синтаксисом. Мы уже заложили основу - даем Вам возможность творить, не утруждая себя мелочами.</p>
                <div class="mt-6 space-y-4 flex flex-col sm:flex-row sm:mt-8 sm:space-y-0 sm:space-x-4 md:mt-8 lg:mt-12">
                    <x-button.primary href="/docs">
                        Документация
                    </x-button.primary>
                    <x-button.secondary href="https://laracasts.com" target="_blank">
                        <img class="w-6 h-6 flex-shrink-0" src="/img/icons/play.min.svg" alt="Play Video">
                        <span class="ml-3">См. Laracasts</span>
                    </x-button.secondary>
                </div>
            </div>
        </section>
    </div>

    <div class="relative py-16 overflow-hidden md:py-40 lg:py-64 xl:py-72">
        <div class="relative max-w-screen-xl px-8 mx-auto space-y-16 md:space-y-0 md:flex md:items-center">
            <div style="z-index: -9999; width: 120%" class="hidden md:transform md:-translate-x-1/2 md:absolute md:inset-y-0 md:left-0 md:h-full md:flex md:items-center">
                <video class="w-full" poster="/img/blocks/blocks_3.jpg" playsinline autoplay muted loop>
                    <source src="/img/blocks/blocks_3.mp4" type="video/mp4">
                </video>
            </div>
            @if (SHOW_VAPOR)
                <div class="max-w-lg md:max-w-auto md:w-1/2">
                    <img class="w-full shadow-lg" src="/img/homepage/vapor.jpg" alt="Vapor">
                </div>
                <div class="md:w-1/2 md:pl-8 lg:pl-24">
                    <h1 class="font-medium text-3xl tracking-tight sm:text-4xl lg:text-5xl lg:leading-tight xl:text-5xl">Laravel Vapor</h1>
                    <p class="mt-3 max-w-xl text-gray-600 sm:mt-5 md:max-w-2xl md:mt-8 md:text-lg">Laravel Vapor - это платформа для бессерверного развертывания Laravel, работающая на AWS. Запустите свою инфраструктуру Laravel на Vapor и влюбитесь в масштабируемую простоту бессерверной архитектуры.</p>
                    <x-button.primary class="mt-6 sm:mt-8 md:mt-10" href="https://vapor.laravel.com" target="_blank">
                        Узнать больше
                    </x-button.primary>
                </div>
            @else
                <div class="max-w-lg md:max-w-auto md:w-1/2">
                    <img class="w-full shadow-lg" src="/img/homepage/forge.jpg" alt="Forge">
                </div>
                <div class="md:w-1/2 md:pl-8 lg:pl-24">
                    <h1 class="font-medium text-3xl tracking-tight sm:text-4xl lg:text-5xl lg:leading-tight xl:text-5xl">Laravel Forge</h1>
                    <p class="mt-3 max-w-xl text-gray-600 sm:mt-5 md:max-w-2xl md:mt-8 md:text-lg">Мгновенные PHP-платформы на DigitalOcean, Linode и других. Благодаря push-to-deploy, Redis, очередям и всему остальному, что Вам может понадобиться для запуска и развертывания впечатляющих приложений Laravel.</p>
                    <x-button.primary class="mt-6 sm:mt-8 md:mt-10" href="https://forge.laravel.com" target="_blank">
                        Узнать больше
                    </x-button.primary>
                </div>
            @endif
        </div>
    </div>

    <div class="max-w-screen-xl px-8 mx-auto">
        <h6 class="mx-auto text-center text-gray-600 font-medium text-lg">Революционность в построении Интернета.</h6>
        <h1 class="mx-auto mt-4 font-medium text-3xl tracking-tight text-center sm:text-4xl lg:text-5xl lg:leading-tight xl:text-5xl">Экосистема Ларавел</h1>
        <ul class="mt-16 grid gap-6 relative sm:grid-cols-2 md:mt-24 md:grid-cols-3">
            <li>
                <a href="https://vapor.laravel.com" class="flex items-center p-4 shadow-lg">
                    <div class="w-16 h-16 bg-vapor flex items-center justify-center">
                        <img src="/img/ecosystem/vapor.min.svg" alt="Icon" class="w-10 h-10">
                    </div>
                    <div class="ml-4 leading-5">
                        <div class="text-2xl">Vapor</div>
                        <span class="text-gray-600 text-xs">Бессерверная платформа</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="https://forge.laravel.com" class="flex items-center p-4 shadow-lg">
                    <div class="w-16 h-16 bg-forge flex items-center justify-center">
                        <img src="/img/ecosystem/forge.min.svg" alt="Icon" class="w-10 h-10">
                    </div>
                    <div class="ml-4 leading-5">
                        <div class="text-2xl">Forge</div>
                        <span class="text-gray-600 text-xs">Управление сервером</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="https://envoyer.io" class="flex items-center p-4 shadow-lg">
                    <div class="w-16 h-16 bg-envoyer flex items-center justify-center">
                        <img src="/img/ecosystem/envoyer.min.svg" alt="Icon" class="w-10 h-10">
                    </div>
                    <div class="ml-4 leading-5">
                        <div class="text-2xl">Envoyer</div>
                        <span class="text-gray-600 text-xs">Развертывание с нулевым временем простоя</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="/docs/{{DEFAULT_VERSION}}/horizon" class="flex items-center p-4 shadow-lg">
                    <div class="w-16 h-16 bg-horizon flex items-center justify-center">
                        <img src="/img/ecosystem/horizon.min.svg" alt="Icon" class="w-10 h-10">
                    </div>
                    <div class="ml-4 leading-5">
                        <div class="text-2xl">Horizon</div>
                        <span class="text-gray-600 text-xs">Мониторинг очереди</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="https://nova.laravel.com/" class="flex items-center p-4 shadow-lg">
                    <div class="w-16 h-16 bg-nova flex items-center justify-center">
                        <img src="/img/ecosystem/nova.min.svg" alt="Icon" class="w-10 h-10">
                    </div>
                    <div class="ml-4 leading-5">
                        <div class="text-2xl">Nova</div>
                        <span class="text-gray-600 text-xs">Панель управления</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="/docs/{{DEFAULT_VERSION}}/broadcasting" class="flex items-center p-4 shadow-lg">
                    <div class="w-16 h-16 bg-echo flex items-center justify-center">
                        <img src="/img/ecosystem/echo.min.svg" alt="Icon" class="w-10 h-10">
                    </div>
                    <div class="ml-4 leading-5">
                        <div class="text-2xl">Echo</div>
                        <span class="text-gray-600 text-xs">События в реальном времени</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="https://lumen.laravel.com" class="flex items-center p-4 shadow-lg">
                    <div class="w-16 h-16 bg-lumen flex items-center justify-center">
                        <img src="/img/ecosystem/lumen.min.svg" alt="Icon" class="w-10 h-10">
                    </div>
                    <div class="ml-4 leading-5">
                        <div class="text-2xl">Lumen</div>
                        <span class="text-gray-600 text-xs">Микро-фреймворк</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="/docs/{{DEFAULT_VERSION}}/homestead" class="flex items-center p-4 shadow-lg">
                    <div class="w-16 h-16 bg-homestead flex items-center justify-center">
                        <img src="/img/ecosystem/homestead.min.svg" alt="Icon" class="w-10 h-10">
                    </div>
                    <div class="ml-4 leading-5">
                        <div class="text-2xl">Homestead</div>
                    <span class="text-gray-600 text-xs">Предварительно упакованная коробка Vagrant</span>
                </div>
                </a>
            </li>
            <li>
                <a href="https://spark.laravel.com" class="flex items-center p-4 shadow-lg">
                    <div class="w-16 h-16 bg-spark flex items-center justify-center">
                        <img src="/img/ecosystem/spark.min.svg" alt="Icon" class="w-10 h-10">
                    </div>
                    <div class="ml-4 leading-5">
                        <div class="text-2xl">Spark</div>
                        <span class="text-gray-600 text-xs">Каркас приложений SaaS</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="/docs/{{DEFAULT_VERSION}}/valet" class="flex items-center p-4 shadow-lg">
                    <div class="w-16 h-16 bg-valet flex items-center justify-center">
                        <img src="/img/ecosystem/valet.min.svg" alt="Icon" class="w-10 h-10">
                    </div>
                    <div class="ml-4 leading-5">
                        <div class="text-2xl">Valet</div>
                        <span class="text-gray-600 text-xs">Среда разработки для Mac</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="/docs/{{DEFAULT_VERSION}}/mix" class="flex items-center p-4 shadow-lg">
                    <div class="w-16 h-16 bg-mix flex items-center justify-center">
                        <img src="/img/ecosystem/mix.min.svg" alt="Icon" class="w-10 h-10">
                    </div>
                    <div class="ml-4 leading-5">
                        <div class="text-2xl">Mix</div>
                    <span class="text-gray-600 text-xs">Компиляция активов Webpack</span>
                </div>
                </a>
            </li>
            <li>
                <a href="/docs/{{DEFAULT_VERSION}}/billing" class="flex items-center p-4 shadow-lg">
                    <div class="w-16 h-16 bg-cashier flex items-center justify-center">
                        <img src="/img/ecosystem/cashier.min.svg" alt="Icon" class="w-10 h-10">
                    </div>
                    <div class="ml-4 leading-5">
                        <div class="text-2xl">Cashier</div>
                        <span class="text-gray-600 text-xs">Интеграция биллинга по подписке</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="/docs/{{DEFAULT_VERSION}}/dusk" class="flex items-center p-4 shadow-lg">
                    <div class="w-16 h-16 bg-dusk flex items-center justify-center">
                        <img src="/img/ecosystem/dusk.min.svg" alt="Icon" class="w-10 h-10">
                    </div>
                    <div class="ml-4 leading-5">
                        <div class="text-2xl">Dusk</div>
                        <span class="text-gray-600 text-xs">Браузерное тестирование и автоматизация</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="/docs/{{DEFAULT_VERSION}}/passport" class="flex items-center p-4 shadow-lg">
                    <div class="w-16 h-16 bg-passport flex items-center justify-center">
                        <img src="/img/ecosystem/passport.min.svg" alt="Icon" class="w-10 h-10">
                    </div>
                    <div class="ml-4 leading-5">
                        <div class="text-2xl">Passport</div>
                        <span class="text-gray-600 text-xs">Безболезненная реализация OAuth2</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="/docs/{{DEFAULT_VERSION}}/scout" class="flex items-center p-4 shadow-lg">
                    <div class="w-16 h-16 bg-scout flex items-center justify-center">
                        <img src="/img/ecosystem/scout.min.svg" alt="Icon" class="w-10 h-10">
                    </div>
                    <div class="ml-4 leading-5">
                        <div class="text-2xl">Scout</div>
                        <span class="text-gray-600 text-xs">Полнотекстовый поиск</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="/docs/{{DEFAULT_VERSION}}/socialite" class="flex items-center p-4 shadow-lg">
                    <div class="w-16 h-16 bg-socialite flex items-center justify-center">
                        <img src="/img/ecosystem/socialite.min.svg" alt="Icon" class="w-10 h-10">
                    </div>
                    <div class="ml-4 leading-5">
                        <div class="text-2xl">Socialite</div>
                        <span class="text-gray-600 text-xs">OAuth аутентификация</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="/docs/{{DEFAULT_VERSION}}/telescope" class="flex items-center p-4 shadow-lg">
                    <div class="w-16 h-16 bg-telescope flex items-center justify-center">
                        <img src="/img/ecosystem/telescope.min.svg" alt="Icon" class="w-10 h-10">
                    </div>
                    <div class="ml-4 leading-5">
                        <div class="text-2xl">Telescope</div>
                        <span class="text-gray-600 text-xs">Помощник по отладке</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="https://jetstream.laravel.com" class="flex items-center p-4 shadow-lg">
                    <div class="w-16 h-16 bg-jetstream flex items-center justify-center">
                        <img src="/img/ecosystem/jetstream.min.svg" alt="Icon" class="w-10 h-10">
                    </div>
                    <div class="ml-4 leading-5">
                        <div class="text-2xl">Jetstream</div>
                        <span class="text-gray-600 text-xs">Разработка приложений</span>
                    </div>
                </a>
            </li>
        </ul>
    </div>

    <div class="py-16 overflow-hidden md:py-40 lg:py-64 xl:py-80">
        <div class="relative max-w-screen-xl mx-auto px-8 space-y-12 md:space-y-0 md:flex md:items-center">
            <div style="z-index: -9998; width: 120%" class="hidden md:transform md:translate-x-1/3 md:absolute md:inset-y-0 md:right-0 md:flex md:items-center">
                <video poster="/img/blocks/blocks_4.jpg" playsinline autoplay muted loop>
                    <source src="/img/blocks/blocks_4.mp4" type="video/mp4">
                </video>
            </div>
            <div class="md:w-1/2">
                <h6 class="text-gray-600 font-medium text-lg">Ресурсы</h6>
                <h1 class="mt-2 max-w-md font-medium text-3xl tracking-tight sm:text-4xl md:mt-4 md:max-w-4xl md:text-5xl md:leading-tight xl:text-5xl">Сообщество построено<br class="md:hidden lg:inline"> для таких как ты</h1>
                <p class="mt-3 max-w-xl text-gray-600 sm:mt-5 md:max-w-2xl md:mt-8 md:text-lg">Независимо от того, являетесь ли Вы индивидуальным разработчиком или командой из 20 человек, начать работу легко благодаря нашему замечательному сообществу.</p>
                <ul class="mt-6 max-w-md grid grid-cols-2 gap-4 text-gray-600 font-medium text-sm leading-4 list-custom sm:mt-8">
                    <li><a href="https://blog.laravel.com">Блог</a></li>
                    <li><a href="https://laracasts.com">Laracasts</a></li>
                    <!-- <li><a href="http://laravelpodcast.com/">Podcast</a></li> -->
                    <li><a href="https://laravel-news.com">Новости Laravel</a></li>
                    <li><a href="https://laracon.us/">Laracon</a></li>
                    <li><a href="https://larajobs.com/">Работа</a></li>
                    <li><a href="https://laracon.eu/">Laracon EU</a></li>
                    <li><a href="https://laracasts.com/discuss">Форумы</a></li>
                    <li><a href="https://laracon.com.au/">Laracon AU</a></li>
                    <li><a href="https://certification.laravel.com/">Сертификация</a></li>
                </ul>
            </div>

            <div class="pr-12 md:w-1/2 md:px-12">
                <div class="relative max-w-lg p-6 bg-white shadow-lg lg:p-16">
                    <div class="absolute right-0 transform translate-x-8 flex items-center justify-center w-16 h-16 bg-black sm:w-24 sm:h-24 md:w-16 md:h-16 lg:w-24 lg:h-24">
                        <img class="w-9 h-9 sm:w-14 sm:h-14 md:w-9 md:h-9 lg:w-14 lg:h-14" src="/img/icons/laracasts.min.svg" alt="Laracasts">
                    </div>
                    <h6 class="text-gray-600 font-medium text-sm">Рекомендуемый ресурс</h6>
                    <h3 class="mt-3 font-medium text-xl sm:mt-5 sm:text-2xl">Laracasts</h3>
                    <p class="mt-3 max-w-xs text-xs leading-5 text-gray-600 sm:mt-5 sm:text-base md:mt-8 md:leading-6 lg:max-w-sm">Девять из десяти докторов рекомендуют Laracasts, а не конкурирующие бренды. Проверьте их, убедитесь в этом сами и значительно улучшите свои навыки развития в процессе.</p>
                    <x-button.secondary href="https://laracasts.com" class="mt-6">
                        Начать обучение →
                    </x-button.secondary>
                </div>
            </div>
        </div>
    </div>
@stop
