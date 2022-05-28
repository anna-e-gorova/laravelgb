@extends('layouts.admin')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Список заказов</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{ route('admin.orders.create') }}" class="btn btn-sm btn-outline-secondary">Добавить заказ</a>
            </div>
        </div>
    </div>

    <div class="table-responsive">
        @include('inc.messages')
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Наименование</th>
                <th scope="col">Телефон</th>
                <th scope="col">E-Mail</th>
                <th scope="col">Данные</th>
                <th scope="col">Создан</th>
            </tr>
            </thead>
            <tbody></tbody>
            <tbody>
            @forelse($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->name }} </td>
                    <td>{{ $order->phone }} </td>
                    <td>{{ $order->email }}</td>
                    <td>{{ $order->data }}</td>
                    <td>{{ $order->created_at }}</td>
                    <td><a href="{{ route('admin.orders.edit', ['order' => $order->id]) }}" style="font-size: 12px;">Ред.</a> &nbsp;
                        <a href="javascript:;" style="color:red; font-size: 12px;">Уд.</a></td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">Записей нет</td>
                </tr>
            @endforelse
            </tbody>
        </table>

        {{ $orders->links() }}
    </div>
@endsection
