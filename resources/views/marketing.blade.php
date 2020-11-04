@extends('partials.layout')

@section('content')
    @include('partials.header')

    <div class="home standard_layout">
        <div class="remodal-bg">
            <div class="content_contain" style="padding-bottom: 4.5em;">
                <div class="page_contain">
                    <div class="banner">
                        <a href="https://vapor.laravel.com/">
                            <div class="banner_icon icon_nova">
                                <img src="/img/ecosystem/vapor.min.svg" alt="Vapor">
                            </div>
                            <div class="banner_content">
                                 <p class="small">
                                    Laravel Vapor теперь доступен! Зарегистрироваться Сегодня! <span class="arrow">→</span>
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="contain">
                        <section class="hero">
                            <div class="hero_bg">
                                <video poster="/img/hero/hero_poster.jpg" playsinline autoplay muted loop>
                                    <source src="/img/hero/hero.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="hero_content">
                                <h1>Фреймворк PHP для веб-мастеров</h1>
                                <p>Laravel - это фреймворк для веб-приложений с выразительным элегантным синтаксисом. Мы уже заложили основу - даем Вам возможность творить, не утруждая себя мелочами.</p>
                                <div class="hero_actions" style="z-index: -999;">
                                    <a href="/docs" class="btn"><span>Документация</span></a>
                                    <a href="https://laracasts.com" data-remodal-target="video_modal" class="btn secondary"><span><img src="/img/icons/play.min.svg" alt="Play Video"><span>Смотреть Laracasts</span></span></a>

<!--                                     <div data-remodal-id="video_modal" class="video_modal remodal">
                                        <div class="video_contain">
                                            <button data-remodal-action="close" class="remodal-close"></button>
                                            <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" type="text/html" src="https://www.youtube.com/embed/cAGQGXtBvs4?autoplay=0&fs=0&iv_load_policy=3&showinfo=0&rel=0&cc_load_policy=0&start=0&end=0&origin=https://youtubeembedcode.com"></iframe>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </section>
                    </div>
