@extends('admin.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper container">
        <!-- Content Header (Page header) -->

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">

                    <div class="col-sm-12">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Страницы</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-11 container">
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h3 class="card-title">
                                Добавить страницу
                            </h3>
                        </div>
                        <!-- Main content -->

                        <div class="card-body">

                            <!-- Default box -->
                            <div class="box">
                                {{-- <div class="box-header with-border">
                                    @include('admin.errors')
                                </div> --}}
                                <div class="box-body">
                                    {{ Form::open(['route' => 'admin.news.store', 'files' => true]) }}
                                    <div class="col-md-11 justify-content-center">

                                        <div class="form-group">
                                            {{ Form::label('name', 'Название') }}
                                            {{ Form::text('name', '', ['class' => 'form-control required']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('intro', 'Intro') }}
                                            {{ Form::text('intro', '', ['class' => 'form-control required']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('images', 'Картинка') }}
                                            {{ Form::file('images') }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('text_botton', 'Текст 3') }}
                                            {{ Form::textArea('body', '', ['class' => 'form-control summernote']) }}
                                        </div>

                                        {{-- <div class="form-group">
                                            {{ Form::label('category_id', 'Категория') }}
                                            {{ Form::select('category_id', ['2' => 'Фонд', '3' => 'Центр Поддержки', '4' => 'Новости', '5' => 'Пресса', '6' => 'Инфоцентр'], null, ['placeholder' => 'Выберите категорию']) }}
                                        </div> --}}

                                        @if (session()->has('message'))
                                            <div class="alert alert-success">
                                                {{ session()->get('message') }}
                                            </div>
                                        @endif
                                        <div class="box-footer">
                                            <div class="">
                                                <a href="{{ url()->previous() }}" class="btn btn-default">Назад</a>

                                                <button class="btn btn-primary pull-right"
                                                    style="margin-left:20px;">Сохранить</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{ Form::close() }}
                            </div>
                            <!-- /.box -->
                        </div>
                    </div>
                </div>
                <!-- /.content -->
            </div>
        </section>
    </div>
    <!-- /.content-wrapper -->
@endsection