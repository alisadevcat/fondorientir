  @extends('layout', ['seo' => $page->getSeo()])
  @section('content')
      <section id="entity_section" class="entity_section">
          <div class="container">
              <div class="row">
                  <div class="col-md-9">
                      <div>
                          <ol class="breadcrumb info_breadcrumb">
                              <li class="breadcrumb-item"><a href="{{ route('useful-info') }}">Полезная
                                      информация</a></li>
                              <li class="breadcrumb-item active">Подтверждение ВНЖ</li>
                          </ol>
                      </div>
                      <div class="info_item">
                          <div class="info_item_title">
                              <h5 class="underline">Подтверждение ВНЖ</h5>
                          </div>
                          <div class="info_item_content">
                              <p>Как гласит пункт 6 статьи 8 ФЗ 115 от 25.07.2002 года, иностранные граждане, которые
                                  получили
                                  статус
                                  постоянно проживающих в России, то есть получили вид на жительство, должны каждый
                                  год подавать в
                                  ГУВМ МВД (бывший ФМС)&nbsp;уведомление о подтверждении своего проживания в РФ.</p>
                              <p>Об этом требовании закона иностранцам с ВНЖ ни в коем случае нельзя забывать. Ведь
                                  нарушение
                                  сроков
                                  подачи или не подача данного документа в ГУВМ МВД (бывший ФМС), грозит
                                  <strong>аннулированием
                                      вида
                                      на жительство</strong>.
                              </p>
                              <a href="tel:+78126124812"><img src="{{ asset('storage/button3.png') }}"
                                      alt=" consulation-button.jpg" class="green_btn img-responsive"
                                      title="Бесплатная консультация"></a>
                              <p style="font-style:italic;">Чтобы иностранному гражданину подтвердить свое проживание
                                  по виду на
                                  жительство в России, ему
                                  необходимо правильно заполнить специальный бланк <strong><a class="link_color"
                                          href="{{ asset('/storage/blanks/blank-6.rtf') }}">(скачать бланк
                                          здесь)</strong></a>,
                                  форма которого устанавливается
                                  правительством РФ, и подать его в ГУВМ МВД (бывший УФМС).</p>
                              <p>Помните, что уведомление необходимо подавать ежегодно и в то отделение ГУВМ МВД
                                  (бывший УФМС),
                                  где
                                  ВНЖ вами было получено. Год в данном случае отсчитывается именно с даты получения
                                  вида на
                                  жительство.</p>
                              <p>Подтвердить свое проживание по ВНЖ вы можете как самостоятельно &ndash; для этого вам
                                  нужно
                                  правильно, согласно установленным правилам, заполнить бланк уведомления и предать
                                  его в
                                  отделение
                                  ГУВМ МВД (бывший УФМС), так и с помощью нашей фирмы.</p>
                          </div>
                      </div>
                  </div>
                  @include('layouts.sidebar')
              </div>
          </div>
      </section>
  @endsection