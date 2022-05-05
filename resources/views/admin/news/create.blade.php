@extends('layouts.admin')
@section('content')
    <form action="#">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Название новости:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Краткое описание:</label>
            <input type="text" class="form-control" id="exampleFormControlInput2" >
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Подробное описание</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <p><input type="submit" /></p>
    </form>
@endsection
