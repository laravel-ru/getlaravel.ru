@extends('partials.layout')

@section('content')
    @include('partials.header')

    <div class="remodal-bg partners_page">

        <div class="content_contain">
            <div class="page_contain">
                <div class="contain">
                    <section class="partners_hero">
                        <div class="hero_bg">
                            <video poster="/img/blocks/blocks_1.jpg" playsinline autoplay muted loop>
                                <source src="/img/blocks/blocks_1.mp4" type="video/mp4">
                            </video>
                        </div>
                        <div class="hero_content">
                            <h1>Делаем веб лучше с Laravel</h1>
                            <p>Партнеры Laravel - это элитные магазины, предлагающие первоклассную разработку и консультирование на Laravel. Каждый из наших партнеров может помочь Вам создать красивый, хорошо продуманный проект.</p>
                        </div>
                        <div class="hero_btn">
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSeOTE1G6zxSPbKdmQ59UKkL_Rja_ddAyG6Y6xxGdSGAWlNTFA/viewform?usp=sf_link" class="btn"><span>Стать партнером</span></a>
                        </div>
                    </section>
                </div>

                <section class="featured_partner">
                    <div class="contain">
                        <div class="featured_contain">
                            @if($featured == 'tighten')
                                <img class="featured_img" src="/img/partners/img_tighten_detail.jpeg" alt="Tighten" style="right: 48%;">
                                <div class="featured_content">
                                    <h6>Избранный Партнер</h6>
                                    <img class="logo" src="/img/partners/tighten.min.svg" alt="Tighten">
                                    <p>Tighten - это команда лидеров сообщества Laravel, ветеранов индустрии веб-разработки и междисциплинарных создателей. Мы создали, спасли, реорганизовали и поддержали огромное количество приложений Laravel с первых дней существования Laravel. Какой бы ни была Ваша задача, у нас есть опыт и знания, чтобы помочь.</p>
                                    <a href="/partner/tighten" class="learn_more">Больше о Tighten <span>→</span></a>
                                </div>
                            @elseif($featured == 'vehikl')
                                <img class="featured_img" src="/img/partners/img_vehikl.jpg" alt="Vehikl">
                                <div class="featured_content">
                                    <h6>Избранный Партнер</h6>
                                    <img class="logo" src="/img/partners/vehikl.min.svg" alt="Vehikl">
                                    <p>Vehikl - это команда экспертов Laravel по разбору кода. На протяжении многих лет мы создали множество веб-приложений для клиентов, используя Laravel в качестве предпочтительной среды, и внедрили методы разработки Lean Agile для создания профессиональных приложений, которые функциональны и просты в использовании.</p>
                                    <a href="/partner/vehikl" class="learn_more">Больше о Vehikl <span>→</span></a>
                                </div>
                            @elseif($featured == 'devsquad')
                                <img class="featured_img" src="/img/partners/img_devsquad_detail.jpg" alt="DevSquad" style="right: 53%;">
                                <div class="featured_content">
                                    <h6>Избранный Партнер</h6>
                                    <img class="logo" src="/img/partners/devsquad.png" alt="DevSquad" style="max-width: 200px;">
                                    <p>Члены команды DevSquad обладают уникальными и разнообразными навыками, и эта кросс-функциональность позволяет нам успешно выполнять любую миссию.</p>
                                    <a href="/partner/dev-squad" class="learn_more">Больше о DevSquad
                                        <span>→</span></a>
                                </div>
                            @elseif($featured == '64robots')
                                <img class="featured_img" src="/img/partners/img_64robots_detail.jpg" alt="64Robots" style="right: 40%;">
                                <div class="featured_content">
                                    <h6>Избранный Партнер</h6>
                                    <img class="logo" src="/img/partners/64Robots.min.svg" alt="DevSquad" style="max-width: 200px;">
                                    <p>64 Robots - это команда экспертов Laravel, объединенных стремлением создавать передовые веб-продукты. Независимо от того, создаете ли Вы что-то новое или проводите рефакторинг продукта, нуждающегося в помощи, мы предоставим Вам индивидуальный и продуманный подход к разработке.</p>
                                    <a href="/partner/64robots" class="learn_more">Больше о 64 Robots
                                        <span>→</span></a>
                                </div>
                            @endif
                        </div>
                    </div>
                </section>

                <div class="contain">
                    <div class="partners_block content_block bg_left">
                        <div class="bg">
                            <video poster="/img/blocks/blocks_2.jpg" playsinline autoplay muted loop>
                                <source src="/img/blocks/blocks_2.mp4" type="video/mp4">
                            </video>
                        </div>
                        <ul class="partners_list">
                            @foreach($otherPartners as $i => $otherPartner)
                                <li>
                                    <div class="content">
                                        @if($otherPartner == 'tighten')
                                            <div class="logo_contain">
                                                <img src="/img/partners/tighten.min.svg" alt="Tighten">
                                            </div>
                                            <p class="small">Их команда первоклассных разработчиков Laravel создаст Ваш продукт, поможет вывести его на рынок и будет работать вместе с Вами по мере изменения ситуации.</p>
                                            <a href="/partner/tighten" class="learn_more">Больше о Tighten
                                                <span>→</span></a>
                                        @elseif($otherPartner == 'vehikl')
                                            <div class="logo_contain">
                                                <img src="/img/partners/vehikl.min.svg" alt="Vehikl">
                                            </div>
                                            <p class="small">Команда экспертов Laravel по разбору кода. За эти годы мы создали множество веб-приложений для клиентов, использующих Laravel.</p>
                                            <a href="/partner/vehikl" class="learn_more">Больше о Vehikl
                                                <span>→</span></a>
                                        @elseif($otherPartner == 'devsquad')
                                            <div class="logo_contain">
                                                <img src="/img/partners/devsquad.png" width="183" alt="DevSquad">
                                            </div>
                                            <p class="small">Члены команды DevSquad обладают уникальными и разнообразными навыками, и эта кросс-функциональность позволяет нам успешно выполнять любую миссию.</p>
                                            <a href="/partner/dev-squad" class="learn_more">Больше о DevSquad
                                                <span>→</span></a>
                                        @elseif($otherPartner == '64robots')
                                            <div class="logo_contain">
                                                <img src="/img/partners/64Robots.min.svg" alt="64 Robots">
                                            </div>
                                            <p class="small">64 Robots - это команда экспертов Laravel с опытом создания успешных стартапов и продуктов SaaS.</p>
                                            <a href="/partner/64robots" class="learn_more">Больше о 64 Robots
                                                <span>→</span></a>
                                        @endif
                                    </div>
                                </li>
                            @endforeach
                            <li>
                                <div class="content">
                                    <div class="logo_contain">
                                        <img src="/img/partners/kirschbaum.min.svg" alt="Kirschbaum">
                                    </div>
                                    <p class="small">Команда тщательно отобранных экспертов Laravel с историей предоставления практических и эффективных решений сложных проблем.</p>
                                    <a href="/partner/kirschbaum-development-group" class="learn_more">Больше о Kirschbaum
                                        <span>→</span></a>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <div class="logo_contain">
                                        <img src="/img/partners/byte5.png" width="107" alt="byte5">
                                    </div>
                                    <p class="small">Специализируется на инновационных технологиях с открытым исходным кодом для создания отличных веб-приложений, сайтов и магазинов для своих международных клиентов.</p>
                                    <a href="/partner/byte5" class="learn_more">Больше о byte5 <span>→</span></a>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <div class="logo_contain">
                                        <img src="/img/partners/cubet.png" alt="Cubet">
                                    </div>
                                    <p class="small">Cubet Techno Labs - это более 150 членов компании, занимающейся цифровой инженерией, которая помогает воплотить Ваши цифровые мечты в совершенство.</p>
                                    <a href="/partner/cubet" class="learn_more">Больше о Cubet <span>→</span></a>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <div class="logo_contain">
                                        <img src="/img/partners/ideil.min.svg" alt="ideil.">
                                    </div>
                                    <p class="small">Компания ideil специализируется на разработке программного обеспечения на заказ. Это то, что им нравится делать, потому что это всегда новый вызов.</p>
                                    <a href="/partner/ideil" class="learn_more">Больше о ideil. <span>→</span></a>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <div class="logo_contain">
                                        <img src="/img/partners/cyberduck.png" width="245" alt="Cyber-Duck">
                                    </div>
                                    <p class="small">Команда Cyber-Duck состоит из 45+ экспертов по пользовательскому опыту, разработчиков программного обеспечения и маркетинговых стратегов из Великобритании и США.</p>
                                    <a href="/partner/cyber-duck" class="learn_more">Больше о Cyber-Duck
                                        <span>→</span></a>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <div class="logo_contain">
                                        <img src="/img/partners/aboutyou.svg" alt="About You">
                                    </div>
                                    <p class="small">ABOUT YOU - один из самых быстрорастущих стартапов в области электронной коммерции в Европе, расположенный в центре Гамбурга.</p>
                                    <a href="/partner/about-you" class="learn_more">Больше о About You. <span>→</span></a>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <div class="logo_contain">
                                        <img src="/img/partners/romega.svg" alt="Romega Software" style="height: 80px;margin-left: -14px;">
                                    </div>
                                    <p class="small">Braden and Ben - руководители инфраструктуры, разработки и управления бизнесом, которые предлагают Вам свой опыт и партнерские отношения, чтобы Вы могли уверенно переходить от идеи к развертыванию и не только.</p>
                                    <a href="/partner/romega-software" class="learn_more">Больше о Romega.
                                        <span>→</span></a>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <div class="logo_contain">
                                        <img src="/img/partners/jump24.jpg" alt="Jump24" style="height: 80px;margin-left: -14px;">
                                    </div>
                                    <p class="small">Работая в самых разных отраслях и размерах клиентов, мы с удовольствием решаем сложные задачи, чтобы обеспечить успех наших проектов.</p>
                                    <a href="/partner/jump24" class="learn_more">Больше о Jump24. <span>→</span></a>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <div class="logo_contain">
                                        <img src="/img/partners/few.svg" alt="Few" style="height: 75px;margin-left: -14px;">
                                    </div>
                                    <p class="small">Мы проектируем и создаем отличные цифровые продукты для команд любого размера, от стартапов до корпоративных организаций.</p>
                                    <a href="/partner/few" class="learn_more">Больше о Few. <span>→</span></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
