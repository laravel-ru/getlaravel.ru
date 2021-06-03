@extends('partials.layout')

@section('content')
    @include('partials.header')

    <div class="overflow-hidden">
        @if (random_int(1, 2) === 1)
        <div class="max-w-screen-xl px-8 mx-auto">
            <div class="sm:transform sm:-translate-x-8 sm:py-6 2xl:-translate-x-24 py-3">
                <a href="https://vapor.laravel.com/" class="hover:bg-gray-200 flex max-w-md transition bg-gray-100">
                    <div class="bg-vapor sm:w-12 sm:h-12 flex items-center justify-center w-10 h-10">
                        <img src="/img/ecosystem/vapor.min.svg" alt="Laravel Vapor" class="w-7 h-7">
                    </div>
                    <div class="flex items-center self-stretch px-3">
                        <p class="sm:text-sm text-xs text-gray-700">
                            Vapor может масштабировать ваши приложения! <span class="whitespace-nowrap">Зарегистрироваться Сегодня! →</span>
                        </p>
                    </div>
                </a>
            </div>
        </div>
        @else
        <div class="max-w-screen-xl px-8 mx-auto">
            <div class="sm:transform sm:-translate-x-8 sm:py-6 2xl:-translate-x-24 py-3">
                <a href="https://forge.laravel.com/" class="hover:bg-gray-200 flex max-w-md transition bg-gray-100">
                    <div class="bg-vapor sm:w-12 sm:h-12 flex items-center justify-center w-10 h-10">
                        <img src="/img/ecosystem/laracon-online.svg" alt="Laravel Forge" class="w-7 h-7">
                    </div>
                    <div class="flex items-center self-stretch px-3">
                        <p class="sm:text-sm text-xs text-gray-700">
                            Forge помогает развертывать ваши приложения! <span class="whitespace-nowrap">Зарегистрируйтесь сейчас! →</span>
                        </p>
                    </div>
                </a>
            </div>
        </div>
        @endif

        <section class="md:py-20 xl:py-28 py-12">
            <div class="relative max-w-screen-xl px-8 mx-auto">
                <div style="z-index: -9998" class="md:w-full md:transform md:translate-x-1/4 md:absolute md:-top-16 md:-right-16 md:h-80 md:flex md:items-center lg:w-3/4 lg:right-16 lg:h-96 hidden">
                    <video poster="/img/hero/hero_poster.jpg" playsinline autoplay muted loop>
                        <source src="/img/hero/hero.mp4" type="video/mp4">
                    </video>
                </div>
                <h1 class="sm:text-4xl lg:text-5xl lg:leading-tight xl:max-w-3xl xl:pr-8 xl:text-5xl max-w-xl text-3xl font-medium tracking-tight">PHP-фреймворк для <span class="whitespace-nowrap">Веб-Мастеров</span></h1>
                <p class="sm:mt-5 lg:mt-8 lg:max-w-xl lg:text-lg xl:max-w-2xl max-w-md mt-3 text-gray-600">Laravel - это фреймворк для веб-приложений с выразительным элегантным синтаксисом. Мы уже заложили основу - это даем вам возможность творить, не утруждая себя мелочами.</p>
                <div class="sm:flex-row sm:mt-8 sm:space-y-0 sm:space-x-4 md:mt-8 lg:mt-12 flex flex-col mt-6 space-y-4">
                    <x-button.primary href="/docs">
                        Документация
                    </x-button.primary>
                    <x-button.secondary href="https://laracasts.com" target="_blank">
                        <img class="flex-shrink-0 w-6 h-6" src="/img/icons/play.min.svg" alt="Play Video">
                        <span class="ml-3">Смотреть ларакасты</span>
                    </x-button.secondary>
                </div>
            </div>
        </section>
    </div>

    <div class="md:py-40 lg:py-64 xl:py-72 relative py-16 overflow-hidden">
        <div class="md:space-y-0 md:flex md:items-center relative max-w-screen-xl px-8 mx-auto space-y-16">
            <div style="z-index: -9999; width: 120%" class="md:transform md:-translate-x-1/2 md:absolute md:inset-y-0 md:left-0 md:h-full md:flex md:items-center hidden">
                <video class="w-full" poster="/img/blocks/blocks_3.jpg" playsinline autoplay muted loop>
                    <source src="/img/blocks/blocks_3.mp4" type="video/mp4">
                </video>
            </div>
            @if (SHOW_PROMO === 'VAPOR')
                <div class="md:max-w-auto md:w-1/2 max-w-lg">
                    <img class="w-full shadow-lg" src="/img/homepage/vapor.jpg" alt="Vapor">
                </div>
                <div class="md:w-1/2 md:pl-8 lg:pl-24">
                    <h1 class="sm:text-4xl lg:text-5xl lg:leading-tight xl:text-5xl text-3xl font-medium tracking-tight">Laravel Vapor</h1>
                    <p class="sm:mt-5 md:max-w-2xl md:mt-8 md:text-lg max-w-xl mt-3 text-gray-600">Laravel Vapor - это платформа для бессерверного развертывания Laravel, работающая на AWS. Запустите свою инфраструктуру Laravel на Vapor и влюбитесь в масштабируемую простоту бессерверной архитектуры.</p>
                    <x-button.primary class="sm:mt-8 md:mt-10 mt-6" href="https://vapor.laravel.com" target="_blank">
                        Узнать больше
                    </x-button.primary>
                </div>
            @elseif (SHOW_PROMO === 'FORGE')
                <div class="md:max-w-auto md:w-1/2 max-w-lg">
                    <img class="w-full shadow-lg" src="/img/homepage/forge.png" alt="Forge">
                </div>
                <div class="md:w-1/2 md:pl-8 lg:pl-24">
                    <h1 class="sm:text-4xl lg:text-5xl lg:leading-tight xl:text-5xl text-3xl font-medium tracking-tight">Laravel Forge</h1>
                    <p class="sm:mt-5 md:max-w-2xl md:mt-8 md:text-lg max-w-xl mt-3 text-gray-600">Мгновенные PHP-платформы на DigitalOcean, Linode и других платформах. Предлагая push-to-deploy, Redis, очереди и все остальное, что вам может понадобиться для запуска и развертывания впечатляющих приложений Laravel.</p>
                    <x-button.primary class="sm:mt-8 md:mt-10 mt-6" href="https://forge.laravel.com" target="_blank">
                        Узнать больше
                    </x-button.primary>
                </div>
            @elseif (SHOW_PROMO === 'PARTNERS')
                <div class="md:max-w-auto md:w-1/2 max-w-lg">
                    <img class="w-full shadow-lg" src="/img/homepage/partners.png" alt="Laravel Partners">
                </div>
                <div class="md:w-1/2 md:pl-8 lg:pl-24">
                    <h1 class="sm:text-4xl lg:text-5xl lg:leading-tight xl:text-5xl text-3xl font-medium tracking-tight">Партнеры Laravel</h1>
                    <p class="sm:mt-5 md:max-w-2xl md:mt-8 md:text-lg max-w-xl mt-3 text-gray-600">Найдите одобренного Laravel партнера по разработке, который поможет с вашим следующим проектом. Найдите эксперта в соответствии с вашими потребностями и начните разговор.</p>
                    <x-button.primary class="sm:mt-8 md:mt-10 mt-6" href="https://partners.laravel.com" target="_blank">
                        Узнать больше
                    </x-button.primary>
                </div>
            @endif
        </div>
    </div>

    <div class="max-w-screen-xl px-8 mx-auto">
        <h6 class="mx-auto text-lg font-medium text-center text-gray-600">Революционность в построении Интернета.</h6>
        <h1 class="sm:text-4xl lg:text-5xl lg:leading-tight xl:text-5xl mx-auto mt-4 text-3xl font-medium tracking-tight text-center">Экосистема Ларавел</h1>
        <ul class="sm:grid-cols-2 md:mt-24 md:grid-cols-3 relative grid gap-6 mt-16">
            <li>
                <a href="https://vapor.laravel.com" class="flex items-center p-4 shadow-lg">
                    <div class="bg-vapor flex items-center justify-center w-16 h-16">
                        <img src="/img/ecosystem/vapor.min.svg" alt="Icon" class="w-10 h-10">
                    </div>
                    <div class="ml-4 leading-5">
                        <div class="text-2xl">Vapor</div>
                        <span class="text-xs text-gray-600">Бессерверная платформа</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="https://forge.laravel.com" class="flex items-center p-4 shadow-lg">
                    <div class="bg-forge flex items-center justify-center w-16 h-16">
                        <img src="/img/ecosystem/forge.min.svg" alt="Icon" class="w-10 h-10">
                    </div>
                    <div class="ml-4 leading-5">
                        <div class="text-2xl">Forge</div>
                        <span class="text-xs text-gray-600">Управление сервером</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="https://envoyer.io" class="flex items-center p-4 shadow-lg">
                    <div class="bg-envoyer flex items-center justify-center w-16 h-16">
                        <img src="/img/ecosystem/envoyer.min.svg" alt="Icon" class="w-10 h-10">
                    </div>
                    <div class="ml-4 leading-5">
                        <div class="text-2xl">Envoyer</div>
                        <span class="text-xs text-gray-600">Развертывание с нулевым временем простоя</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="/docs/{{DEFAULT_VERSION}}/horizon" class="flex items-center p-4 shadow-lg">
                    <div class="bg-horizon flex items-center justify-center w-16 h-16">
                        <img src="/img/ecosystem/horizon.min.svg" alt="Icon" class="w-10 h-10">
                    </div>
                    <div class="ml-4 leading-5">
                        <div class="text-2xl">Horizon</div>
                        <span class="text-xs text-gray-600">Мониторинг очереди</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="https://nova.laravel.com/" class="flex items-center p-4 shadow-lg">
                    <div class="bg-nova flex items-center justify-center w-16 h-16">
                        <img src="/img/ecosystem/nova.min.svg" alt="Icon" class="w-10 h-10">
                    </div>
                    <div class="ml-4 leading-5">
                        <div class="text-2xl">Nova</div>
                        <span class="text-xs text-gray-600">Панель управления</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="/docs/{{DEFAULT_VERSION}}/broadcasting" class="flex items-center p-4 shadow-lg">
                    <div class="bg-echo flex items-center justify-center w-16 h-16">
                        <img src="/img/ecosystem/echo.min.svg" alt="Icon" class="w-10 h-10">
                    </div>
                    <div class="ml-4 leading-5">
                        <div class="text-2xl">Echo</div>
                        <span class="text-xs text-gray-600">События в реальном времени</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="https://lumen.laravel.com" class="flex items-center p-4 shadow-lg">
                    <div class="bg-lumen flex items-center justify-center w-16 h-16">
                        <img src="/img/ecosystem/lumen.min.svg" alt="Icon" class="w-10 h-10">
                    </div>
                    <div class="ml-4 leading-5">
                        <div class="text-2xl">Lumen</div>
                        <span class="text-xs text-gray-600">Микро-фреймворк</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="/docs/{{DEFAULT_VERSION}}/sail" class="flex items-center p-4 shadow-lg">
                    <div class="bg-sail flex items-center justify-center w-16 h-16">
                        <img src="/img/ecosystem/sail.min.svg" alt="Icon" class="w-10 h-10">
                    </div>
                    <div class="ml-4 leading-5">
                        <div class="text-2xl">Sail</div>
                    <span class="text-xs text-gray-600">Локальная среда Docker</span>
                </div>
                </a>
            </li>
            <li>
                <a href="https://spark.laravel.com" class="flex items-center p-4 shadow-lg">
                    <div class="bg-spark flex items-center justify-center w-16 h-16">
                        <img src="/img/ecosystem/spark.min.svg" alt="Icon" class="w-10 h-10">
                    </div>
                    <div class="ml-4 leading-5">
                        <div class="text-2xl">Spark</div>
                        <span class="text-xs text-gray-600">Каркас приложений SaaS</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="/docs/{{DEFAULT_VERSION}}/valet" class="flex items-center p-4 shadow-lg">
                    <div class="bg-valet flex items-center justify-center w-16 h-16">
                        <img src="/img/ecosystem/valet.min.svg" alt="Icon" class="w-10 h-10">
                    </div>
                    <div class="ml-4 leading-5">
                        <div class="text-2xl">Valet</div>
                        <span class="text-xs text-gray-600">Среда разработки для Mac</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="/docs/{{DEFAULT_VERSION}}/mix" class="flex items-center p-4 shadow-lg">
                    <div class="bg-mix flex items-center justify-center w-16 h-16">
                        <img src="/img/ecosystem/mix.min.svg" alt="Icon" class="w-10 h-10">
                    </div>
                    <div class="ml-4 leading-5">
                        <div class="text-2xl">Mix</div>
                    <span class="text-xs text-gray-600">Компиляция асетов Webpack</span>
                </div>
                </a>
            </li>
            <li>
                <a href="/docs/{{DEFAULT_VERSION}}/billing" class="flex items-center p-4 shadow-lg">
                    <div class="bg-cashier flex items-center justify-center w-16 h-16">
                        <img src="/img/ecosystem/cashier.min.svg" alt="Icon" class="w-10 h-10">
                    </div>
                    <div class="ml-4 leading-5">
                        <div class="text-2xl">Cashier</div>
                        <span class="text-xs text-gray-600">Интеграция биллинга по подписке</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="/docs/{{DEFAULT_VERSION}}/dusk" class="flex items-center p-4 shadow-lg">
                    <div class="bg-dusk flex items-center justify-center w-16 h-16">
                        <img src="/img/ecosystem/dusk.min.svg" alt="Icon" class="w-10 h-10">
                    </div>
                    <div class="ml-4 leading-5">
                        <div class="text-2xl">Dusk</div>
                        <span class="text-xs text-gray-600">Браузерное тестирование и автоматизация</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="/docs/{{DEFAULT_VERSION}}/sanctum" class="flex items-center p-4 shadow-lg">
                    <div class="bg-sanctum flex items-center justify-center w-16 h-16">
                        <img src="/img/ecosystem/sanctum.min.svg" alt="Laravel Sanctum logomark" class="w-10 h-10">
                    </div>
                    <div class="ml-4 leading-5">
                        <div class="text-2xl">Sanctum</div>
                        <span class="text-xs text-gray-600">API / Мобильная аутентификации</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="/docs/{{DEFAULT_VERSION}}/scout" class="flex items-center p-4 shadow-lg">
                    <div class="bg-scout flex items-center justify-center w-16 h-16">
                        <img src="/img/ecosystem/scout.min.svg" alt="Laravel Scout logomark" class="w-10 h-10">
                    </div>
                    <div class="ml-4 leading-5">
                        <div class="text-2xl">Scout</div>
                        <span class="text-xs text-gray-600">Полнотекстовый поиск</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="/docs/{{DEFAULT_VERSION}}/socialite" class="flex items-center p-4 shadow-lg">
                    <div class="bg-socialite flex items-center justify-center w-16 h-16">
                        <img src="/img/ecosystem/socialite.min.svg" alt="Icon" class="w-10 h-10">
                    </div>
                    <div class="ml-4 leading-5">
                        <div class="text-2xl">Socialite</div>
                        <span class="text-xs text-gray-600">OAuth аутентификация</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="/docs/{{DEFAULT_VERSION}}/telescope" class="flex items-center p-4 shadow-lg">
                    <div class="bg-telescope flex items-center justify-center w-16 h-16">
                        <img src="/img/ecosystem/telescope.min.svg" alt="Icon" class="w-10 h-10">
                    </div>
                    <div class="ml-4 leading-5">
                        <div class="text-2xl">Telescope</div>
                        <span class="text-xs text-gray-600">Помощник по отладке</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="https://jetstream.laravel.com" class="flex items-center p-4 shadow-lg">
                    <div class="bg-jetstream flex items-center justify-center w-16 h-16">
                        <img src="/img/ecosystem/jetstream.min.svg" alt="Icon" class="w-10 h-10">
                    </div>
                    <div class="ml-4 leading-5">
                        <div class="text-2xl">Jetstream</div>
                        <span class="text-xs text-gray-600">Разработка приложений</span>
                    </div>
                </a>
            </li>
        </ul>
    </div>

    <div class="md:py-40 lg:py-64 xl:py-80 py-16 overflow-hidden">
        <div class="md:space-y-0 md:flex md:items-center relative max-w-screen-xl px-8 mx-auto space-y-12">
            <div style="z-index: -9998; width: 120%" class="md:transform md:translate-x-1/3 md:absolute md:inset-y-0 md:right-0 md:flex md:items-center hidden">
                <video poster="/img/blocks/blocks_4.jpg" playsinline autoplay muted loop>
                    <source src="/img/blocks/blocks_4.mp4" type="video/mp4">
                </video>
            </div>
            <div class="md:w-1/2">
                <h6 class="text-lg font-medium text-gray-600">Ресурсы</h6>
                <h1 class="sm:text-4xl md:mt-4 md:max-w-4xl md:text-5xl md:leading-tight xl:text-5xl max-w-md mt-2 text-3xl font-medium tracking-tight">Сообщество построено<br class="md:hidden lg:inline"> для таких как ты</h1>
                <p class="sm:mt-5 md:max-w-2xl md:mt-8 md:text-lg max-w-xl mt-3 text-gray-600">Независимо от того, являетесь ли вы индивидуальным разработчиком или командой из 20 человек, начать работу легко благодаря нашему замечательному сообществу.</p>
                <ul class="list-custom sm:mt-8 grid max-w-md grid-cols-2 gap-4 mt-6 text-sm font-medium leading-4 text-gray-600">
                    <li><a href="https://blog.laravel.com">Блог</a></li>
                    <li><a href="https://laracasts.com">Ларакасты</a></li>
                    <!-- <li><a href="http://laravelpodcast.com/">Podcast</a></li> -->
                    <li><a href="https://laravel-news.com">Новости Laravel</a></li>
                    <li><a href="https://laracon.us/">Ларакон</a></li>
                    <li><a href="https://larajobs.com/">Работа</a></li>
                    <li><a href="https://laracon.eu/">Ларакон EU</a></li>
                    <li><a href="https://laracasts.com/discuss">Форумы</a></li>
                    <li><a href="https://laracon.com.au/">Ларакон AU</a></li>
                    <li><a href="https://certification.laravel.com/">Сертификация</a></li>
                </ul>
            </div>

            <div class="md:w-1/2 md:px-12 pr-12">
                <div class="lg:p-16 relative max-w-lg p-6 bg-white shadow-lg">
                    <div class="sm:w-24 sm:h-24 md:w-16 md:h-16 lg:w-24 lg:h-24 absolute right-0 flex items-center justify-center w-16 h-16 transform translate-x-8 bg-black">
                        <img class="w-9 h-9 sm:w-14 sm:h-14 md:w-9 md:h-9 lg:w-14 lg:h-14" src="/img/icons/laracasts.min.svg" alt="Laracasts">
                    </div>
                    <h6 class="text-sm font-medium text-gray-600">Рекомендуемый ресурс</h6>
                    <h3 class="sm:mt-5 sm:text-2xl mt-3 text-xl font-medium">Ларакасты</h3>
                    <p class="sm:mt-5 sm:text-base md:mt-8 md:leading-6 lg:max-w-sm max-w-xs mt-3 text-xs leading-5 text-gray-600">Девять из десяти врачей рекомендуют Laracasts, а не конкурирующие бренды. Проверьте их, убедитесь сами и значительно улучшите свои навыки развития в процессе.</p>
                    <x-button.secondary href="https://laracasts.com" class="mt-6">
                        Начать обучение →
                    </x-button.secondary>
                </div>
            </div>
        </div>
    </div>
@stop