<!--                     <ul class="logos_list">
                        <li><img src="/img/logos/wwe.min.svg" alt="WWE"></li>
                        <li><img src="/img/logos/discovery.min.svg" alt="Discovery"></li>
                        <li><img src="/img/logos/mcdonalds.min.svg" alt="McDonalds"></li>
                        <li><img src="/img/logos/apple.min.svg" alt="Apple"></li>
                        <li><img src="/img/logos/fox.min.svg" alt="20th Century Fox"></li>
                        <li><img src="/img/logos/mcgraw_hill.min.svg" alt="McGraw Hill"></li>
                    </ul> -->
                    <div class="contain">
                        <div class="content_block img_left">
                            <div class="bg">
                                <video poster="/img/blocks/blocks_3.jpg" playsinline autoplay muted loop>
                                    <source src="/img/blocks/blocks_3.mp4" type="video/mp4">
                                </video>
                            </div>
                            @if (SHOW_VAPOR)
                                <div class="image">
                                    <img src="/img/homepage/vapor.jpg" alt="Vapor">
                                </div>
                                <div class="content">
                                    <h1>Laravel Vapor</h1>
                                    <p>Laravel Vapor - это платформа для без серверного развертывания Laravel, работающая на AWS. Запустите свою инфраструктуру Laravel на Vapor и влюбитесь в масштабируемую простоту без серверной архитектуры.</p>
                                    <a href="https://vapor.laravel.com" class="btn"><span>Узнать больше</span></a>
                                </div>
                            @else
                                <div class="image">
                                    <img src="/img/homepage/forge.jpg" alt="Forge">
                                </div>
                                <div class="content">
                                    <h1>Laravel Forge</h1>
                                    <p>Мгновенные PHP-платформы на DigitalOcean, Linode и других. Благодаря push-to-deploy, Redis, queues и всему остальному, что Вам может понадобиться для запуска и развертывания впечатляющих приложений Laravel.</p>
                                    <a href="https://forge.laravel.com" class="btn"><span>Узнать больше</span></a>
                                </div>
                            @endif
                        </div>

                        <div class="ecosystem_block">
                            <div class="heading">
                                <h6>Революционность в построении Интернета.</h6>
                                <h1>Экосистема Ларавел</h1>
                            </div>
                            <ul class="ecosystem">
                                <li class="sys_vapor">
                                    <a href="https://vapor.laravel.com">
                                        <div class="system_icon"><img src="/img/ecosystem/vapor.min.svg" alt="Icon">
                                        </div>
                                        <div class="system_info">Vapor <span>Безсерверная Платформа</span></div>
                                    </a>
                                </li>
                                <li class="sys_forge">
                                    <a href="https://forge.laravel.com">
                                        <div class="system_icon"><img src="/img/ecosystem/forge.min.svg" alt="Icon">
                                        </div>
                                        <div class="system_info">Forge <span>Управление Сервером</span></div>
                                    </a>
                                </li>
                                <li class="sys_envoyer">
                                    <a href="https://envoyer.io">
                                        <div class="system_icon"><img src="/img/ecosystem/envoyer.min.svg" alt="Icon">
                                        </div>
                                        <div class="system_info">Envoyer <span>Развертывание с нулевым временем простоя</span></div>
                                    </a>
                                </li>
                                <li class="sys_horizon">
                                    <a href="/docs/{{DEFAULT_VERSION}}/horizon">
                                        <div class="system_icon"><img src="/img/ecosystem/horizon.min.svg" alt="Icon">
                                        </div>
                                        <div class="system_info">Horizon <span>Мониторинг Очереди</span></div>
                                    </a>
                                </li>
                                <li class="sys_nova">
                                    <a href="https://nova.laravel.com">
                                        <div class="system_icon"><img src="/img/ecosystem/nova.min.svg" alt="Icon">
                                        </div>
                                        <div class="system_info">Nova <span>Панель Управления</span></div>
                                    </a>
                                </li>
                                <li class="sys_echo">
                                    <a href="/docs/{{DEFAULT_VERSION}}/broadcasting">
                                        <div class="system_icon"><img src="/img/ecosystem/echo.min.svg" alt="Icon">
                                        </div>
                                        <div class="system_info">Echo <span>События в реальном времени</span></div>
                                    </a>
                                </li>
                                <li class="sys_lumen">
                                    <a href="https://lumen.laravel.com">
                                        <div class="system_icon"><img src="/img/ecosystem/lumen.min.svg" alt="Icon">
                                        </div>
                                        <div class="system_info">Lumen <span>Микро-фреймворк</span></div>
                                    </a>
                                </li>
                                <li class="sys_homestead">
                                    <a href="/docs/{{DEFAULT_VERSION}}/homestead">
                                        <div class="system_icon">
                                            <img src="/img/ecosystem/homestead.min.svg" alt="Icon"></div>
                                        <div class="system_info">Homestead <span>Предварительно упакованная коробка Vagrant</span></div>
                                    </a>
                                </li>
                                <li class="sys_spark">
                                    <a href="https://spark.laravel.com">
                                        <div class="system_icon"><img src="/img/ecosystem/spark.min.svg" alt="Icon">
                                        </div>
                                        <div class="system_info">Spark <span>Каркас приложений SaaS</span></div>
                                    </a>
                                </li>
                                <li class="sys_valet">
                                    <a href="/docs/{{DEFAULT_VERSION}}/valet">
                                        <div class="system_icon"><img src="/img/ecosystem/valet.min.svg" alt="Icon">
                                        </div>
                                        <div class="system_info">Valet <span>Среда разработки для Mac</span></div>
                                    </a>
                                </li>
                                <li class="sys_mix">
                                    <a href="/docs/{{DEFAULT_VERSION}}/mix">
                                        <div class="system_icon"><img src="/img/ecosystem/mix.min.svg" alt="Icon">
                                        </div>
                                        <div class="system_info">Mix <span>Компиляция Ресурсов Webpack</span></div>
                                    </a>
                                </li>
                                <li class="sys_cashier">
                                    <a href="/docs/{{DEFAULT_VERSION}}/billing">
                                        <div class="system_icon"><img src="/img/ecosystem/cashier.min.svg" alt="Icon">
                                        </div>
                                        <div class="system_info">Cashier <span>Интеграция биллинга по подписке</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="sys_dusk">
                                    <a href="/docs/{{DEFAULT_VERSION}}/dusk">
                                        <div class="system_icon"><img src="/img/ecosystem/dusk.min.svg" alt="Icon">
                                        </div>
                                        <div class="system_info">Dusk <span>Браузерное Тестирование и Автоматизация</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="sys_passport">
                                    <a href="/docs/{{DEFAULT_VERSION}}/passport">
                                        <div class="system_icon">
                                            <img src="/img/ecosystem/passport.min.svg" alt="Icon"></div>
                                        <div class="system_info">Passport <span>Безболезненная реализация OAuth2</span></div>
                                    </a>
                                </li>
                                <li class="sys_scout">
                                    <a href="/docs/{{DEFAULT_VERSION}}/scout">
                                        <div class="system_icon"><img src="/img/ecosystem/scout.min.svg" alt="Icon">
                                        </div>
                                        <div class="system_info">Scout <span>Полнотекстовый поиск</span></div>
                                    </a>
                                </li>
                                <li class="sys_socialite">
                                    <a href="/docs/{{DEFAULT_VERSION}}/socialite">
                                        <div class="system_icon">
                                            <img src="/img/ecosystem/socialite.min.svg" alt="Icon"></div>
                                        <div class="system_info">Socialite <span>OAuth Аутентификация</span></div>
                                    </a>
                                </li>
                                <li class="sys_telescope">
                                    <a href="/docs/{{DEFAULT_VERSION}}/telescope">
                                        <div class="system_icon">
                                            <img src="/img/ecosystem/telescope.min.svg" alt="Icon"></div>
                                        <div class="system_info">Telescope <span>Помощник в Отладке</span></div>
                                    </a>
                                </li>
                                <li class="sys_jetstream">
                                    <a href="https://jetstream.laravel.com">
                                        <div class="system_icon"><img src="/img/ecosystem/jetstream.min.svg" alt="Icon">
                                        </div>
                                        <div class="system_info">Jetstream <span>Разработка приложений</span></div>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="content_block bg_right resources">
                            <div class="content">
                                <h6>Ресурсы</h6>
                                <h1>Сообщество, построенное для таких людей, как Вы</h1>
                                <p>Независимо от того, являетесь ли вы индивидуальным разработчиком или командой из 20 человек, начать работу легко благодаря нашему замечательному сообществу.</p>
                                <ul class="resource_list">
                                    <li><a href="https://blog.laravel.com">Блог</a></li>
                                    <li><a href="https://laracasts.com">Laracasts</a></li>
                                    <!-- <li><a href="http://laravelpodcast.com/">Podcast</a></li> -->
                                    <li><a href="https://laravel-news.com">Новости Ларавел</a></li>
                                    <li><a href="https://laracon.us/">Laracon</a></li>
                                    <li><a href="https://larajobs.com/">Работа</a></li>
                                    <li><a href="https://laracon.eu/">Laracon EU</a></li>
                                    <li><a href="https://laracasts.com/discuss">Форумы</a></li>
                                    <li><a href="https://laracon.com.au/">Laracon AU</a></li>
                                    <li><a href="https://certification.laravel.com/">Сертификация</a></li>
                                </ul>
                            </div>

                            <div class="featured_resource">
                                <div class="resource_icon">
                                    <img src="/img/icons/laracasts.min.svg" alt="Laracasts">
                                </div>
                                <h6>Рекомендуемый ресурс</h6>
                                <h3>Ларакасты</h3>
                                <p class="small">Девять из десяти врачей рекомендуют Laracasts, а не конкурирующие бренды. Проверьте их, убедитесь в этом сами и значительно улучшите свои навыки развития в процессе.</p>
                                <a href="https://laracasts.com" class="btn secondary"><span>Начать обучение →</span></a>
                            </div>
                            <div class="bg">
                                <video poster="/img/blocks/blocks_4.jpg" playsinline autoplay muted loop>
                                    <source src="/img/blocks/blocks_4.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
