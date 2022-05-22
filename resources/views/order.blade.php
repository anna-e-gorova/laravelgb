@extends('layouts.main')
@section('title') Заказ выгрузки @parent @stop
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Заказ выгрузки</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
            </div>
        </div>
    </div>

    <div class="row">
        @if($errors->any())
            @foreach($errors->all() as $error)
                <x-alert type="danger" :message="$error"></x-alert>
            @endforeach
        @endif

        <form method="post" action="{{ route('store') }}">
            @csrf

            <div class="form-group">
                <label for="title">Ваше имя</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ old('title') }}">
            </div>
            <div class="form-group">
                <label for="phone">Номер телефона</label>
                <input type="text" id="phone" name="phone" pattern="^(\+7|7|8)?[\s\-]?\(?[489][0-9]{2}\)?[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}$" class="form-control" value="{{ old('phone') }}">
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}">
            </div>
            <div class="form-group">
                <label for="info">За какой год нужна выгрузка</label>
                <select class="form-control" name="info" id="info">
                    <option @if(old('status') === '2022') selected @endif>2022</option>
                    <option @if(old('status') === '2021') selected @endif>2021</option>
                    <option @if(old('status') === '2020') selected @endif>2020</option>
                </select>
            </div>
            <br>
            <button type="submit" class="btn btn-success">Отправить</button>
        </form>
    </div>
@endsection
