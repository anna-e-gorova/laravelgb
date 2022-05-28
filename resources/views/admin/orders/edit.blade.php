@extends('layouts.admin')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Редактировать заказ</h1>
        <div class="btn-toolbar mb-2 mb-md-0">

        </div>
    </div>

    <div class="table-responsive">
        @include('inc.messages')
        <h3>Форма редактирования заказа</h3>

        <form method="post" action="{{ route('admin.orders.update', ['order' => $order]) }}">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="name">Наименование</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ $order->name }}">
            </div>
            <div class="form-group">
                <label for="phone">Телефон</label>
                <input type="text" id="phone" name="phone" class="form-control" value="{{ $order->phone }}">
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="text" id="email" name="email" class="form-control" value="{{ $order->email }}">
            </div>
            <div class="form-group">
                <label for="data">Описание</label>
                <textarea class="form-control" name="data" id="data">{!! $order->data !!}</textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-success">Сохранить</button>
        </form>
    </div>
@endsection
