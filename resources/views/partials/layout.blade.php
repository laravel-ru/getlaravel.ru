<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>{{ isset($title) ? $title . ' - ' : null }}Laravel - PHP-фреймворк для веб-мастеров</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">

    @if (isset($canonical))
    <link rel="canonical" href="{{ url($canonical) }}">
    @endif

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="/img/favicon/safari-pinned-tab.svg" color="#ff2d20">
    <link rel="shortcut icon" href="/img/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#ff2d20">
    <meta name="msapplication-config" content="/img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <!-- Load fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!-- Load styles -->
    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">

    <!-- Load JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>

    <!-- Analytics -->
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NCP6DLH');</script>
    <!-- End Google Tag Manager -->

</head>
<body class="language-php">

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NCP6DLH"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

@yield('content')

<footer>
    <div class="footer_contain" style="padding-top: 0;">
        <div class="contain">
            <section class="partner_block">
                <div class="content">
                    <h2>Станьте партнером Laravel</h2>
                    <p>Партнеры Laravel - это элитные магазины, предлагающие первоклассную разработку и консультирование на Laravel. Каждый из наших партнеров может помочь Вам создать красивый, хорошо продуманный проект.</p>
                </div>
                @if(request()->is('partners'))
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeOTE1G6zxSPbKdmQ59UKkL_Rja_ddAyG6Y6xxGdSGAWlNTFA/viewform?usp=sf_link" class="btn"><span>Стать партнером</span></a>
                @else
                <a href="/partners" class="btn"><span>Наши партнеры</span></a>
                @endif
            </section>
        </div>

        <div class="footer_bg">
            <div class="contain">
                <div class="footer_content">
                    <div class="logotype">
                        <img src="/img/logotype.min.svg" alt="Laravel">
                    </div>
                    <div class="search_box">

                    </div>
                </div>
                <div class="footer_content">
                    <div class="footer_nav">
                        <div class="nav_col">
                            <span class="footer_nav_trigger">Основные моменты</span>
                            <div class="footer_nav_contain">
                                <ul>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/releases">Примечания к выпуску</a></li>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/installation">Начало работы</a></li>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/routing">Маршрутизация</a></li>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/blade">Шаблоны Blade</a></li>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/authentication">Аутентификация</a></li>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/authorization">Авторизация</a></li>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/artisan">Консоль Artisan</a></li>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/database">База данных</a></li>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/eloquent">Eloquent ORM</a></li>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/testing">Тестирование</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="nav_col">
                            <span class="footer_nav_trigger">Ресурсы</span>
                            <div class="footer_nav_contain">
                                <ul>
                                    <li><a href="https://laracasts.com">Laracasts</a></li>
                                    <li><a href="https://laravel-news.com">Новости Laravel</a></li>
                                    <li><a href="https://laracon.us">Laracon</a></li>
                                    <li><a href="https://laracon.eu/">Laracon EU</a></li>
                                    <li><a href="https://laracon.com.au/">Laracon AU</a></li>
                                    <li><a href="https://larajobs.com">Вакансии</a></li>
                                    <li><a href="https://certification.laravel.com/">Сертификация</a></li>
                                    <li><a href="https://laracasts.com/discuss">Форумы</a></li>
                                    <!-- <li><a href="http://www.laravelpodcast.com/">Podcast</a></li> -->
                                    <!-- <li><a href="https://course.testdrivenlaravel.com/">Test-driven Laravel</a></li> -->
                                    <!-- <li><a href="https://statamic.com/">Statamic</a></li> -->
