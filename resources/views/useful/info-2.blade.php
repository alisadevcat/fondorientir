@extends('layout', ['seo' => $page->getSeo()])
@section('content')
    <section id="entity_section" class="entity_section">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <ul>
                        <li>
                            <h5 class="underline">
                                Миграционный учет
                            </h5>
                        </li>
                    </ul>

                    <img src="{{ asset('storage/info/uchet.jpg') }}" alt="migration.jpg" class="img-responsive"
                        title="Миграционный учет">.

                    <p>Постановка на миграционный учет граждан СНГ на 3 месяца (временная регистрация на 90 дней)</p>
                    <p>Миграционный учет иностранных граждан в РФ - это уведомление территориального органа Миграционной
                        службы
                        о
                        прибытии
                        иностранца на территорию страны.</p>
                    <p>В общем порядке в течение 7 рабочих дней после пересечения границы иностранцем, Принимающая его
                        сторона
                        должна
                        уведомить миграционную службу о прибытии гражданина другой страны.</p>
                    <a href="tel:+78126124812"><img src="{{ asset('storage/button2.png') }}" alt=" consulation-button.jpg"
                            class="green_btn img-responsive" title="Бесплатная консультация"></a>
                    <p>Для граждан некоторых государств установлены иные сроки, в течение которых нужно встать на
                        миграционный
                        учет
                        (оформить временную регистрацию):</p>
                    <p>Для граждан Белоруссии, Казахстана, Армении и Киргизии - 30 дней;</p>
                    <p>&nbsp;Для граждан Таджикистана &ndash; 15 дней.</p>
                    <p>Принимающей стороной могут выступать: Гражданин РФ; Иностранный гражданин, постоянно проживающий на
                        территории
                        РФ;
                        Юридическое лицо.</p>
                    <p>Скачать бланк уведомления о прибытии иностранца можно здесь.(ссылка на бланк №
                        1)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </p>
                    <p>ВАЖНО: иностранец не может сам встать на миграционный учет или выступать Принимающей стороной для
                        самого
                        себя!
                    </p>
                </div>
                @include('layouts.main_sidebar')
            </div>
    </section>
    </div>
@endsection
