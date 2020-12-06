@extends('admin.layout')
@section('content')

    <div class="content-wrapper container"style="margin-top:100px">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">

                    <div class="col-sm-12">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Меню</a></li>
                            <li class="breadcrumb-item active">Менеджер Пользователей</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>


        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 m30">
                    <div class="">
                        <div class="">Пользователи</div>

                        <div class="card-body">

                            <div class="">
                                <div class="">{{ $user->name }}</div>
                                <form action="{{ route('admin.user.update', $user) }}" method="post">
                                    @csrf
                                    {{ method_field('PUT') }}

                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">
                                            E-Mail Address</label>

                                        <div class="col-md-4">
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ $user->email }}" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">
                                            Name</label>

                                        <div class="col-md-4">
                                            <input id="name" type="text"
                                                class="form-control @error('name') is-invalid @enderror" name="name"
                                                value="{{ $user->name }}" required autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="roles" class="col-md-4 col-form-label text-md-right">
                                            Roles</label>
                                        @foreach ($roles as $role)
                                            <div class="form-check">
                                                <input type="checkbox" name="roles[]" id="check" value="{{ $role->id }}"
                                                    @if ($user->roles->pluck('id')->contains($role->id)) checked
                                        @endif>
                                        <label for="check">{{ $role->name }}</label>
                                    </div>
                                    @endforeach
                            </div>

                            <input type="submit" value="Сохранить" class="btn btn-primary">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
