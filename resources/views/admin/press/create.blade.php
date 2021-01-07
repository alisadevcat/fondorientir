@extends('admin.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div id="layoutSidenav_content">
        <main>
            <div class="content-wrapper admin-container mb50">
                <!-- Content Header (Page header) -->
                <section class="content-header pt10">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-12 col-md-11 ml1">
                                <ol class="breadcrumb float-sm-right ">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.news.index') }}">Новости</a></li>
                                    <li class="breadcrumb-item active">СМИ о нас/{{ $news->id }}</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-11 ml1">
                            <div class="card card-outline card-info">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        Добавить новость "СМИ о нас"
                                    </h3>
                                </div>

                                <div class="card-body">

                                    <!-- Default box -->
                                    <div class="box">
                                        <div class="box-header with-border">
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="box-body">
                                            {{ Form::open(['route' => 'admin.press.store', 'files' => true]) }}
                                            <div class="col-md-11 justify-content-center">
                                                @csrf
                                                <div class="form-group">
                                                    {{ Form::label('title', 'Название') }}
                                                    {{ Form::text('title', '', ['class' => 'form-control required']) }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('intro', 'Intro(краткое содержание новости)') }}
                                                    {{ Form::text('intro', '', ['class' => 'form-control summernote_news']) }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('image', 'Картинка.Рекомендуемый размер картинки:400x250px') }}
                                                    {{ Form::file('image') }}
                                                    @if (isset($item->image))
                                                        <p>
                                                            <img src="/storage/news/{{ $item->image }}"
                                                                alt="{{ $item->laravel_name }}" title="{{ $item->title }}"
                                                                style="width: 200px">
                                                        </p>
                                                    @endif
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('body', 'Текст') }}
                                                    {{ Form::textArea('body', '', ['class' => 'form-control summernote_news']) }}
                                                </div>

                                                {{ Form::hidden('category_id', 3) }}

                                                <div class="form-group">
                                                    {{ Form::label('date_published', 'Дата публикации') }}
                                                    {{ Form::datetimeLocal('date_published', '', ['class' => 'form-control required']) }}
                                                </div>

                                                @if (session()->has('message'))
                                                    <div class="alert alert-success">
                                                        {{ session()->get('message') }}
                                                    </div>
                                                @endif

                                                <div class="box-footer">
                                                    <div class="">
                                                        <a href="{{ url()->previous() }}" class="btn btn-default">Назад</a>
                                                        <button class="btn btn-primary pull-right"
                                                            style="margin-left:20px;"><i class="fas fa-save"></i>
                                                            Сохранить</button>
                                                    </div>
                                                </div>
                                            </div>
                                            {{ Form::close() }}
                                        </div>
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
        </main>
    </div>
@endsection
