@extends('layouts.admin')
@section('content')
<form action="#">
    <p>Название новости: <input type="text" name="name" /></p>
    <p>Подробное описание:  <textarea name="longDescription"></textarea></p>
    <p>Краткое описание: <input type="text" name="shortDescription" /></p>
    <p><input type="submit" /></p>
</form>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
@endsection
