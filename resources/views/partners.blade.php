@extends('partials.layout')

@section('content')
    @include('partials.header')

    <div class="">
        <div class="content_contain">
            <div class="relative overflow-hidden">
                <div class="contain">
                    <section class="py-12 md:py-20 xl:py-28">
                        <div style="width: 120%;z-index: -9998" class="hidden md:transform md:translate-x-1/4 md:absolute md:-top-24 md:-right-48 md:flex md:items-center lg:-top-32 xl:-top-48">
                            <video poster="/img/blocks/blocks_1.jpg" playsinline autoplay muted loop>
                                <source src="/img/blocks/blocks_1.mp4" type="video/mp4">
                            </video>
                        </div>
                        <div class="max-w-screen-xl mx-auto px-8 space-y-8 md:space-y-0 md:flex md:items-end">
                            <div class="md:flex-1">
                                <h1 class="max-w-md font-medium text-3xl tracking-tight sm:text-4xl md:max-w-4xl md:text-5xl md:leading-tight xl:text-6xl">Делаем интернет лучше с Laravel</h1>
                                <p class="mt-3 max-w-xl text-gray-600 sm:mt-5 md:max-w-2xl md:mt-8 md:text-lg">Партнеры Laravel - это элитные магазины, предлагающие первоклассную разработку и консультирование на Laravel. Каждый из наших партнеров может помочь Вам создать красивый, хорошо продуманный проект.</p>
                            </div>
                            <div class="md:px-12 md:flex-shrink-0 md:flex md:items-end md:justify-center">
                                <x-button.primary href="https://docs.google.com/forms/d/e/1FAIpQLSeOTE1G6zxSPbKdmQ59UKkL_Rja_ddAyG6Y6xxGdSGAWlNTFA/viewform?usp=sf_link">
                                    Стать партнером
                                </x-button.primary>
                            </div>
                        </div>
                    </section>
                </div>

                <section class="relative">
                    <div class="max-w-screen-xl mx-auto px-8 py-12 md:py-20 lg:py-32">
                        <div class="flex flex-col">
                            @if($featured == 'tighten')
                                <img class="w-full md:absolute md:right-1/2 md:top-0 md:w-224" src="/img/partners/img_tighten_detail.jpeg" alt="Tighten" style="right: 48%;">
                                <div class="p-12 bg-white shadow-lg md:relative md:w-3/4 md:ml-auto lg:px-24 lg:py-20">
                                    <h6 class="text-gray-600 font-medium text-sm">Рекомендуемый партнер</h6>
                                    <img class="mt-6" src="/img/partners/tighten.min.svg" alt="Tighten">
                                    <p class="mt-6 text-gray-600 lg:text-lg">Tighten - это команда лидеров сообщества Laravel, ветеранов индустрии веб-разработки и мультидисциплинарных создателей. Мы создали, спасли, реорганизовали и поддержали огромное количество приложений Laravel с первых дней существования Laravel. Какой бы ни была Ваша задача, у нас есть опыт и знания, чтобы помочь.</p>
                                    <a href="/partner/tighten" class="group mt-8 inline-flex items-center text-red-600 font-medium">
                                        <span>Больше о Tighten</span>
                                        <span class="ml-3 transform transition group-hover:translate-x-1">→</span>
                                    </a>
                                </div>
                            @elseif($featured == 'vehikl')
                                <img class="w-full md:absolute md:right-1/2 md:top-0 md:w-224" src="/img/partners/img_vehikl.jpg" alt="Vehikl">
                                <div class="p-12 bg-white shadow-lg md:relative md:w-3/4 md:ml-auto lg:px-24 lg:py-20">
                                    <h6 class="text-gray-600 font-medium text-sm">Рекомендуемый партнер</h6>
                                    <img class="mt-6" src="/img/partners/vehikl.min.svg" alt="Vehikl">
                                    <p class="mt-6 text-gray-600 lg:text-lg">Vehikl - это команда экспертов Laravel по разбору кода. На протяжении многих лет мы создали множество веб-приложений для клиентов, используя Laravel в качестве предпочтительной среды, и внедрили методы разработки Lean Agile для создания профессиональных приложений, которые функциональны и просты в использовании.</p>
                                    <a href="/partner/vehikl" class="group mt-8 inline-flex items-center text-red-600 font-medium">
                                        <span>Больше о Vehikl</span>
                                        <span class="ml-3 transform transition group-hover:translate-x-1">→</span>
                                    </a>
                                </div>
                            @elseif($featured == 'devsquad')
                                <img class="w-full md:absolute md:right-1/2 md:top-0 md:w-224" src="/img/partners/img_devsquad_detail.jpg" alt="DevSquad" style="right: 53%;">
                                <div class="p-12 bg-white shadow-lg md:relative md:w-3/4 md:ml-auto lg:px-24 lg:py-20">
                                    <h6 class="text-gray-600 font-medium text-sm">Рекомендуемый партнер</h6>
                                    <img class="mt-6" src="/img/partners/devsquad.png" alt="DevSquad" style="max-width: 200px;">
                                    <p class="mt-6 text-gray-600 lg:text-lg">Члены команды DevSquad обладают уникальными и разнообразными навыками, и эта кросс-функциональность позволяет нам успешно выполнять любую миссию.</p>
                                    <a href="/partner/dev-squad" class="group mt-8 inline-flex items-center text-red-600 font-medium">
                                        <span>Больше о DevSquad</span>
                                        <span class="ml-3 transform transition group-hover:translate-x-1">→</span>
                                    </a>
                                </div>
                            @elseif($featured == '64robots')
                                <img class="w-full md:absolute md:right-1/2 md:top-0 md:w-224" src="/img/partners/img_64robots_detail.jpg" alt="64Robots" style="right: 40%;">
                                <div class="p-12 bg-white shadow-lg md:relative md:w-3/4 md:ml-auto lg:px-24 lg:py-20">
                                    <h6 class="text-gray-600 font-medium text-sm">Рекомендуемый партнер</h6>
                                    <img class="mt-6" src="/img/partners/64Robots.min.svg" alt="DevSquad" style="max-width: 200px;">
                                    <p class="mt-6 text-gray-600 lg:text-lg">64 Robots - это команда экспертов Laravel, объединенных стремлением создавать передовые веб-продукты. Независимо от того, создаете ли Вы что-то новое или проводите рефакторинг продукта, нуждающегося в помощи, мы предложим вам индивидуальный и продуманный подход к разработке..</p>
                                    <a href="/partner/64robots" class="group mt-8 inline-flex items-center text-red-600 font-medium">
                                        <span>Больше о 64 Robots</span>
                                        <span class="ml-3 transform transition group-hover:translate-x-1">→</span>
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                </section>

                <div class="max-w-screen-xl mx-auto px-8 py-12 md:py-32">
                    <ul class="grid grid-cols-1 gap-x-4 gap-y-6 md:grid-cols-2 lg:grid-cols-3 lg:gap-8">
                        @foreach($otherPartners as $i => $otherPartner)
                            <li>
                                <div class="flex flex-col h-full p-12 bg-white shadow-lg">
                                    @if($otherPartner == 'tighten')
                                        <div class="h-10">
                                            <img src="/img/partners/tighten.min.svg" alt="Tighten" class="h-full">
                                        </div>
                                        <p class="mt-6 flex-1 text-xs text-gray-600 md:text-sm">Их команда первоклассных разработчиков Laravel создаст Ваш продукт, поможет вывести его на рынок и будет работать вместе с Вами по мере изменения ситуации.</p>
                                        <a href="/partner/tighten" class="group mt-6 inline-flex items-center text-red-600 font-medium">
                                            <span>Больше о Tighten</span>
                                            <span class="ml-2 transform transition-transform group-hover:translate-x-1">→</span>
                                        </a>
                                    @elseif($otherPartner == 'vehikl')
                                        <div class="h-10">
                                            <img src="/img/partners/vehikl.min.svg" alt="Vehikl" class="h-full">
                                        </div>
                                        <p class="mt-6 flex-1 text-xs text-gray-600 md:text-sm">Команда экспертов Laravel по разбору кода. За прошедшие годы мы создали множество веб-приложений для клиентов, использующих Laravel.</p>
                                        <a href="/partner/vehikl" class="group mt-6 inline-flex items-center text-red-600 font-medium">
                                            <span>Больше о Vehikl</span>
                                            <span class="ml-2 transform transition-transform group-hover:translate-x-1">→</span>
                                        </a>
                                    @elseif($otherPartner == 'devsquad')
                                        <div class="h-10">
                                            <img src="/img/partners/devsquad.png" alt="DevSquad" class="h-full">
                                        </div>
                                        <p class="mt-6 flex-1 text-xs text-gray-600 md:text-sm">Члены команды DevSquad обладают уникальными и разнообразными навыками, и эта кросс-функциональность позволяет нам успешно выполнять любую миссию.</p>
                                        <a href="/partner/dev-squad" class="group mt-6 inline-flex items-center text-red-600 font-medium">
                                            <span>Больше о DevSquad</span>
                                            <span class="ml-2 transform transition-transform group-hover:translate-x-1">→</span>
                                        </a>
                                    @elseif($otherPartner == '64robots')
                                        <div class="h-10">
                                            <img src="/img/partners/64Robots.min.svg" alt="64 Robots" class="h-full">
                                        </div>
                                        <p class="mt-6 flex-1 text-xs text-gray-600 md:text-sm">64 Robots - это команда экспертов Laravel с опытом создания успешных стартапов и продуктов SaaS.</p>
                                        <a href="/partner/64robots" class="group mt-6 inline-flex items-center text-red-600 font-medium">
                                            <span>Больше о 64 Robots</span>
                                            <span class="ml-2 transform transition-transform group-hover:translate-x-1">→</span>
                                        </a>
                                    @endif
                                </div>
                            </li>
                        @endforeach
                        <li>
                            <div class="flex flex-col h-full p-12 bg-white shadow-lg">
                                <div class="h-10">
                                    <img src="/img/partners/kirschbaum-2.min.svg" alt="Kirschbaum" class="h-full">
                                </div>
                                <p class="mt-6 flex-1 text-xs text-gray-600 md:text-sm">Команда тщательно отобранных экспертов Laravel с историей предоставления практических и эффективных решений сложных проблем.</p>
                                <a href="/partner/kirschbaum-development-group" class="group mt-6 inline-flex items-center text-red-600 font-medium">
                                    <span>Больше о Kirschbaum</span>
                                    <span class="ml-2 transform transition-transform group-hover:translate-x-1">→</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex flex-col h-full p-12 bg-white shadow-lg">
                                <div class="h-10">
                                    <img src="/img/partners/byte5.png" alt="byte5" class="h-full">
                                </div>
                                <p class="mt-6 flex-1 text-xs text-gray-600 md:text-sm">Специализируется на инновационных технологиях с открытым исходным кодом для создания отличных веб-приложений, сайтов и магазинов для своих международных клиентов.</p>
                                <a href="/partner/byte5" class="group mt-6 inline-flex items-center text-red-600 font-medium">
                                    <span>Больше о byte5</span>
                                    <span class="ml-2 transform transition-transform group-hover:translate-x-1">→</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex flex-col h-full p-12 bg-white shadow-lg">
                                <div class="h-10">
                                    <img src="/img/partners/cubet.png" alt="Cubet" class="h-full">
                                </div>
                                <p class="mt-6 flex-1 text-xs text-gray-600 md:text-sm">Cubet Techno Labs - это более 150 членов компании, занимающейся цифровой инженерией, которая помогает воплотить Ваши цифровые мечты в совершенство.</p>
                                <a href="/partner/cubet" class="group mt-6 inline-flex items-center text-red-600 font-medium">
                                    <span>Больше о Cubet</span>
                                    <span class="ml-2 transform transition-transform group-hover:translate-x-1">→</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex flex-col h-full p-12 bg-white shadow-lg">
                                <div class="h-10">
                                    <img src="/img/partners/ideil.min.svg" alt="ideil." class="h-full">
                                </div>
                                <p class="mt-6 flex-1 text-xs text-gray-600 md:text-sm">Компания ideil специализируется на разработке программного обеспечения на заказ. Это то, что им нравится делать, потому что это всегда новый вызов.</p>
                                <a href="/partner/ideil" class="group mt-6 inline-flex items-center text-red-600 font-medium">
                                    <span>Больше о ideil.</span>
                                    <span class="ml-2 transform transition-transform group-hover:translate-x-1">→</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex flex-col h-full p-12 bg-white shadow-lg">
                                <div>
                                    <img src="/img/partners/cyberduck.png" alt="Cyber-Duck" class="h-full w-64">
                                </div>
                                <p class="mt-6 flex-1 text-xs text-gray-600 md:text-sm">Команда Cyber-Duck состоит из более 45 экспертов по пользовательскому опыту, разработчиков программного обеспечения и маркетинговых стратегов из Великобритании и США.</p>
                                <a href="/partner/cyber-duck" class="group mt-6 inline-flex items-center text-red-600 font-medium">
                                    <span>Больше о Cyber-Duck</span>
                                    <span class="ml-2 transform transition-transform group-hover:translate-x-1">→</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex flex-col h-full p-12 bg-white shadow-lg">
                                <div class="h-10">
                                    <img src="/img/partners/aboutyou.svg" alt="About You" class="h-full">
                                </div>
                                <p class="mt-6 flex-1 text-xs text-gray-600 md:text-sm">ABOUT YOU - один из самых быстрорастущих стартапов в области электронной коммерции в Европе, расположенный в центре Гамбурга.</p>
                                <a href="/partner/about-you" class="group mt-6 inline-flex items-center text-red-600 font-medium">
                                    <span>Больше о About You</span>
                                    <span class="ml-2 transform transition-transform group-hover:translate-x-1">→</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex flex-col h-full p-12 bg-white shadow-lg">
                                <div class="h-14">
                                    <img src="/img/partners/romega.svg" alt="Romega Software" class="h-full">
                                </div>
                                <p class="mt-6 flex-1 text-xs text-gray-600 md:text-sm">Braden and Ben - руководители инфраструктуры, разработки и управления бизнесом, которые предлагают Вам свой опыт и партнерские отношения, чтобы Вы могли уверенно переходить от идеи к развертыванию и дальше.</p>
                                <a href="/partner/romega-software" class="group mt-6 inline-flex items-center text-red-600 font-medium">
                                    <span>Больше о Romega</span>
                                    <span class="ml-2 transform transition-transform group-hover:translate-x-1">→</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex flex-col h-full p-12 bg-white shadow-lg">
                                <div class="h-14">
                                    <img src="/img/partners/jump24.jpg" alt="Jump24" class="h-full">
                                </div>
                                <p class="mt-6 flex-1 text-xs text-gray-600 md:text-sm">Работая в разных отраслях и с разным размером клиентов, мы с удовольствием решаем сложные задачи, чтобы обеспечить успех наших проектов.</p>
                                <a href="/partner/jump24" class="group mt-6 inline-flex items-center text-red-600 font-medium">
                                    <span>Больше о Jump24</span>
                                    <span class="ml-2 transform transition-transform group-hover:translate-x-1">→</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex flex-col h-full p-12 bg-white shadow-lg">
                                <div class="h-14">
                                    <img src="/img/partners/few.svg" alt="Few" class="h-full">
                                </div>
                                <p class="mt-6 flex-1 text-xs text-gray-600 md:text-sm">Мы проектируем и создаем отличные цифровые продукты для команд любого размера, от стартапов до корпоративных организаций.</p>
                                <a href="/partner/few" class="group mt-6 inline-flex items-center text-red-600 font-medium">
                                    <span>Больше о Few</span>
                                    <span class="ml-2 transform transition-transform group-hover:translate-x-1">→</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@stop