<!--                                     <li><a href="https://styleci.io/">StyleCI</a></li>
                                    <li><a href="https://cachethq.io/">Cachet</a></li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="nav_col">
                            <span class="footer_nav_trigger">Партнеры</span>
                            <div class="footer_nav_contain">
                                <ul>
                                    <li><a href="https://vehikl.com">Vehikl</a></li>
                                    <li><a href="https://tighten.co">Tighten Co.</a></li>
                                    <li><a href="https://kirschbaumdevelopment.com/">Kirschbaum</a></li>
                                    <li><a href="https://www.byte5.net/">Byte 5</a></li>
                                    <li><a href="https://64robots.com/">64 Robots</a></li>
                                    <li><a href="https://cubettech.com/">Cubet</a></li>
                                    <li><a href="https://devsquad.com/">DevSquad</a></li>
                                    <li><a href="https://www.ideil.com/">Ideil</a></li>
                                    <li><a href="https://www.cyber-duck.co.uk/how-we-work/technology/laravel?utm_source=Laravel%20Partner&utm_medium=Sponsorship">Cyber-Duck</a></li>
                                    <li><a href="https://corporate.aboutyou.de/app/uploads/2019/08/INTRO-Pitch-I-AY-Tech.pdf?utm_source=laravelpartnersfindoutmore&utm_medium=socialgroups&utm_campaign=tech">ABOUT YOU</a></li>
                                    <li><a href="https://www.a2design.biz/">A2 Design</a></li>
                                    <li><a href="https://romegadigital.com/">Romega Software</a></li>
                                    <li><a href="https://jump24.co.uk/">Jump24</a></li>
                                    <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSeOTE1G6zxSPbKdmQ59UKkL_Rja_ddAyG6Y6xxGdSGAWlNTFA/viewform">Стать партнером</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="nav_col">
                            <span class="footer_nav_trigger">Экосистема</span>
                            <div class="footer_nav_contain">
                                <ul>
                                    <li><a href="https://vapor.laravel.com">Vapor</a></li>
                                    <li><a href="https://forge.laravel.com">Forge</a></li>
                                    <li><a href="https://envoyer.io">Envoyer</a></li>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/horizon">Horizon</a></li>
                                    <li><a href="https://lumen.laravel.com">Lumen</a></li>
                                    <li><a href="https://nova.laravel.com">Nova</a></li>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/broadcasting">Echo</a></li>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/valet">Valet</a></li>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/mix">Mix</a></li>
                                    <li><a href="https://spark.laravel.com">Spark</a></li>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/billing">Cashier</a></li>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/homestead">Homestead</a></li>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/dusk">Dusk</a></li>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/passport">Passport</a></li>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/scout">Scout</a></li>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/socialite">Socialite</a></li>
                                    <li><a href="/docs/{{DEFAULT_VERSION}}/telescope">Telescope</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="footer_info">
                        <p class="small">Laravel - это фреймворк для веб-приложений с выразительным элегантным синтаксисом. Мы считаем, что разработка должна быть приятной и творческой, чтобы приносить истинное удовлетворение. Laravel пытается облегчить разработку, упростив общие задачи, используемые в большинстве веб-проектов.</p>
                        <p class="small copyright">Laravel - торговая марка Taylor Otwell.<br>Авторские права &copy; 2011-{{now()->format('Y')}} Laravel LLC.
                        </p>
                        <ul class="social_links">
                            <li><a href="https://twitter.com/laravelphp"><img src="/img/social/twitter.min.svg" alt="Twitter"></a>
                            </li>
                            <li><a href="https://github.com/laravel"><img src="/img/social/github.min.svg" alt="GitHub"></a>
                            </li>
                            <li><a href="https://discord.gg/mPZNm7A"><img src="/img/social/discord.min.svg" alt="Discord"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <a href="/" class="logomark"><img src="/img/logomark.min.svg" alt="Laravel"></a>
    </div>
</footer>

<script>
    var algolia_app_id = '{{ config('algolia.connections.main.id', false) }}';
    var algolia_search_key = '{{ config('algolia.connections.main.search_key', false) }}';
    var version = '{{ isset($currentVersion) ? $currentVersion : DEFAULT_VERSION }}';
</script>

@include('partials.algolia_template')

<script src="{{ mix('js/app.js') }}"></script>

</body>
</html>
