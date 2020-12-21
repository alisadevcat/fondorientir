@extends('layout', ['seo' => $page->getSeo()])
@section('content')
    <section id="entity_section" class="entity_section">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <ul>
                        <li>
                            <h5 class="underline">
                                Миграционный учет: продление.
                            </h5>
                        </li>
                    </ul>

                    <p>Продление миграционного учета .</p>
                    <p>Срок разрешенного временного пребывания безвизовых иностранцев в РФ без оформления дополнительных
                        документов
                        составляет 90 суток, но иностранные граждане, заключившие трудовой договор и получившие патент на
                        работу, должны
                        оформить продление миграционного учета на срок действия заранее оплаченных чеков по патенту, но не
                        более
                        чем на
                        1
                        год с даты выдачи патента.</p>
                    <p>Срок разрешенного временного пребывания визовых иностранцев в РФ без оформления дополнительных
                        документов
                        ограничен
                        сроком, указанным в визе. Однако если иностранный гражданин въехал по рабочей визе и получил
                        разрешение
                        на
                        работу,
                        то он должен продлить визу и свой миграционный учет на срок действия разрешения на работу.</p>
                    <p>Срок разрешенного временного пребывания граждан ЕАЭС (Белоруссии, Киргизии, Армении, Казахстана) в
                        России
                        составляет
                        90 суток. Для них предусмотрен упрощенный порядок трудоустройства - им не требуется оформлять
                        дополнительных
                        разрешительных документов. Поэтому после заключения трудового договора работодатель иностранного
                        гражданина из
                        ЕАЭС
                        вместе с собственником квартиры(где проживает иностранец) должны просто продлить ему миграционный
                        учет
                        на срок
                        действия договора, но не более, чем на 1 год с даты въезда.</p>
                    <p><strong>Документы для продления миграционного учета по чекам</strong></p>
                    <ul>
                        <li>Паспорт;</li>
                        <li>Миграционная карта (цель въезда "Работа");</li>
                        <li>Патент на работу;</li>
                        <li>Предыдущий миграционный учет;</li>
                        <li>Все чеки, оплаченные за патент;</li>
                        <li>Трудовой договор;</li>
                        <li>Уведомление о заключении трудового договора.</li>
                    </ul>
                    <a href="tel:+78126124812"><img src="{{ asset('storage/button2.png') }}" alt=" consulation-button.jpg"
                            class="green_btn img-responsive" title="Бесплатная консультация"></a>
                    <p><strong>Документы для продления миграционного учета для граждан ЕАЭС (на год)</strong></p>
                    <ul>
                        <li>Паспорт;</li>
                        <li>Миграционная карта (цель въезда "Работа");</li>
                        <li>Предыдущий миграционный учет (если есть);</li>
                        <li>Трудовой договор;</li>
                        <li>Уведомление о заключении трудового договора.</li>
                    </ul>

                </div>
                @include('layouts.main_sidebar')
            </div>
    </section>
    </div>
@endsection
