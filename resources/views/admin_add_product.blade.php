@extends('lay.app')
@section('title')Добавление продукта@endsection
@section('title-block')Добавление продукта@endsection

@section('content')

    <form method="post" action="{{route('admin-add-product-submit')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Введите Название</label>
            <input name="name" placeholder="Название" class="form-control">
        </div>

        <div class="form-group">
            <label for="description">Введите Описание</label>
            <input name="description" placeholder="Описание" class="form-control">
        </div>

        <div class="form-group">
            <label for="prise">Введите Цену</label>
            <input name="prise" placeholder="Цена" class="form-control">
        </div>

        <div class="form-group">
            <label for="category">Введите категорию</label>
            <input name="category"  class="form-control">
        </div>

        <div class="form-group">
            <label for="code">Введите код</label>
            <input name="code"  class="form-control">
        </div>

        <div class="form-group">
            <label for="image">Вствьте изображение</label>
            <input name="image" type="file" class="form-control">
        </div>

        <div class="form-group">
            <button type="submit" name="button" class="btn btn-success">Готово</button>
        </div>

    </form>

@endsection
