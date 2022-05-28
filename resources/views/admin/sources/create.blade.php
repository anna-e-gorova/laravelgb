@extends('layouts.admin')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Добавить источник</h1>
        <div class="btn-toolbar mb-2 mb-md-0">

        </div>
    </div>

    <div class="table-responsive">
        @include('inc.messages')
        <h3>Форма добавления источника</h3>

        <form method="post" action="{{ route('admin.sources.store') }}">
            @csrf
            <div class="form-group">
                <label for="name">Наименование</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}">
            </div>

            <div class="form-group">
                <label for="url">Адрес</label>
                <textarea class="form-control" name="url" id="url">{!! old('url') !!}</textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-success">Сохранить</button>
        </form>
    </div>
@endsection

